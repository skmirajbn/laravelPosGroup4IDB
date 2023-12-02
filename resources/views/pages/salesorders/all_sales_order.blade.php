@extends("master")
@section("content")

<div class="col-sm-12 col-xl-12">
    <div class="p-4 rounded bg-secondary h-100">
        <h6 class="mb-4">All Sales Order</h6>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Sales Man</th>
                        <th scope="col">Customer Name</th>
                        <th>Time</th>                       
                        <th>Date</th>                       
                        <th>View</th>                       
                    </tr>
                </thead>
                <tbody>
                   @foreach ($salesOrders as $salesOrder )
                       
                   
                <tr>
                    <td>{{ $salesOrder->id }}</td>
                    <td>{{ $salesOrder->user->name }}</td>
                    <td>{{ $salesOrder->customer->customer_name }}</td>
                    <td>{{ $salesOrder->created_at->format('h:i a') }}</td>
                    <td>{{ $salesOrder->created_at->format('d-M-Y') }}</td>
                    <td>
                        <a href="{{ route('order.sales-order.show', $salesOrder->id) }}">
                            <button class="btn btn-success">View Order</button>
                        </a>
                    </td>
                </tr>
                @endforeach 

              
                </tbody>
            </table>
    </div>
</div>



@endsection