@extends('master')

@section('content')
    <div class="container content">
        <table class="table">
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->is_root ? 'root' : 'no root' }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
            </tr>
        </table>
    </div>
@endsection