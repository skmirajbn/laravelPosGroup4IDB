@extends("master")
@section("content")

<div class="col-sm-12 col-xl-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">All Products</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Unit</th>
                        <th scope="col">Selling Price</th>
                        <th scope="col">Buying Price</th>
                        <th scope="col">SKU</th>
                        <th scope="col">Product Status</th>
                        <th scope="col">Action</th>                       
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $row)
                <tr>
                    <td>{{$row->product_name}}</td>
                    <td>{{$row->category_name}}</td>
                    <td>{{$row->brand_name}}</td>
                    <td>{{$row->description}}</td>
                    <td><img src="{{ "/uploads/".$row->product_image}}" style="width:60px; height:60px;"></td>
                    <td>{{$row->unit_name}}</td>
                    <td>{{$row->selling_price}}</td>
                    <td>{{$row->buying_price}}</td>
                    <td>{{$row->sku}}</td>
                    <td>{{$row->product_status}}</td>
                    <td>
                        <a href="pro_edit/{{ $row->product_id }}/user" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                        </svg></a>
                    </td>
                    <td>    
                         <a href="pro_delete/{{ $row->product_id}}" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
                        <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
                        </svg></a>
                    </td>
                    
                </tr>


                @endforeach
                </tbody>
            </table>
    </div>
</div>



@endsection