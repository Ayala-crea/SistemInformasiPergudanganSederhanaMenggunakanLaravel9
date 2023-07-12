@extends('layouts.masuk.login')

@section('contents')
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>Login</h1>
        <form action="/sesi/login" method="post">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-tabel">username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password" class="form-tabel">password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3 d-grid">
            <button class="btn btn-primary" name="submit" type="submit">Login</button>
        </div>
    </form>
    </div>

@endsection