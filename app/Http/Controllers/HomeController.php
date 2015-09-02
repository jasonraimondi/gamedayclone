<?php

namespace Gameday\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Gameday\Http\Requests;
use Gameday\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index')
                ->with('user', Auth::user());
    }
}
