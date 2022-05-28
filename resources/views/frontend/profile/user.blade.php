@extends('frontend.main_master')
@section('content')

<div class="body-content">
    <div class="container">
        <br>
        <br>
        <div class="row">
            <div class="col-md-2">
                <br>
                <img
                src="{{!empty($user->profile_photo_path)?url('upload/user_images/'.$user->profile_photo_path):asset('upload/user_images/no_image.jpg')}}"
                alt=""
                class="card-img-top"
                style=""
                height="150px"
                width="150px"
                >
                <br>
                <br>
                <br>
                <ul class="list-group list-group-flush">
                    <a href="{{route('dashboard')}}" class="btn btn-primary btn-sm btn-block">Return</a>
                </ul>
            </div>
            <div class="col-md-2">

            </div>
            <div class="col-md-6">
                <div class="card">
                    <h3 class="text-center">
                        <span class="text-danger">Hi....</span>
                        <strong>{{Auth::user()->name}} Update Your Profile</strong>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{route('user.profile.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="info-title" for="exampleInputEmail1">Name<span></span></label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label class="info-title">Email<span></span></label>
                        <input type="email" name="email" class="form-control" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <label class="info-title">Phone<span></span></label>
                        <input type="text" name="phone" class="form-control" value="{{$user->phone}}">
                    </div>
                    <div class="form-group">
                        <label class="info-title">User Image<span></span></label>
                        <input type="file" name="profile_photo_path" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                    </form>
                </div>
            </div>

        </div>
        <br>
        <br>
        <br>
    </div>
</div>
@endsection
