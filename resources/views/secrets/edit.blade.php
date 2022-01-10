@extends('dashboard')
@section('content')
<div class="card-body">
    <h5 class="card-title"> Edit Form</h5>
    <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{route('secrets.update',$secret->id)}}"
        novalidate="novalidate">
        @csrf
        @method('post')
        <div class="form-group">
            <label for="id">ID</label>
            <div>
                <input type="text" class="form-control" id="id" name="id" placeholder= "ID here..."
                    value='{{$secret->id}}'>
            </div>
        </div>

        <div class="form-group">
            <label for="name">Name</label>
            <div>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name here..."
                    value='{{$secret->name}}'>
            </div>
        </div>

        <div class="form-group">
            <label for="slug">Slug</label>
            <div>
                <input type="text" class="form-control" id="slug" name="slug"
                    placeholder="Slug here..." value='{{$secret->slug}}'>
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
