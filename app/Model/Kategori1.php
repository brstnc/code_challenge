<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kategori1 extends Model
{
    protected $table = ["kategori_1"];
    protected $fillable = ['kategoriId', 'kategori_adi'];

    public function AltKategoriler()
    {
        return $this->hasMany(Kategori2::class, 'kategoriId');
    }
}
