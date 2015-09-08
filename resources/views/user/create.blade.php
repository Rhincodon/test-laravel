@extends('master')

@section('content')
    <div class="container content">
        {!! Form::open(['url' => 'admin/user', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
        <table class="table">
            <tr>
                <td>{!! Form::text('name', null, ['required', 'placeholder' => 'Name', 'class' => 'form-control']) !!}</td>
                <td>{!! Form::email('email', null, ['required', 'placeholder' => 'E-Mail', 'class' => 'form-control']) !!}</td>
                <td>{!! Form::password('password', ['required', 'placeholder' => 'Password', 'class' => 'form-control']) !!}</td>
                <td class="checkbox"><label>{!! Form::checkbox('is_root', null, false) !!}<span>root</span></label></td>
                <td>{!! Form::submit('Create', ['class' => 'btn btn-default btn-block']) !!}</td>
            </tr>
        </table>
        {!! Form::close() !!}
    </div>
@endsection