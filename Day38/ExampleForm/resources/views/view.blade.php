@extends('layouts/app')
@section('title', 'View All')
<div class="nav">
    <h2>View All</h2>
    <a href="/"> <button> Add User </button> </a>
</div>
@section('content')
    <center>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Age</th>
                <th>Image</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->age }}</td>
                    <td class="avtr"><img src="{{ 'assets' . '\\' . 'images' . '\\' . $user->avatar_name }}" alt="avatar"
                            width="100px" height="100px">
                    </td>
                </tr>
            @endforeach
        </table>
    </center>
@endsection
