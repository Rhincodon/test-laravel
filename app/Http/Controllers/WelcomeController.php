<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller as BaseController;

class WelcomeController extends BaseController
{
    function index()
    {
        return view('welcome');
    }
}
