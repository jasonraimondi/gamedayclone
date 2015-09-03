@extends('layouts.default')

@section('content')

    <p>
        <strong>Seller:</strong> {{ $ticket->seller->name }}
    </p>

@endsection
