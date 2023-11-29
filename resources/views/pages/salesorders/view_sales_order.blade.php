@extends('master')
@section('content')
    <div class="bg-secondary">
        <section class="">
            <div class="container-fluid">
                <div class="mb-12 row">
                    <div class="text-center col-sm-6">
                        <h1><i class="fa-solid fa-baby- "></i> Create Orders</h1>
                    </div>
                    <div class="text-right col-sm-6">
                        <h3 class="pt-3">Date {{ date('d-m-y') }}</h3>

                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->

        <section class="" style="background-color: white">
            <!-- Default box -->
            <div class="container-fluid">
                <div class="card">
                    {{-- <div class="card-header">
                    <div class="card-tools">
                        <div class="input-group" style="width: 250px;">
                            <input type="text" name="table_search" class="float-right " placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div> --}}
                    <div class="p-0 card-body table-responsive">
                        <div class="row">

                            <div class="col-6" style="background-color: white">
                                <div class="mb-3 row">
                                    <div class="col-7">
                                        <label style="font-size: 30px; padding-left:6px; for=" name">Customer</label>

                                        @php
                                            $customers = DB::table('Customers')->get();
                                        @endphp

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="col-5">
                                        <a href="#" class="text-right btn btn-info" data-toggle="modal"
                                            data-target="#exampleModal" data-whatever="@mdo">New Cuestomer </a>
                                    </div>
                                </div>

                                <div>
                                    <div>

                                        {{-- <h5 class="text-center bg-success">Product not Added</h5> --}}
                                        <table class="table">
                                            <thead class="bg-info">
                                                <tr>
                                                    <th class="text-white">Name</th>
                                                    <th class="text-white">Qty</th>
                                                    <th class="text-white">selling price</th>
                                                    <th class="text-white">Sub Total</th>
                                                    <th class="text-white">Action</th>

                                                </tr>
                                            </thead>
                                            @php
                                                $userId = auth()->user()->id;
                        
                                                Cart::restore($userId);
                                                $cart_product = Cart::content();
                                            @endphp
                                            <tbody>
                                                @foreach ($cart_product as $cart)
                                                    <tr>
                                                        <th>{{ $cart->name }}</th>
                                                        <th>
                                                            <form action="{{ url('/cart-update/' . $cart->rowId) }}"
                                                                method="post">
                                                                @csrf
                                                                <input type="number" name="qty"
                                                                    value="{{ $cart->qty }}" style="width:40px;">

                                                                <button type="submit" class="btn btn-sm btn-success"
                                                                    style="margin-top:-2px;">
                                                                    <i class="fas fa-check"></i></button>

                                                            </form>
                                                        </th>
                                                        <th>{{ $cart->price }}</th>
                                                        <th>{{ $cart->price * $cart->qty }}</th>

                                                        <th><a href="{{ URL::to('/cart-remove/' . $cart->rowId) }}"><i
                                                                    class="fas fa-trash-alt text-danegr"></i> </a>
                                                        </th>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="pl-4 pricing-footer bg-info">
                                        <p style="font-size:19px">Quantity :{{ Cart::count() }}</p>
                                        <p style="font-size:19px">Sub Total: {{ Cart::subtotal() }}</p>
                                        <p style="font-size:19px">Vat : {{ Cart::tax() }}</p>
                                        <hr>
                                        <p>
                                        <h2 class="text-white">Total:</h2>
                                        <h1 class="text-white">{{ Cart::total() }}</h1>
                                        </p>

                                        <form method="post" action="{{ url('/create-invoice') }}">
                                            @csrf
                                            {{-- <input type="hidden" name="id" value="{{ $cust->id }}"> --}}
                                            <div class="mt-3">
                                                <select name="cust0003" class="form-control bg-success">
                                                    <option class="text-dark" disabled="" selected=""> Select a Customer</option>
                                                    @foreach ($customers as $cust)
                                                        <option value="{{ $cust->customer_id }}">
                                                            {{ $cust->customer_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-success">Create Invoice</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            {{-- ********* All Product Start --}}

                            <div class="col-6 ">

                                {{-- <div class="card-header bg-info">
                                <div class="card-tools ">
                                    <div
                                        class="input-group d-flex align-items-center justify-content-between">
                                        <form action="{{ route('search-product') }}" method="GET" class="d-flex">
                                            @csrf
                                            <input type="text" name="product_search" class="float-right "
                                                placeholder="Search">
                                            <input class="btn btn-primary" type="submit" value="search">
                                        </form>

                                        <div class="text-right input-group-append">
                                            <a href="{{ route('search-product') }}" type="submit"
                                                class="btn btn-success">Refresh
                                                <i class="fas fa-search"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                                <div class="table-responsive">
                                    <table class="table text-white table-hover text-nowrap">
                                        <thead>
                                            <tr class="bg-info">

                                                <th>Product Name</th>
                                                <th>Category</th>
                                                <th>Images</th>
                                                <th>Brand</th>
                                                <th>quantity</th>

                                                <th>Buying Price</th>
                                                <th>Seling Price</th>
                                                <th>Code</th>

                                            </tr>
                                        </thead>
                                        <tbody class="bg-dark">
                                            @foreach ($product as $prod)
                                                <tr>
                                                    <form action="{{ url('/add-cart') }}" method="post">
                                                        @csrf

                                                        <input type="hidden" name="id"
                                                            value="{{ $prod->product_id }}">
                                                        <input type="hidden" name="name"
                                                            value="{{ $prod->product_name }}">
                                                        <input type="hidden" name="qty" value="1">

                                                        <input type="hidden" name="price"
                                                            value="{{ $prod->selling_price }}">


                                                        <td>{{ $prod->product_name }}</td>

                                                        <td>{{ $prod->categoryName }}</td>
                                                        <td>
                                                            <img src="{{ asset('/uploads/' . $prod->product_image) }}"
                                                                style="height: 40px;width:50px;">
                                                        </td>
                                                        <td>{{ $prod->brandName }}</td>
                                                        <td>{{ $prod->quantity }}</td>
                                                        <td>{{ $prod->buying_price }}</td>
                                                        <td>{{ $prod->selling_price }}</td>
                                                        <td>{{ $prod->sku }}</td>
                                                        <td><button type="submit" class="btn btn-info btn-sm"><i
                                                                    class="fas fa-plus-square"></i></button></td>
                                                    </form>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.card -->




                {{-- customers add modal --}}
                <div class="col-md-6">
                    <form action="{{ route('customer_add') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="">
                                        <h4 class="text-center modal-title bg-info " id="exampleModalLabel"> Add New
                                            Customer</h4>
                                    </div>

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="modal-body bg-info">
                                        {{-- <form method="post" action="{{ route('customers.store') }}"> --}}

                                        <div class="form-group ">
                                            <label for="recipient-name" class="col-form-label">Name : </label>
                                            <input type="text" name="customer_name" placeholder="Customer Name"
                                                class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Email : </label>
                                            <input type="text" name="customer_email" placeholder="Email"
                                                class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Phone Number : </label>
                                            <input type="text" name="customer_phone" placeholder=" Phone Number"
                                                class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Address : </label>
                                            <input type="text" name="customer_address" placeholder="Address"
                                                class="form-control" id="recipient-name">
                                        </div>
                                        {{-- <div class="col-md-6">
                                            <div class="mb-2">
                                                <label for="status" class="col-form-label">Status</label>
                                                <select name="customer_status" id="recipient-name" class="form-control">
                                                    <option value="1">Active</option>
                                                    <option value="0">Block</option>
                                                </select>
                                            </div>
                                        </div> --}}
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </section>
    </div>
@endsection
@section('customJs')
    <script></script>
@endsection
