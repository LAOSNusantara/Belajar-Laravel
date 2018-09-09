<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Postingan extends Model
{
    protected $table = 'postingan';

    protected $primaryKey = 'id';

    protected $fillable = ['id_kategori','judul','isi'];

    public $timestamps = false;

    public function kategori()
    {
        return $this->belongsTo(
            Kategori::class,
            'id_kategori');
    }
}
