<?php

use App\Livewire\Catalogs\CatalogCreate;
use App\Livewire\Catalogs\CatalogIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/catalog/create', CatalogCreate::class)->name('catalog.create');
Route::get('/catalog', CatalogIndex::class)->name('catalog.index');
