@extends("master")
@section("content")

<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Edit Categoty Name</h6>
        <form action="{{ route('category_update', $user->category_id) }}" method="POST">
         @csrf
         @method('put')
                <div class="mb-3">
                    <label for="exampleInputCategory" class="form-label">Category Name :</label>
                    <input type="text" class="form-control" id="exampleInputCategory" placeholder="Enter category name" name="category_name" value="{{ $user->category_name}}"
                    aria-describedby="categorydHelp">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
         </form>
                
    </div>
</div>

@endsection