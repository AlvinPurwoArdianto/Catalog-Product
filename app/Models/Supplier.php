<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_supplier', 'alamat', 'nama_brand'];
    public $timestamp = true;

    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
