<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\ProductsModel;
use App\Models\Units;
use Illuminate\Http\Request;

class ProductController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $user = new ProductsModel();
        $data['user'] = $user
            ->join('categories', 'products_models.category_id', '=', 'categories.id')
            ->join('brands', 'products_models.brand_id', '=', 'brands.id')
            ->join('units', 'products_models.unit_id', '=', 'units.id')
            ->select(
                'categories.category_name',
                'brands.brand_name',
                'units.unit_name',
                'products_models.*',
            )
            ->get();
        // return dd($user);
        return view('pages.products.view_products', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        $data['category'] = Category::get();
        // dd($data['category']);
        $data['brand'] = Brand::get();
        $data['unit'] = Units::get();
        return view('pages.products.add_products', $data);

    }

    /**
     * Store a newly created resource in storage.
     */

    public function product() {
        $data['category'] = categorie::orderBy('id', 'DESC')->get();
        $data['brand'] = brand::orderBy('id', 'DESC')->get();
        $data['unit'] = unit::orderBy('id', 'DESC')->get();

    }



    public function store(Request $request) {



        //  dd($request);
        $product = new ProductsModel();

        $product->category_id = $request->input('category_id');
        $product->brand_id = $request->input('brand_id');
        $product->product_name = $request->input('product_name');
        $product->description = $request->input('description');
        //    $user->product_image =$request->input('product_image'); 
        $product->unit_id = $request->input('unit_id');
        $product->selling_price = $request->input('selling_price');
        $product->buying_price = $request->input('buying_price');
        $product->sku = $request->input('sku');
        $product->product_status = $request->input('product_status');

        $image = $request->product_image;
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $request->product_image->move('uploads', $imageName);
        $product->product_image = $imageName;
        $product->stock = 0;


        $product->save();
        return redirect()->route('pro_show');
    }

    /**
     * Display the specified resource.
     */
    public function show() {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($product_id) {
        $data['category'] = Categories::get();
        $data['brand'] = Brand::get();
        $data['unit'] = Units::get();
        $user = new ProductsModel();
        $data['user'] = $user->find($product_id);
        return view('pages.products.edit_products', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        $user = ProductsModel::find($id);

        $user->category_id = $request->input('category_id');
        $user->brand_id = $request->input('brand_id');
        $user->product_name = $request->input('product_name');
        $user->description = $request->input('description');
        $user->product_image = $request->input('imageName');
        $user->unit_id = $request->input('unit_id');
        $user->selling_price = $request->input('selling_price');
        $user->buying_price = $request->input('buying_price');
        $user->sku = $request->input('sku');
        $user->product_status = $request->input('product_status');


        $user->save();
        return redirect()->route('pro_show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        $user = ProductsModel::find($id);
        $user->delete();
        return redirect('viewproducts');
    }
}

