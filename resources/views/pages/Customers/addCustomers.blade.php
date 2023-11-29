@extends("master")
@section("content")

<div class="col-sm-12 col-xl-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Add Customers</h6>
        <form form action="{{ route('customer_add') }}" method="POST">
               @csrf
                <div class="mb-3">
                    <label for="exampleInputCustomers1" class="form-label">Customers Name :</label>
                    <input type="text" class="form-control" id="exampleInputCustomers1" placeholder="Enter Customers name" name="customer_name"
                    aria-describedby="CustomersHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputCustomers2" class="form-label">Customers Address :</label>
                    <input type="text" class="form-control" id="exampleInputCustomers2" placeholder="Enter Customers address" name="customer_address"
                    aria-describedby="CustomersHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputCustomers3" class="form-label">Customers Phone :</label>
                    <input type="text" class="form-control" id="exampleInputCustomers3" placeholder="Enter Customers Phone" name="customer_phone"
                    aria-describedby="CustomersHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputCustomers4" class="form-label">Customers Email :</label>
                    <input type="text" class="form-control" id="exampleInputCustomers4" placeholder="Enter Customers Email" name="customer_email"
                    aria-describedby="CustomersHelp">
                </div>
                <button type="submit" class="btn btn-info">Submit</button>
         </form>
                
    </div>
</div>

@endsection