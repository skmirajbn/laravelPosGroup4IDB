@extends("master")
@section("content")
 
<div class="col-sm-12 col-xl-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Add Category</h6>
        <form form action="{{ route('category_add') }}" method="POST">
               @csrf
                <div class="mb-3">
                    <label for="exampleInputCategory" class="form-label">Category Name :</label>
                    <input type="text" class="form-control" id="exampleInputCategory" placeholder="Enter category name" name="category_name"
                    aria-describedby="categoryHelp">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
         </form>
                
    </div>
</div>

@endsection