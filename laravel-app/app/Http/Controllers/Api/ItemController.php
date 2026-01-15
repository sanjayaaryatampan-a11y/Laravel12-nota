<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => true,
            'message' => 'Data item',
            'data' => Item::all()
        ]);
    }
}
