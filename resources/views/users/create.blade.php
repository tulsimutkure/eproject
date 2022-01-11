@extends('dashboard')
@section('content')
<div class="card-body">
    <h5 class="card-title">User Form</h5>
    <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{route('users.store')}}"
        novalidate="novalidate">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <div>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name here...">
            </div>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <div>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email here...">
            </div>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password here...">
        </div>

        <div class="form-group">
            <label for="mobile">Mobile No.</label>
            <div>
                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="mobile here...">
            </div>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <div>
                <input type="text" class="form-control" id="address" name="address" placeholder="Address here...">
            </div>
        </div>

        {{-- <div class="form-group">
            <label for="country_id">Country</label>
            <div>
                <input type="text" class="form-control" id="country_id" name="country_id" placeholder="Country here...">
            </div>
        </div> --}}

        {{-- <div class="form-group">
            <label for="state_id">State</label>
            <div>
                <input type="text" class="form-control" id="state_id" name="state_id" placeholder="State here...">
            </div>
        </div> --}}

        {{-- <div class="form-group">
            <label for="city_id">City</label>
            <div>
                <input type="text" class="form-control" id="city_id" name="city_id" placeholder="City here...">
            </div>
        </div> --}}


        <div class="form-group mb-3">
           {{-- <h5 class="card-title">Country</h5> --}}
           <label>Country</label>
           <div>
                    <select id="country-dd" name="country_id" class="form-control">
                        <option value="">Select Country</option>
                        @foreach ($countries as $data)
                        <option value="{{$data->id}}">
                            {{$data->name}}
                        </option>
                        @endforeach
                    </select>
                </div>
        </div>
        <div class="form-group mb-3">
            <label> State</label>
            <div>
            <select id="state-dd" name="state_id" class="form-control">
                <option value="">Select State</option>
            </select>
        </div>
        <div class="form-group">
            <label>Select City<label>
                <select id="city-dd" name="city_id" class="form-control">
                    <option value="">Select City</option>
            </select>
        </div>

        <div class="form-group">
            <label for="pincode">Pin Code</label>
            <div>
                <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Pin Code here...">
            </div>
        </div>

        {{-- <div class="form-group">
            <label for="role_id">Role ID</label>
            <div>
                <input type="text" class="form-control" id="role_id" name="role_id" placeholder="Role ID here...">
            </div>
        </div> --}}
        <div class="form-group mb-3">
            {{-- <label>Role ID</label> --}}
            <select id="role_id-dd" name="role_id" class="form-control">
                <option value="">Select Role </option>
                @foreach ($roles as $data)
                <option value="{{$data->id}}">
                    {{$data->name}}
                </option>
                @endforeach
            </select>
        </div>

        {{-- <div class="form-group">
            <label for="confirm_password">Confirm password</label>
            <div>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password"
                    placeholder="Confirm password here...">
            </div>
        </div> --}}
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
