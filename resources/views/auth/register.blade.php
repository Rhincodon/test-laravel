{!! Form::open(['url' => '/auth/register']) !!}
{!! Form::label('name', 'Your Name') !!}
{!! Form::text('name', null, ['placeholder'=>'Name']) !!}
<br>
{!! Form::label('Your E-mail Address') !!}
{!! Form::text('email', null, ['placeholder'=>'Email Address']) !!}
<br>
{!! Form::label('Your Password') !!}
{!! Form::password('password', ['placeholder'=>'Password']) !!}
<br>
{!! Form::label('Confirm Password') !!}
{!! Form::password('password_confirmation', ['placeholder'=>'Confirm Password']) !!}
<br>
{!! Form::submit('Create My Account!') !!}
{!! Form::close() !!}