<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_nota',
        'tanggal',
        'total_harga',
    ];

    public function items()
    {
        return $this->belongsToMany(Item::class, 'invoice_items')->withPivot('jumlah', 'total_harga');
    }
}