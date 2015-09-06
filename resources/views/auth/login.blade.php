{!! Form::open(['url' => '/auth/login', 'method' => 'POST']) !!}
{!! Form::label('email', 'Email') !!}
{!! Form::email('email') !!}
<br>
{!! Form::label('password', 'Password') !!}
{!! Form::password('password') !!}
<br>
{!! Form::checkbox('remember') !!}
{!! Form::label('remember', 'Remember Me') !!}
<br>
{!! Form::submit('Login') !!}
{!! Form::close() !!}