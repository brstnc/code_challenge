<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kategori3 extends Model
{
    protected $table = ["kategori_3"];
    protected $fillable = ['kategoriId', 'kategori_adi', 'ust_kategoriId'];

    public function AltKategoriler()
    {
        return $this->hasMany(Kategori4::class, 'kategoriId');
    }
    public function UstKategori()
    {
        return $this->belongsTo(Kategori2::class, 'kategoriId');
    }
}
