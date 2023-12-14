@extends('layouts.backend')
@section('title', 'Edit Post')
@section('content')
    <div class="container-fluid">
        {{-- Page Heading  --}}
        <h1 class="h3 mb-2 text-gray-800">Profile</h1>

        @if($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ $error }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endforeach
        @endif

        {{-- DataTable Example  --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                {{-- <h6 class="m-0 font-weight-bold text-primary">Edit Post</h6> --}}
            </div>
            <div class="card-body">
                <form action="{{ route('updateAdminProfile') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class=" form-label">Name</label>
                        <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" class="form-control w-50" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="email" class=" form-label">Email</label>
                        <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" class="form-control w-50" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="password" class=" form-label">Current Password</label>
                        <input type="password" name="password" id="password" value="" class="form-control w-50" placeholder="Enter Current Password">
                        <div class="d-flex align-items-start">
                            <div class="">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>       
                    </div>

                    <div class="mb-3">
                        <label for="npassword" class=" form-label">New Password</label>
                        <input type="password" name="npassword" id="npassword" value="" class="form-control w-50" placeholder="Enter New Password">     
                    </div>
                    
                    <div class="mb-3">
                        <a href="{{ route('PostList') }}" class="btn btn-primary btn-sm btn-icon-split mb-3">
                            <span class="icon text-white-50">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text d-none d-md-inline">Cancel</span>
                        </a>
                        <button class="btn btn-primary btn-sm btn-icon-split mb-3" type="submit">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text d-none d-md-inline">Update</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
@endsection