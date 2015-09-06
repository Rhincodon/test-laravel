@extends('master')

@include('errors')

@section('content')
<div class="center-absolute auth-block">
    <h1 class="text-center">Password recovery</h1>

    {!! Form::open(['url' => 'password/email', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

    <div class="form-group">
        {!! Form::email('email', null, ['required', 'placeholder'=>'E-mail', 'class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('E-mail Password Reset Link', ['class' => 'btn btn-default btn-block']) !!}
    </div>

    {!! Form::close() !!}

</div>
@endsection