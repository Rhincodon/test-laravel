<?php

namespace App\Http\Controllers;

use Log;
use Config;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class MandrillWebHookController extends Controller
{

    // Current $_POST[$key] with event data
    const MANDRILL_POST_KEY = 'mandrill_events';

    // Current custom header with verification key
    const MANDRILL_HEADER = 'X-Mandrill-Signature';

    public function saveHook(Request $request)
    {
        // Used for saving webhook on the server, need to send 200 status
        return response('', $request->method() === 'HEAD' ? 200 : 400);
    }

    public function handleData(Request $request)
    {

        $post_data = $request->input(self::MANDRILL_POST_KEY);
        $signature = $request->header(self::MANDRILL_HEADER);

        if (!$post_data && !$signature) {
            return response('No post data or signature specified', 400);
        }

        $str = $request->fullUrl() . self::MANDRILL_POST_KEY . $post_data;
        $hash = $this->generateSignatureHash($str);

        if ($hash === $signature) {
            Log::info('Mandrill Event' . ' + ' . $post_data);
            return response('', 200);
        } else {
            return response('Invalid signature', 403);
        }

    }

    /**
     * Generate signature hash for check
     * @param string $str
     * @return string hash signature
     */
    private function generateSignatureHash($str) {
        return base64_encode(hash_hmac('sha1', $str, Config::get('services.mandrill.webhook'), true));
    }

}
