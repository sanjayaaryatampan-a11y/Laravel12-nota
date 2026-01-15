<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Invoice;
use App\Models\Item;
use App\Http\Resources\InvoiceResource;

class InvoiceController extends Controller
{
    public function index()
    {
        $data = Invoice::with('item')->get();

        return response()->json([
            'status' => true,
            'message' => 'Data invoice',
            'data' => InvoiceResource::collection($data)
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_item' => 'required|exists:items,kode',
            'jumlah'    => 'required|integer|min:1',
            'tanggal'   => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validasi gagal',
                'data' => $validator->errors()
            ], 422);
        }

        $item = Item::where('kode', $request->kode_item)->first();

        $invoice = Invoice::create([
            'item_id' => $item->id,
            'jumlah'  => $request->jumlah,
            'tanggal' => $request->tanggal,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Invoice berhasil ditambahkan',
            'data' => new InvoiceResource($invoice->load('item'))
        ]);
    }
}
