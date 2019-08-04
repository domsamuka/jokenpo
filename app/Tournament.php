<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'when',
    ];
    /**
     * Get the user that owns the tournament.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
