<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';

    protected $fillable = [
        'user_id', 'judul', 'thumbnail', 'isi', 'created_at', 'updated_at'
    ];

    /**
     * method untuk mendapatkan data penulis/user
     * @param bool $queryReeturn
     * @return Model|\Illuminate\Database\Eloquent\Relations\BelongsTo|null|object|static
     */
    public function getUser($queryReeturn = true)
    {
        $data = $this->belongsTo('App\User', 'user_id');
        return $queryReeturn ? $data : $data->first();
    }
}
