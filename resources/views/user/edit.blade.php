@extends('master')

@section('content')
    <div class="container content">
        {!! Form::open(['url' => 'admin/user/' . $user->id, 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
        <table class="table">
            <tr>
                <td>{!! Form::text('name', $user->name, ['required', 'class' => 'form-control']) !!}</td>
                <td>{!! Form::email('email', $user->email, ['required', 'class' => 'form-control']) !!}</td>
                <td class="checkbox"><label>{!! Form::checkbox('is_root', $user->is_root, !!$user->is_root) !!}<span>root</span></label></td>
                <td>{!! Form::submit('Update', ['class' => 'btn btn-default btn-block']) !!}</td>
            </tr>
        </table>
        {!! Form::close() !!}
    </div>
@endsection