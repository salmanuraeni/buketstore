<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    public function produks(){
        return $this->hasMany(produk::class, 'kategoris_id', 'id');
    }
}
