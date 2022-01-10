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
                    <th>Name</th>
                    <th>Email Id</th>
                    {{-- <th>Password</th> --}}
                    <th>Mobile No.</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Pin Code</th>
                    <th>Role Id</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    {{-- <td>{{$user->password}}</td> --}}
                    <td>{{$user->mobile}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->country['name']}}</td>
                    <td>{{$user->state['name']}}</td>
                    <td>{{$user->city['name']}}</td>
                    <td>{{$user->pincode}}</td>
                    <td>{{$user->role_id}}</td>
                    <td><a href="{{ route('users.edit', $user->id) }}"><button type="button" class="btn btn-success">Edit</button></a>
                        <a href="{{ route('users.delete', $user->id) }}"><button type="button"class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
</div>
</div>
<script>
    $(document).ready( function () {
        $('#example').DataTable();
    } );
    </script>
@endsection


