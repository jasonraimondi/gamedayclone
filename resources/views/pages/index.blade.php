@extends('layouts.default')

@section('content')

    <ul class="no-bullet">
        @foreach($conferences as $conference)
        <li><strong>{{ $conference->name }}</strong></li>

        <ul class="no-bullet">
            @foreach($conference->schools as $school)
            <li>{{ $school->name }}</li>
            @endforeach
        </ul>
        @endforeach
    </ul>

@endsection
