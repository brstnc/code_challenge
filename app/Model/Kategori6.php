<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kategori6 extends Model
{
    protected $table = ["kategori_2"];
    protected $fillable = ['kategoriId', 'kategori_adi', 'ust_kategoriId'];

    public function UstKategori()
    {
        return $this->belongsTo(Kategori5::class, 'kategoriId');
    }
}
