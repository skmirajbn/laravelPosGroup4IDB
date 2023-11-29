@extends("master")
@section("content")

<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Edit Brand Name</h6>
        <form action="{{ route('brand_update', $user->brand_id) }}" method="POST">
         @csrf
         @method('put')
                <div class="mb-3">
                    <label for="exampleInputBrand" class="form-label">Brand Name :</label>
                    <input type="text" class="form-control" id="exampleInputBrand" placeholder="Enter brand name" name="brand_name" value="{{ $user->brand_name}}"
                    aria-describedby="brandHelp">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
         </form>
                
    </div>
</div>

@endsection