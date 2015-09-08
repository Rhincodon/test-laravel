@extends('master')

@section('content')
<div class="container content">
    <div class="clearfix">
        <div class="pull-right" style="padding: 8px;">
            {!! Html::link('admin/user/create', 'New', ['class' => 'btn btn-default btn-success']) !!}
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>root</th>
                <th>created</th>
                <th>updated</th>
                <th class="text-right">action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{!!  Html::linkRoute('admin.user.show', $user->name, [$user->id]) !!}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->is_root ? 'yes' : 'no' }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
                <td class="clearfix">
                    <div class="pull-right" style="white-space: nowrap;">
                        {!! Html::link('admin/user/' . $user->id . '/edit', 'Edit', ['class' => 'btn btn-default btn-info']) !!}
                        {!! Form::open(['url' => 'admin/user/' . $user->id, 'method' => 'DELETE', 'class' => 'form-horizontal', 'style' => 'display: inline-block;']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-default btn-danger', 'onclick' => 'return confirm(\'Confirm delete\')']) !!}
                        {!! Form::close() !!}
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection