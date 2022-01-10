@extends('dashboard')
@section('content')
<div class="card-body">
    <h5 class="card-title">Product Form</h5>
    <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{route('products.store')}}" novalidate="novalidate">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <div>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name here...">
            </div>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <div>
                <input type="text" class="form-control" id="description" name="description" placeholder="Description here...">
            </div>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <div>
                <input type="text" class="form-control" id="price" name="price" placeholder="Price here...">
            </div>
        </div>

        <div class="form-group">
            <label for="discount">Discount</label>
            <div>
                <input type="text" class="form-control" id="discount" name="discount" placeholder="Discount here...">
            </div>
        </div>

        <div class="form-group">
            <label for="secret_code">Secret Code</label>
            <div>
                <input type="text" class="form-control" id="secret_code" name="secret_code" placeholder="Secret Code here...">
            </div>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <div>
                <input type="text" class="form-control" id="status" name="status" placeholder="Status here...">
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
            <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
        </div>
    </form>
</div>
@endsection
