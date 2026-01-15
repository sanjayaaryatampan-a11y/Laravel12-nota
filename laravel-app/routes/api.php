<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ItemController;
use App\Http\Controllers\Api\InvoiceController;

Route::apiResource('items', ItemController::class);
Route::apiResource('invoices', InvoiceController::class);