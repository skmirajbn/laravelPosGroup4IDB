<?php

namespace App\Http\Controllers;
use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
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
        return view('pages/Customers/addCustomers');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new Customers();

        $user->customer_name= $request->input('customer_name');
        $user->customer_address= $request->input('customer_address');
        $user->customer_phone= $request->input('customer_phone');
        $user->customer_email= $request->input('customer_email');
        $user->save();
        return redirect()->route('customer_show');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = new Customers();
        $data['user'] = $user->get();
        return view('pages/Customers/viewCustomers', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = new Customers();
        $data['user'] = $user->findorfail($id);
        return view('pages/Customers/editCustomers', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Customers::find($id);

        $user->customer_name= $request->input('customer_name');
        $user->customer_address= $request->input('customer_address');
        $user->customer_phone= $request->input('customer_phone');
        $user->customer_email= $request->input('customer_email');

        $user->save();
        return redirect()->route('customer_show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Customers::find($id);
        $user->delete();
        return back();
    }
}
