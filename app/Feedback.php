<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table='feedback';

    protected $fillable=[
        'portofolio_id','nama','email','komentar','created_at','updated_at'
    ];

    /**
     * cara mendapatkan id porotfolio
     * @param bool $queryReturn
     * @return Model|\Illuminate\Database\Eloquent\Relations\BelongsTo|null|object|static
     */
    public function getPortofolio($queryReturn=true)
    {
        $data=$this->belongsTo('App/Portofolio', 'portofolio_id');
        return $queryReturn ? $data : $data->first();
    }

}
