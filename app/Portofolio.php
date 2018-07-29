<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table='portofolio';

    protected $fillable=[
        'user_id','thumbnail','nama_project','keterangan','created_at','updated_at'
    ];

    /**
     * cara mendapatkan id porotfolio
     * @param bool $queryReturn
     * @return Model|\Illuminate\Database\Eloquent\Relations\BelongsTo|null|object|static
     */
    public function getUser($queryReturn=true)
    {
        $data=$this->belongsTo('App/User', 'user_id');
        return $queryReturn ? $data : $data->first();
    }

}
