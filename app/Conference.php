<?php

namespace Gameday;

use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    protected $fillable = ['name'];

    public function schools()
    {
        return School::where('conference_id', $this->id)->get();
    }
}
