<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kategori5 extends Model
{
    protected $table = ["kategori_5"];
    protected $fillable = ['kategoriId', 'kategori_adi', 'ust_kategoriId'];

    public function AltKategoriler()
    {
        return $this->hasMany(Kategori6::class, 'kategoriId');
    }
    public function UstKategori()
    {
        return $this->belongsTo(Kategori4::class, 'kategoriId');
    }
}
