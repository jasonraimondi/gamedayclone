@extends('layouts.auth')
@section('content')

<form method="POST" action="/auth/register">
    <fieldset>
        <legend>Register</legend>

        {!! csrf_field() !!}

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Name">

        <label for="email">Email</label>
        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">

        <label>
            School
            <select name="school_id">
                <option disabled selected> Select a School</option>
                @foreach($schools as $school)
                    <option value="{{ $school->id }}">{{ $school->name }}</option>
                @endforeach
            </select>
        </label>

        <label for="phone">Phone Number</label>
        <input type="text" name="phone" placeholder="Phone Number">

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password">

        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" placeholder="Confirm Password">

        <button type="submit">Register</button>

    </fieldset>
</form>

@endsection
