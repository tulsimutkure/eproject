@extends('dashboard')
@section('content')
<div class="main-card mb-3 card">
    <div class="card-body">
        <head>
        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            <link href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
            <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
        </head>
        <thead>
                <tr>
                    <th>ID</th>
                    <th>Product ID</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Tax</th>
                    <th>Discount</th>
                    <th>Tracking No</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->product_id}}</td>
                    <td>{{$order->status}}</td>
                    <td>{{$order->date}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->tax}}</td>
                    <td>{{$order->discount}}</td>
                    <td>{{$order->tracking_no}}</td>
                    <td>{{$order->total}}</td>
                    <td><a href="{{ route('orders.edit', $order->id) }}"><button type="button" class="btn btn-success">Edit</button></a>
                        <a href="{{ route('orders.delete', $order->id) }}"><button type="button"class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    {{-- <th>ID</th>
                    <th>Name</th>
                    <th>Slug</th> --}}
                </tr>
            </tfoot>
        </table>
    </div>
</div>
</div>
<script>
    $(document).ready( function () {
        $('#example').DataTable();
    } );
    </script>
@endsection
