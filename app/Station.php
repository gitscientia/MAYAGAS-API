<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'direction', 'suburb', 'cp', 'email', 'phone', 'price'
    ];

}
