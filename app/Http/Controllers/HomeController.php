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

        $schools = School::get();
        $conferences = Conference::get();

        return view('pages.index', compact('schools', 'conferences'));

    }
}
