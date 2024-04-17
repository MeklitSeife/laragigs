<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

Route::get('/', function () {
    return view('listings',[
      'heading' => 'Listing Heading',
      'listings' => Listing::all()
    ]);
  });

Route::get('/listings/{id}', function($id){
  return view('listing',[
    'heading' => 'find heading',
    'listing' => Listing::find($id)
  ]);
});
