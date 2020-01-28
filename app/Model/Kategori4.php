<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kategori4 extends Model
{
    protected $table = ["kategori_4"];
    protected $fillable = ['kategoriId', 'kategori_adi', 'ust_kategoriId'];

    public function AltKategoriler()
    {
        return $this->hasMany(Kategori5::class, 'kategoriId');
    }
    public function UstKategori()
    {
        return $this->belongsTo(Kategori3::class, 'kategoriId');
    }
}
