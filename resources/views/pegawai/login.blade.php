@extends('layouts.pegawai')

@section('title', 'Login Pegawai')

@section('content')
<div class="h-100 d-flex flex-row justify-content-center align-items-center">
    <form class="form-signin" class="text-center">
        <h1 class="h3 mb-3 font-weight-normal">Sign In Pegawai</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
</div>
@endsection

