<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('brands.index', [
            'brands' => Brand::all()
        ]);

    }
     public function show(string $id)
     {
         return view( 'brands.show', [
             'brand'=> Brand::all()->where('id',  $id)->first()
         ]);
     }
}
