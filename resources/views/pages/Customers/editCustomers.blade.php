@extends("master")
@section("content")

<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Edit Customers Name</h6>
        <form action="{{ route('customer_update', $user->customer_id) }}" method="POST">
         @csrf
         @method('put')
                <div class="mb-3">
                    <label for="exampleInputCustomers1" class="form-label">Customers Name :</label>
                    <input type="text" class="form-control" id="exampleInputCustomers1" placeholder="Enter Customers name" name="customer_name" value="{{ $user->customer_name}}"
                    aria-describedby="customerrsHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputCustomers2" class="form-label">Customers Address :</label>
                    <input type="text" class="form-control" id="exampleInputCustomers2" placeholder="Enter Customers address" name="customer_address" value="{{ $user->customer_address}}"
                    aria-describedby="customersHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputCustomers3" class="form-label">Customers Phone :</label>
                    <input type="text" class="form-control" id="exampleInputCustomers3" placeholder="Enter Customers Phone" name="customer_phone" value="{{ $user->customer_phone}}"
                    aria-describedby="customersHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputCustomers4" class="form-label">Customers Email :</label>
                    <input type="text" class="form-control" id="exampleInputCustomers4" placeholder="Enter Customers Email" name="customer_email" value="{{ $user->customer_email}}"
                    aria-describedby="customersHelp">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
         </form>
                
    </div>
</div>

@endsection