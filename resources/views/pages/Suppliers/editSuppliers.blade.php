@extends("master")
@section("content")

<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Edit Suppliers Name</h6>
        <form action="{{ route('supp_update', $user->supp_id) }}" method="POST">
         @csrf
         @method('put')
                <div class="mb-3">
                    <label for="exampleInputSupp1" class="form-label">Suppliers Name :</label>
                    <input type="text" class="form-control" id="exampleInputSupp1" placeholder="Enter Suppliers name" name="supp_name" value="{{ $user->supp_name}}"
                    aria-describedby="suppliersHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputSupp2" class="form-label">Suppliers Address :</label>
                    <input type="text" class="form-control" id="exampleInputSupp2" placeholder="Enter Suppliers address" name="supp_address" value="{{ $user->supp_address}}"
                    aria-describedby="suppliersHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputSupp3" class="form-label">Suppliers Phone :</label>
                    <input type="text" class="form-control" id="exampleInputSupp3" placeholder="Enter Suppliers Phone" name="supp_phone" value="{{ $user->supp_phone}}"
                    aria-describedby="suppliersHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputSupp4" class="form-label">Suppliers Email :</label>
                    <input type="text" class="form-control" id="exampleInputSupp4" placeholder="Enter Suppliers Email" name="supp_email" value="{{ $user->supp_email}}"
                    aria-describedby="suppliersHelp">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
         </form>
                
    </div>
</div>

@endsection