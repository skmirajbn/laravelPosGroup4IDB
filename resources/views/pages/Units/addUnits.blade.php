@extends("master")
@section("content")
 
 <div class="col-sm-12 col-xl-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Add Unit</h6>
        <form form action="{{ route('unit_add') }}" method="POST">
               @csrf
                <div class="mb-3">
                    <label for="exampleInputUnit" class="form-label">Unit Name :</label>
                    <input type="text" class="form-control" id="exampleInputUnit" placeholder="Enter Unit Name" name="unit_name"
                    aria-describedby="unitHelp">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
        </form>
                
    </div>
</div>

@endsection