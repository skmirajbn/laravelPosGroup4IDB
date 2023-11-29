<?php
namespace App\Http\Controllers;

use App\Models\ProductsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SalesOrdersModel;

class SalesorderController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $products = ProductsModel::with('category', 'brand')->get();
        return view('pages.salesorders.view_sales_order', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        //
    }
}
