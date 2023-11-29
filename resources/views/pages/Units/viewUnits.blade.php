@extends("master")
@section("content")

<div class="col-sm-12 col-xl-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">All Units</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Unit Id</th>
                        <th scope="col">Unit Name</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                    <tbody>
                       @foreach ($user as $row)
                         <tr>
                            <td>{{$row->unit_id}}</td>
                            <td>{{$row->unit_name}}</td>
                            <td><a href="unit_edit/{{ $row->unit_id}}/user" class="btn btn-success">Edit</a> 
                            <a href="unit_delete/{{ $row->unit_id}}" class="btn btn-danger">Delete</a></td> 
                            </tr> 
                         @endforeach
                       
                    </tbody>
            </table>
    </div>
</div>






@endsection