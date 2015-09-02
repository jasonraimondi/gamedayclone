@extends('layouts.auth')
@section('content')

<form method="POST" action="/auth/login">
    <fieldset>
        <legend>Login</legend>

        {!! csrf_field() !!}

        <label for="email">Email</label>
        <input type="email" name="email" value="{{ old('email') }}">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <input type="checkbox" name="remember"> Remember Me

        <button type="submit">Login</button>
    </fieldset>

</form>

@endsection
