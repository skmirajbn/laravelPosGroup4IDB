<?php
namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\ProductsModel;
use App\Models\SalesOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SalesOrdersModel;
use App\Models\SOrderProduct;
use Illuminate\Support\Facades\Auth;

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
        $customers = Customers::all();
        return view('pages.salesorders.view_sales_order', compact(['products', 'customers']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $request->validate([
            'customerId' => 'required',
            'productId' => 'required',
            'quantity' => 'required',
        ]);

        DB::transaction(function () use ($request) {
            // Insert to the sales order table
            $userId = Auth::user()->id;
            $customerId = $request->customerId;

            $salesOrder = SalesOrder::create([
                'customer_id' => $customerId,
                'user_id' => $userId,
                'status' => 1,
            ]);

            // Insert to s_order_products table
            $productsId = $request->productId;
            $quantities = $request->quantity;

            foreach ($productsId as $index => $productId) {
                $sOrderProduct = SOrderProduct::create([
                    'product_id' => $productId,
                    'quantity' => $quantities[$index],
                    'sales_order_id' => $salesOrder->id,
                ]);
            }
            if ($sOrderProduct) {
                echo "Order Created";
            }
        });



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
