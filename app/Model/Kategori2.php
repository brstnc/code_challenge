<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kategori2 extends Model
{
    protected $table = ["kategori_2"];
    protected $fillable = ['kategoriId', 'kategori_adi', 'ust_kategoriId'];

    public function AltKategoriler()
    {
        return $this->hasMany(Kategori3::class, 'kategoriId');
    }
    public function UstKategori()
    {
        return $this->belongsTo(Kategori1::class, 'kategoriId');
    }
}
