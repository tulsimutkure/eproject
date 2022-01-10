@extends('dashboard')
@section('content')
<div class="card-body">
    <h5 class="card-title">Product Edit Form</h5>
    <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{route('transcations.update',$transcation->id)}}"
        novalidate="novalidate">
        @csrf
        @method('post')
        <div class="form-group">
            <label for="id">ID</label>
            <div>
                <input type="text" class="form-control" id="id" name="id" placeholder="ID here..."
                    value='{{$transcation->id}}'>
            </div>
        </div>

        {{-- <div class="form-group">
            <label for="user_id">User ID</label>
            <div>
                <input type="text" class="form-control" id="user_id" name="user_id"
                    placeholder="User ID here..." value='{{$transcation->user_id}}'>
            </div>
        </div> --}}

        <div class="form-group">
            <label for="order_id">Order ID</label>
            <div>
                <input type="text" class="form-control" id="order_id" name="order_id" placeholder="Order ID here..."
                    value='{{$transcation->order_id}}'>
            </div>
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <div>
                <input type="text" class="form-control" id="type" name="type" placeholder="Type here..."
                    value='{{$transcation->type}}'>
            </div>
        </div>

        <div class="form-group">
            <label for="mode">Mode</label>
            <div>
                <input type="text" class="form-control" id="mode" name="mode"
                    placeholder="Mode here..." value='{{$transcation->mode}}'>
            </div>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <div>
                <input type="text" class="form-control" id="status" name="status" placeholder="Status here..."
                    value='{{$transcation->status}}'>
            </div>
        </div>


        <div class="form-group">
            <div>
                <div class="form-check">
                    <input type="checkbox" id="agree" name="agree" value="agree" class="form-check-input">
                    <label class="form-check-label">Please agree to our policy</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Sign up</button>
        </div>
    </form>
</div>
@endsection
