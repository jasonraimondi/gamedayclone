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
        return $this->belongsTo('Gameday\Conference');
    }

    public function tickets()
    {
        return $this->hasMany('Gameday\Ticket');
    }

    public function homeGames()
    {
        return $this->hasMany('Gameday\Game', 'home_team');
    }

    public function awayGames()
    {
        return $this->hasMany('Gameday\Game', 'away_team');
    }

}
