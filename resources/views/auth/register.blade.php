@extends('master')

@include('errors')

@section('content')
<div class="center-absolute auth-block">
    <h1 class="text-center">Register</h1>

    {!! Form::open(['url' => 'auth/register', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

    <div class="form-group">
        {!! Form::text('name', null, ['required', 'placeholder'=>'Name', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::text('email', null, ['required', 'placeholder'=>'Email Address', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::password('password', ['required', 'placeholder'=>'Password', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::password('password_confirmation', ['required', 'placeholder'=>'Confirm Password', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Account', ['class' => 'btn btn-default btn-block']) !!}
    </div>

    {!! Form::close() !!}

</div>
@endsection