<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $table='carousel';

    protected $fillable=[
        'user_id','dir','created_at','update_at'
    ];


    public function getUser($queryReturn=true)
    {
        $data=$this->belongsTo('App/User', 'user_id');
        return $queryReturn ? $data : $data->first();
    }
}
