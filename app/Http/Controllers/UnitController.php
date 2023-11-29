<?php

namespace App\Http\Controllers;
use App\Models\Units;
use Illuminate\Http\Request;

class UnitController extends Controller
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
        return view('pages/Units/addUnits');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new Units();

        $user->unit_name= $request->input('unit_name');
        $user->save();
        return redirect()->route('unit_show');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = new Units();
        $data['user'] = $user->get();
        return view('pages/Units/viewUnits', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = new Units();
        $data['user'] = $user->findorfail($id);
        return view('pages/Units/editUnits', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Units::find($id);

        $user->unit_name= $request->input('unit_name');

        $user->save();
        return redirect()->route('unit_show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Units::find($id);
        $user->delete();
        return redirect('viewunits');
    }
}
