<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages/Brands/addBrands');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new Brand();

        $user->brand_name= $request->input('brand_name');
        $user->save();
        return redirect()->route('brand_show');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = new Brand();
        $data['user'] = $user->get();
        return view('pages/Brands/viewBrands', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = new Brand();
        $data['user'] = $user->findorfail($id);
        return view('pages/Brands/editBrands', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Brand::find($id);

        $user->brand_name= $request->input('brand_name');

        $user->save();
        return redirect()->route('brand_show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Brand::find($id);
        $user->delete();
        return redirect('viewbrands');
    }
}
