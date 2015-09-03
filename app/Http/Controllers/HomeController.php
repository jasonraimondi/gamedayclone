<?php

namespace Gameday\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Gameday\School;
use Gameday\Conference;
use Gameday\Http\Requests;
use Gameday\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {

        $conferences = Conference::with('schools')->get();

        return view('pages.index', compact('conferences'));

    }
}
