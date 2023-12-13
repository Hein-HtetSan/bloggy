@extends('layouts.backend')

@section('title', 'Create Category')

@section('content')
    
    <div class="container-fluid">

        {{-- Page Handling  --}}
        <h1 class="h3 mb-2 text-gray-800">Category</h1>
        @if($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ $error }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endforeach
        @endif

        {{-- DataTals Example --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 front-weight-bold text-primary">Create Category</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="category_name" class="form-label">Name</label>
                        <input type="text" name="category_name" id="category_name" placeholder="Movie" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary btn-sm btn-icon-split mb-3">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                            </span>
                            <span class="text">Create</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection