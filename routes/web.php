<?php

use App\Http\Controllers\Products;
use Illuminate\Support\Facades\Route;

Route::get('/', [Products::class, 'index'])->name('product.index');
