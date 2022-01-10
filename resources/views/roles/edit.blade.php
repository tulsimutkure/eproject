@extends('dashboard')
@section('content')
<div class="card-body">
    <h5 class="card-title">Roles Form</h5>
    <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{route('roles.update',$role->id)}}" novalidate="novalidate">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <div>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name here..." value='{{$role->name}}'>
            </div>
        </div>

        <div class="form-group">
            <label for="slug">Slug</label>
            <div>
                <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug here..." value='{{$role->slug}}'>
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
