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
                    {{-- <th>User ID</th> --}}
                    <th>Order ID</th>
                    <th>type</th>
                    <th>Mode</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transcation as $transcation)
                <tr>
                    <td>{{$transcation->id}}</td>
                    {{-- <td>{{$transcation->user_id}}</td> --}}
                    <td>{{$transcation->order_id}}</td>
                    <td>{{$transcation->type}}</td>
                    <td>{{$transcation->mode}}</td>
                    <td>{{$transcation->status}}</td>
                    <td><a href="{{ route('transcations.edit', $transcation->id) }}"><button type="button" class="btn btn-success">Edit</button></a>
                        <a href="{{ route('transcations.delete', $transcation->id) }}"><button type="button"class="btn btn-danger">Delete</button></a>
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
