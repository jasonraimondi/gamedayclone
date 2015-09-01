<?php

namespace Gameday;

use Gameday\Ticket;
use Gameday\Conference;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{

    protected $fillable = ['name', 'conference_id'];

    public function conference()
    {
        return Conference::findOrFail($this->conference_id);
    }

    public function tickets()
    {
        return Ticket::where('school_id', $this->id)->get();
    }

    public function homeGames()
    {
        return Game::where('home_team', $this->id)->get();
    }

    public function awayGames()
    {
        return Game::where('away_team', $this->id)->get();
    }

}
