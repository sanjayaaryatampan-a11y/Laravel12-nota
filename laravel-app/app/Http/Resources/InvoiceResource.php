<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'        => $this->id,
            'kode_item' => $this->item->kode,
            'nama_item' => $this->item->nama,
            'jumlah'    => $this->jumlah,
            'tanggal'   => $this->tanggal,
        ];
    }
}
