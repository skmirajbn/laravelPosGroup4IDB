@extends("master")
@section("content")


<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Edit Unit Name</h6>
        <form action="{{ route('unit_update', $user->unit_id) }}" method="POST">
         @csrf
         @method('put')
                <div class="mb-3">
                    <label for="exampleInputunit" class="form-label">Unit Name :</label>
                    <input type="text" class="form-control" id="exampleInputunit" placeholder="Enter unit name" name="unit_name" value="{{ $user->unit_name}}"
                    aria-describedby="unitdHelp">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
         </form>
                
    </div>
</div>

@endsection