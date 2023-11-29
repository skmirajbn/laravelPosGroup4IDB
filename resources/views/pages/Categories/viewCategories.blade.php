@extends("master")
@section("content")

<div class="col-sm-12 col-xl-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">All Categories</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Categories Id</th>
                        <th scope="col">Categories Name</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                    <tbody>
                       @foreach ($user as $row)
                         <tr>
                            <td>{{$row->category_id}}</td>
                            <td>{{$row->category_name}}</td>
                            <td><a href="category_edit/{{ $row->category_id}}/user" class="btn btn-success">Edit</a> 
                            <a href="category_delete/{{ $row->category_id}}" class="btn btn-danger">Delete</a></td> 
                            </tr> 
                         @endforeach
                       
                    </tbody>
            </table>
    </div>
</div>

@endsection