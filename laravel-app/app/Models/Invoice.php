<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['item_id', 'jumlah', 'tanggal'];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
