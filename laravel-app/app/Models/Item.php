<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['kode', 'nama', 'harga'];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
