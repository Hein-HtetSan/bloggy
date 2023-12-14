@extends('layouts.backend')
@section('title', 'Edit Post')
@section('content')
    <div class="container-fluid">
        {{-- Page Heading  --}}
        <h1 class="h3 mb-2 text-gray-800">Post</h1>

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
                <h6 class="m-0 font-weight-bold text-primary">Edit Post</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('PostUpdate') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="title form-label">Title</label>
                        <input type="text" name="title" id="title" value="{{ $post->title }}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select name="category" id="category" class="form-control">
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}" <?php $item->id == $post->category_id ? 'selected' : ''  ?>>{{  $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="summernote">
                            {{ $post->description }}
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="cover" class="form-label">Cover</label>
                        <img src="{{ asset($post->cover) }}" alt="your image" id="preview" style="display: none;" class="mt-3 w-25">
                        <input type="file" name="cover" id="cover" class="form-control">
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