@extends('layouts.default')

@section('content')

<div class="">
    Tickets I'm Selling
    <ul>
        @foreach($user->selling as $ticket)
        <li><a href="{{ route('tickets.show', $ticket->id) }}">Ticket {{ $ticket->id }}</a></li>
        @endforeach
    </ul>
</div>

<div class="">
    Tickets I've Sold
    <ul>
        @foreach($user->sold as $ticket)
        <li><a href="{{ route('tickets.show', $ticket->id) }}">Ticket {{ $ticket->id }}</a></li>
        @endforeach
    </ul>
</div>

<div class="">
    Tickets I'm Buying
    <ul>
        @foreach($user->buying as $ticket)
        <li><a href="{{ route('tickets.show', $ticket->id) }}">Ticket {{ $ticket->id }}</a></li>
        @endforeach
    </ul>
</div>

<div class="">
    Tickets I've Bought
    <ul>
        @foreach($user->bought as $ticket)
        <li><a href="{{ route('tickets.show', $ticket->id) }}">Ticket {{ $ticket->id }}</a></li>
        @endforeach
    </ul>
</div>

@endsection
