<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id'        => $this->id,
            'kode_item' => optional($this->item)->kode,
            'nama_item' => optional($this->item)->nama,
            'harga'     => optional($this->item)->harga,
            'jumlah'    => $this->jumlah,
            'tanggal'   => $this->tanggal,
        ];
    }
}
