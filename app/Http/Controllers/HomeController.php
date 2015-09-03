<?php

namespace Gameday\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Gameday\User;
use Gameday\School;
use Gameday\Conference;
use Gameday\Http\Requests;
use Gameday\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index')->with('conferences', Conference::with('schools')->get());
    }

    public function myTickets()
    {
        $user = User::with('buying', 'selling', 'bought', 'sold')->findOrFail(Auth::user()->id);
        return view('pages.mytickets', compact('user'));
    }
}
