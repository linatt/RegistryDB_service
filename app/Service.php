<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Service_Id', 'Service_Name', 'Service_Location'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
