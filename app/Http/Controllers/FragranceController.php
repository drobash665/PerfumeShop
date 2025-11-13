<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Fragrance;
use Illuminate\Http\Request;

class FragranceController extends Controller
{
    public function index(Request $request)
    {
        $perpage = $request->perpage ?? 2;
        return view('fragrances', [
            'fragrances' => Fragrance::paginate($perpage)->withQueryString(),
        ]);
    }

    public function create()
    {
        return view('fragrance.create', [
            'fragrances' => Fragrance::all(),
            'brands' => Brand::all()
        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|unique:fragrances|max:255',
            'price' => 'required|numeric|min:0',
            'brand_id' => 'required|integer|exists:brands,id',
            'description' => 'nullable|string|max:255',
            'gender' => 'required|in:male,female,unisex',
            'year' => 'required|date'
        ]);

        $fragrance = new Fragrance($validate);
        $fragrance->save();

        return redirect('/fragrance');
    }
    public function edit(string $id)
    {
        return view('fragrance.edit', [
            'fragrance' => Fragrance::all()->where('id', '=', $id)->first(),
            'brands' => Brand::all()
        ]);
    }
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|integer',
            'brand_id' => 'integer',
            'description' => 'nullable|string|max:255',
            'gender' => 'required|in:male,female,unisex',
            'year' => 'required|date'
        ]);
        $fragrance = Fragrance::all()->where('id', '=', $id)->first();
        $fragrance->name = $validate['name'];
        $fragrance->price  = $validate['price'];
        $fragrance->brand_id = $validate['brand_id'];
        $fragrance->description = $validate['description'];
        $fragrance->gender = $validate['gender'];
        $fragrance->year = $validate['year'];
        $fragrance->save();
        return redirect('/fragrance');
    }

    public function destroy(string $id)
    {
        Fragrance::destroy($id);
        return redirect('/fragrance');
    }
}
