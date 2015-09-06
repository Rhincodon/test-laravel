@extends('master')

@include('errors')

@section('content')
<div class="center-absolute auth-block">
    <h1 class="text-center">Login</h1>

    {!! Form::open(['url' => 'auth/login', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

    <div class="form-group">
        {!! Form::email('email', null, ['required', 'placeholder'=>'E-mail', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::password('password', ['required', 'placeholder'=>'Password', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        <div class="checkbox">
            <label>
                {!! Form::checkbox('remember') !!}
                <span>Remember Me</span>
            </label>
        </div>
    </div>

    <div class="form-group">
        {!! Form::submit('Login', ['class' => 'btn btn-default btn-block']) !!}
    </div>

    {!! Form::close() !!}

</div>
@endsection