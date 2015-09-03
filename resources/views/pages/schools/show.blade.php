@extends('layouts.default')

@section('content')

{{ $school->name }}



<section class="row text-center">
    <article class="small-2 columns">Price</article>
    <article class="small-2 columns">Quantity</article>
    <article class="small-2 columns">Price Per Ticket</article>
    <article class="small-2 columns">Section</article>
    <article class="small-2 columns">Row</article>
    <article class="small-2 columns">Seat</article>
</section>

@foreach($school->tickets as $ticket)
<section class="row text-center">
    <a href="{{ route('tickets.show', $ticket->id) }}" style="display:block;padding:10px 0;">
        <article class="small-2 columns">$ {{ number_format($ticket->price / 100, 2) }}</article>
        <article class="small-2 columns">{{ $ticket->quantity }}</article>
        <article class="small-2 columns">$ {{ number_format(($ticket->price / 100) / $ticket->quantity, 2) }}</article>
        <article class="small-2 columns">{{ $ticket->section }}</article>
        <article class="small-2 columns">{{ $ticket->row }}</article>
        <article class="small-2 columns">{{ $ticket->seat }}</article>
    </a>
</section>
@endforeach


@endsection
