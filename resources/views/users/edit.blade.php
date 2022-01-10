@extends('dashboard')
@section('content')
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Product Edit Form</h5>
        <form id="signupForm" class="col-md-10 mx-auto"  novalidate="novalidate"
            action="{{route('users.update',$user->id)}}" method="POST">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <div>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name" value='{{$user->name}}'>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <div>
                    <input type="text" class="form-control" id="email" name="email" placeholder="email" value='{{$user->email}}'>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" value='{{$user->password}}'>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile No.</label>
                <div>
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="mobile" value='{{$user->mobile}}'>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <div>
                    <input type="text" class="form-control" id="address" name="address" placeholder="address" value='{{$user->address}}'>
                </div>
            </div>

            {{-- <div class="form-group">
                <label for="country">Country</label>
                <div>
                    <input type="text" class="form-control" id="country" name="country" placeholder="country" value='{{$user->country}}'>
                </div>
            </div> --}}

            {{-- <div class="form-group">
                <label for="state">State</label>
                <div>
                    <input type="text" class="form-control" id="state" name="state" placeholder="state" value='{{$user->state}}'>
                </div>
            </div> --}}

            {{-- <div class="form-group">
                <label for="city">City</label>
                <div>
                    <input type="text" class="form-control" id="city" name="city" placeholder="city" value='{{$user->city}}'>
                </div>
            </div> --}}

            <div class="form-group mb-3">
                <select  id="country-dd" name="country_id" class="form-control">
                    <option value="">Select Country</option>
                    @foreach ($countries as $data)
                    <option value="{{$data->id}}">
                        {{$data->name}}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                {{-- <label>Select State</label> --}}
                <select id="state-dd" name="state_id" class="form-control">
                    <option value="">Select State</option>

                </select>
            </div>

            <div class="form-group">
                <select id="city-dd" name="city_id" class="form-control">
                    <option value="">Select City</option>
                </select>
            </div>


            <div class="form-group">
                <label for="pincode">Pin Code</label>
                <div>
                    <input type="text" class="form-control" id="pincode" name="pincode" placeholder="pincode" value='{{$user->pincode}}'>
                </div>
            </div>

            <div class="form-group">
                <label for="role_id">Role</label>
                <div>
                    <input type="text" class="form-control" id="role_id" name="role_id" placeholder="role_id" value='{{$user->role_id}}'>
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
</div>
@endsection
