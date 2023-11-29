<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SalesOrdersModel;

class SalesorderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
    //     $salesorders = SalesOrdersModel::
    //     join('customer_models','sales_orders_models.salesorder_id','customer_models.id')
    //    -> join('products_models','sales_orders_models.salesorder_id','products_models.product_id')

    //     ->select('sales_orders_models.*','products_models.*','customer_models.customer_name','customer_models.customer_phone','customer_models.customer_address'
    //     )
    //     ->get();
        
 
    //     return view('backend/salesorders/view_sales_order', ['salesorders' => $salesorders]);


    $queryString = $request->product_search;
    $product = DB::table('products_models')
    ->join('categories','products_models.category_id','=','categories.category_id')
    ->join('brands','products_models.brand_id','=','brands.brand_id')
    ->select(
        'categories.category_name as categoryName',
        'brands.brand_name as brandName',
        'products_models.*',
       )->get();
    // return dd($product);

    $customers = DB::table('customers')->get();
    $categories = DB::table('categories')->get();

    // dd($customers);
    return view ('pages/salesorders/view_sales_order',compact('product','customers','categories'));






    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
