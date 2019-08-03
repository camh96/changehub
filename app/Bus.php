<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Bus extends Model
{

    use EloquentTrait;
    
    protected $fillable = ['name', 'days', 'origin', 'destination', 'arrtime', 'deptime'];
    public $timestamps = false;

    function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}


