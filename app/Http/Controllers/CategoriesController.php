<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
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
        return view('pages/Categories/addCategories');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new Categories();

        $user->category_name= $request->input('category_name');
        $user->save();
        return redirect()->route('category_show');
    }
    
    
    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = new Categories();
        $data['user'] = $user->get();
        return view('pages/Categories/viewCategories', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = new Categories();
        $data['user'] = $user->findorfail($id);
        return view('pages/Categories/editCategories', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Categories::find($id);

        $user->category_name= $request->input('category_name');

        $user->save();
        return redirect()->route('category_show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Categories::find($id);
        $user->delete();
        return back();
    }
}
