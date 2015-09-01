<?php

namespace App;

use App\Conference;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class School extends Model
{

    use SoftDeletes;

    protected $fillable = ['name', 'conference_id'];

    public function conference()
    {
        return Conference::findOrFail($this->conference_id);
    }
}