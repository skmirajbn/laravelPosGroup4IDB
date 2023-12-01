@extends('master')
@section('content')
    <div class="bg-secondary">
        <section class="">
            <div class="container-fluid">
                <div class="mb-12 row">
                    <div class="text-center col-sm-6">
                        <h1><i class="fa-solid fa-baby-"></i> Create Orders</h1>
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

                    <div class="p-0 card-body table-responsive">
                        <div class="row">

                            <div class="col-6" style="background-color: white">
                                <div class="mb-3 row">
                                    <div class="col-7">
                                        <label style="font-size: 30px; padding-left:6px; for=" name">Customer</label>

                                    </div>

                                    <div class="col-5">
                                        <a href="#" class="text-right btn btn-info" data-toggle="modal"
                                            data-target="#exampleModal" data-whatever="@mdo">New Cuestomer </a>
                                    </div>
                                </div>
                                <form action="{{ route('order.sales-order.store') }}" method="post">
                                    @csrf
                                    <div>
                                        <div>
                                        
                                            <table class="table">
                                                <thead class="bg-info">
                                                    <tr>
                                                        <th class="text-white">Name</th>
                                                        <th class="text-white">Stock</th>
                                                        <th class="text-white">Qty</th>
                                                        <th class="text-white">selling price</th>
                                                        <th class="text-white">Sub Total</th>
                                                        <th class="text-white">Action</th>

                                                    </tr>
                                                </thead>

                                                <tbody id="salesOrderForm">
                                                    
                                                </tbody>
                                            </table>
                                        
                                        </div>
                                        <div class="pl-4 pricing-footer bg-info">
                                            <p style="font-size:19px">Quantity : <span id="totalQuantity"></span></p>
                                            <p style="font-size:19px">Sub Total: {{ Cart::subtotal() }}</p>
                                            <p style="font-size:19px">Vat : {{ Cart::tax() }}</p>
                                            <hr>
                                            <p>
                                            <h2 class="text-white">Total:</h2>
                                            <h1 id="total" class="text-white"></h1>
                                            </p>
                                            <div class="mt-3">
                                                <select name="customerId" class="form-control bg-success">
                                                    <option class="text-dark" disabled="" selected=""> Select a Customer</option>
                                                    @foreach ($customers as $customer )
                                                    <option value="{{ $customer->id }}">
                                                        {{ $customer->customer_name }}
                                                    </option>
                                                        
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-success">Create Order</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            {{-- ********* All Product Start --}}

                            <div class="col-6">

                                <div class="table-responsive">
                                    <table class="table text-white table-hover text-nowrap">
                                        <thead>

                                            <tr class="bg-info">
                                                <th>Product</th>
                                                <th>Category</th>
                                                <th>Images</th>
                                                <th>Brand</th>
                                                <th>Seling Price</th>
                                                <th>SKU</th>
                                                <th>Stock</th>
                                            </tr>


                                        </thead>
                                        <tbody class="bg-dark">

                                            @foreach ($products as $product)
                                                <tr>
                                                    <input class="productId" type="hidden" name="id" value="{{ $product->id }}">
                                                    <input type="hidden" name="name" value="name">
                                                    <input type="hidden" name="qty" value="1">

                                                    <input type="hidden" name="price" value="500">


                                                    <td class="productName">{{ $product->product_name }}</td>

                                                    <td>{{ $product->category->category_name }}</td>
                                                    <td>
                                                        <img src="{{ url('uploads/' . $product->product_image) }}"
                                                            style="height: 40px;width:50px;">
                                                    </td>
                                                    <td>{{ $product->brand->brand_name }}</td>
                                                    <td class="sellingPrice">{{ $product->selling_price }}</td>
                                                    <td>{{ $product->sku }}</td>
                                                    <td class="stock">{{ $product->stock }}</td>
                                                    <td>
                                                        <button type="submit" class="btn btn-info btn-sm addToCartButton">
                                                            <i class="fas fa-plus-square"></i>
                                                        </button>
                                                    </td>

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
                                        <h4 class="text-center modal-title bg-info" id="exampleModalLabel"> Add New
                                            Customer</h4>
                                    </div>


                                    <div class="modal-body bg-info">


                                        <div class="form-group">
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

@push('scripts')
<script >
    $(document).ready(function(){
        $('.addToCartButton').click(function (e){
            let productId = $(this).closest('tr').find('.productId').val();
            let productName = $(this).closest('tr').find('.productName').text();
            let sellingPrice = $(this).closest('tr').find('.sellingPrice').text();
            let stock = $(this).closest('tr').find('.stock').text();

            let productHtml = `
                <tr class="productRow">
                    <td>${productName}</td>
                    <td>${stock}</td>
                    <input type="hidden" value="${productId}" name="productId[]">
                    <td>
                        <input class="productQuantity" type="number" name="quantity[]" value="1" style="width:40px;">
                    </td>
                    <td class="sellingPrice">${sellingPrice}</td>
                    <td class="subTotal">${sellingPrice}</td>
                    <td class="deleteProduct"><a><i class="fas fa-trash-alt text-danegr"></i> </a>
                    </td>
                </tr>
            `
            $('#salesOrderForm').append(productHtml);
            calculateTotal();
            calculateTotalQuantity();
        })
        $(document).on('click', '.deleteProduct', function(e){
            $(this).closest('.productRow').remove();
            calculateTotal()
        })
        $(document).on('change', '.productQuantity', function(e){
            let quantity = $(this).val();
            let sellingPrice = $(this).parent().parent().find('.sellingPrice').text();
            let subtotal = sellingPrice * quantity;
            $(this).parent().parent().find('.subTotal').text(subtotal);
            calculateTotal()
            calculateTotalQuantity()
        })

        function calculateTotal(){
            let sum = 0
          $('.subTotal').each(function(){
            sum += parseInt($(this).text());
          })
          $('#total').text(sum);
        }

        function calculateTotalQuantity(){
            // Calculate total Quantity
            let totalQuantity = 0;
            $('.productQuantity').each(function(){
                let quantity = parseInt($(this).val());
                totalQuantity += quantity;
            })
            $('#totalQuantity').text(totalQuantity);
            console.log(totalQuantity);
        }


    });
    
</script>
@endpush
        


