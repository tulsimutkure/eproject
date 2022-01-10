@extends('dashboard')
@section('content')
<div class="card-body">
    <h5 class="card-title">Product Edit Form</h5>
    <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{route('orders.update',$order->id)}}"
        novalidate="novalidate">
        @csrf
        @method('post')
        <div class="form-group">
            <label for="product_id">Product ID</label>
            <div>
                <input type="text" class="form-control" id="product_id" name="product_id" placeholder="Product ID here..."
                    value='{{$order->product_id}}'>
            </div>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <div>
                <input type="text" class="form-control" id="status" name="status"
                    placeholder="Status here..." value='{{$order->status}}'>
            </div>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <div>
                <input type="text" class="form-control" id="date" name="date" placeholder="Date here..."
                    value='{{$order->date}}'>
            </div>
        </div>

        <div class="form-group">
            <label for="quantity">Quantity</label>
            <div>
                <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity here..."
                    value='{{$order->quantity}}'>
            </div>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <div>
                <input type="text" class="form-control" id="price" name="price"
                    placeholder="Price here..." value='{{$order->price}}'>
            </div>
        </div>

        <div class="form-group">
            <label for="tax">Tax</label>
            <div>
                <input type="text" class="form-control" id="tax" name="tax" placeholder="Tax here..."
                    value='{{$order->tax}}'>
            </div>
        </div>

        <div class="form-group">
            <label for="discount">Discount</label>
            <div>
                <input type="text" class="form-control" id="discount" name="discount" placeholder="Discount here..."
                    value='{{$order->discount}}'>
            </div>
        </div>

        <div class="form-group">
            <label for="tracking_no">Tracking No</label>
            <div>
                <input type="text" class="form-control" id="tracking_no" name="tracking_no" placeholder="Tracking No here..."
                    value='{{$order->tracking_no}}'>
            </div>
        </div>

        <div class="form-group">
            <label for="total">Total</label>
            <div>
                <input type="text" class="form-control" id="total" name="total" placeholder="Total here..."
                    value='{{$order->total}}'>
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
            <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Edit</button>
        </div>
    </form>
</div>
@endsection
