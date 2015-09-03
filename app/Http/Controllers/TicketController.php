<?php

namespace Gameday\Http\Controllers;

use Illuminate\Http\Request;

use Gameday\Ticket;
use Gameday\Http\Requests;
use Gameday\Http\Controllers\Controller;

class TicketController extends Controller
{

    public function index()
    {
        return Ticket::get();
    }

    public function show($id)
    {
        $ticket = Ticket::with('seller', 'buyer')->findOrFail($id);
        return view('pages.tickets.show', compact('ticket'));
    }

}
