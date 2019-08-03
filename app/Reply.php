<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Reply extends Model
{

    use EloquentTrait;
    
    protected $fillable = ['message', 'map_img'];
    public $timestamps = false;

    function schedule()
    {
        return $this->belongsTo('App\Bus', 'id');
    }

}


