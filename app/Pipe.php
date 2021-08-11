<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pipe extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'number', 'type_id', 'enrollment', 'status_id'
    ];

}
