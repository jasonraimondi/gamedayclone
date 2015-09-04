@extends('layouts.default')

@section('content')

<h1>{{ $school->name }}</h1>

<h4>Home Games</h4>
@foreach($school->homeGames as $homeGame)
<p>{{ $helper->schoolName($homeGame->home_team) }} vs {{ $helper->schoolName($homeGame->away_team) }}</p>
@endforeach

@endsection
