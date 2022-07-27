{{-- extends layous.php with post method --}}
@extends('layouts\app')
{{-- Set Title --}}
@section('title', 'Login Form')
<div class="nav">
    <h2>Home</h2>
    <a href="/view"> <button> View Users </button> </a>
</div>
@section('content')
    <form class="form" action="/create" method="post" enctype="multipart/form-data">
        @csrf
        <h2>Add Users</h2>
        <div class="message">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <input type="text" name="name" placeholder="name" required>
        <input type="email" name="email" placeholder="email" required>
        <input type="number" name="phone" placeholder="phone" id="ph" required>
        <input type="number" name="age" placeholder="age" id="">
        <input type="file" name="image" placeholder="Enter Profile pic">
        <input type="submit" value="Add User">
    </form>
@endsection
