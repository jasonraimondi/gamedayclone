@extends('layouts.default')

@section('content')

    Hi {{ $user->name }}, {{ $user->email }}

@endsection
