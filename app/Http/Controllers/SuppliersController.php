<?php

namespace App\Http\Controllers;
use App\Models\Suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
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
        return view('pages/Suppliers/addSuppliers');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new Suppliers();

        $user->supp_name= $request->input('supp_name');
        $user->supp_address= $request->input('supp_address');
        $user->supp_phone= $request->input('supp_phone');
        $user->supp_email= $request->input('supp_email');
        $user->save();
        return redirect()->route('supp_show');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = new Suppliers();
        $data['user'] = $user->get();
        return view('pages/Suppliers/viewSuppliers', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = new Suppliers();
        $data['user'] = $user->findorfail($id);
        return view('pages/Suppliers/editSuppliers', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Suppliers::find($id);

        $user->supp_name= $request->input('supp_name');
        $user->supp_address= $request->input('supp_address');
        $user->supp_phone= $request->input('supp_phone');
        $user->supp_email= $request->input('supp_email');

        $user->save();
        return redirect()->route('supp_show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Suppliers::find($id);
        $user->delete();
        return back();
    }
}
