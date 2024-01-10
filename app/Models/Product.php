<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    
    protected $fillable = ['nama', 'id_kategori', 'qty', 'harga_beli', 'harga_jual'];

    public function category(): HasOne
    {
        return $this->hasOne(Category::class, 'id', 'id_kategori');
    }
}
