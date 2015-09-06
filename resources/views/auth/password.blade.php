{!! Form::open(['url' => '/password/email']) !!}
{!! Form::label('email', 'Your E-mail Address') !!}
{!! Form::text('email', null, ['placeholder'=>'E-mail']) !!}
<br>
{!! Form::submit('E-mail Password Reset Link') !!}
{!! Form::close() !!}