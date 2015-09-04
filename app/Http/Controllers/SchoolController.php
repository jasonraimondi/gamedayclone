<?php

namespace Gameday\Http\Controllers;

use Illuminate\Http\Request;

use Gameday\School;
use Gameday\Conference;
use Gameday\Services\Helper;
use Gameday\Http\Requests;
use Gameday\Http\Controllers\Controller;

class SchoolController extends Controller
{

    public function index()
    {
        return view('pages.schools.index')->with('conferences', Conference::with('schools')->get());
    }

    public function show($id)
    {
        $school = School::with('conference', 'homeGames', 'awayGames', 'tickets')->findOrFail($id);
        $helper = new Helper;
        // dd($school);

        return view('pages.schools.show', compact('school', 'helper'));
    }

}
