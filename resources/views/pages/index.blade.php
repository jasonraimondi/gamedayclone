@extends('layouts.default')

@section('content')


    <ul>
        @foreach($conferences as $conference)
        <li>{{ $conference->name }}</li>

        <li>
            @foreach($schools as $school)
            <ul>
                @if($school->conference_id == $conference->id)
                <li>{{ $school->name }}</li>
                @endif
            </ul>
            @endforeach
        </li>
        @endforeach
    </ul>

@endsection
