@extends("master")
@section("content")

<div class="col-sm-12 col-xl-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">All Brands</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Brand Id</th>
                        <th scope="col">Brand Name</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                    <tbody>
                       @foreach ($user as $row)
                         <tr>
                            <td>{{$row->brand_id}}</td>
                            <td>{{$row->brand_name}}</td>
                            <td><a href="brand_edit/{{ $row->brand_id}}/user" class="btn btn-success">Edit</a> 
                            <a href="brand_delete/{{ $row->brand_id}}" class="btn btn-danger">Delete</a></td> 
                            </tr> 
                         @endforeach
                       
                    </tbody>
            </table>
    </div>
</div>


@endsection