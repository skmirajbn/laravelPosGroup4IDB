
@extends("master")
@section("content")


<div class="col-sm-12 col-xl-12">
    <div class="p-4 rounded bg-secondary h-100">
        <h6 class="mb-4">Add Category</h6>
        
          <form form action="{{ route('pro_add') }}" method="POST" enctype='multipart/form-data'>
               @csrf

              <div class="mb-3">
                    <label for="exampleInputProduct1" class="form-label">Product Name :</label>
                    <input type="text" class="form-control" id="exampleInputProduct1" placeholder="Enter product name" name="product_name"
                    aria-describedby="ProductHelp">
              </div>

              <div class="mb-3">
                    <label for="exampleInputProduct2" class="form-label">Description :</label>
                    <input type="text" class="form-control" id="exampleInputProduct2" placeholder="Enter description name" name="description"
                    aria-describedby="ProductHelp">
              </div>

              <div class="mb-3">
                    <label for="exampleInputProduct3" class="form-label">Product Image:</label>
                    <input type="file" class="form-control" id="exampleInputProduct3" placeholder="choosse your file" name="product_image"
                    aria-describedby="ProductHelp">
              </div>

              <div class="mb-3">
                    <label for="exampleInputProduct4" class="form-label">Catagories Name:</label>
                    <select class="form-control" aria-label="Default select example" name="category_id">
                  <option value="">please Select Categorie</option>
                @foreach ($category as $row)
                <option value="{{$row->id}}" {{old('') == $row->id ? 'selected' : '' }}>{{$row->category_name}}</option>
                @endforeach
                </select>
              </div>

              <div class="mb-3">
                    <label for="exampleInputProduct5" class="form-label">Brand Name:</label>
                    <select class="form-control" aria-label="Default select example" name="brand_id">
                  <option value="">please Select Brand</option>
                  @foreach ($brand as $row)
                  <option value="{{$row->id}}" {{old('') == $row->id ? 'selected' : '' }}>{{$row->brand_name}}</option>
                  @endforeach
                  </select>
              </div>

              <div class="mb-3">
                    <label for="exampleInputProduct6" class="form-label">Unit Name :</label>
                    <select class="form-control" aria-label="Default select example" name="unit_id">
                  <option value="">please Select Unit</option>
                   @foreach ($unit as $row)
                  <option value="{{$row->id}}" {{old('') == $row->id ? 'selected' : '' }}>{{$row->unit_name}}</option>
                  @endforeach
                </select>
              </div>
    
              <div class="mb-3">
                    <label for="exampleInputProduct7" class="form-label">Selling Price:</label>
                    <input type="text" class="form-control" id="exampleInputCategory" placeholder="Enter selling price" name="selling_price"
                    aria-describedby="ProductHelp">
              </div>

              <div class="mb-3">
                    <label for="exampleInputProduct8" class="form-label">Buying Price:</label>
                    <input type="text" class="form-control" id="exampleInputProduct8" placeholder="Enter buying price" name="buying_price"
                    aria-describedby="ProductHelp">
              </div>

              <div class="mb-3">
                    <label for="exampleInputProduct9" class="form-label">SKU:</label>
                    <input type="text" class="form-control" id="exampleInputProduct9" placeholder="Enter SKU " name="sku"
                    aria-describedby="ProductHelp">
              </div>

              <div class="mb-3">
                    <label for="exampleInputProduct10" class="form-label">Product Status:</label>
                    <input type="text" class="form-control" id="exampleInputProduct10" placeholder="Enter Product Status " name="product_status"
                    aria-describedby="ProductHelp">
              </div>
       
               <button type="submit" class="btn btn-dark">Submit</button>
           </form>
      </div>
</div>




@endsection