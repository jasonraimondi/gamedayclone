<?php

namespace Gameday;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use SoftDeletes;

    public function game()
    {
        return $this->belongsTo('Gameday\Game');
    }

    public function school()
    {
        return $this->belongsTo('Gameday\School');
    }

    public function buyer()
    {
        return $this->belongsTo('Gameday\User', 'buyer_id');
    }

    public function seller()
    {
        return $this->belongsTo('Gameday\User', 'seller_id');
    }
}
