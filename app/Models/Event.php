<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'items' => 'array'
    ];

    protected $guarded = [];
    protected $dates = ['date'];

<<<<<<< HEAD
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
=======
    protected $dates = ['dates'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
>>>>>>> 7713187ad4487c3148cc5c1045f6913cbf378367
}
