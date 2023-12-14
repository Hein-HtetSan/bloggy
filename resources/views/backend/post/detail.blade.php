@extends('layouts.backend')
@section('title', 'Post Detail')
@section('content')
    
    <div class="container-fluid">
        {{-- Page Heading  --}}
        <h1 class="h3 mb-2 text-gray-800">Post</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Post Detail</h6>
            </div>
            <div class="card-body">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->description }}</p>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Created User: <b>Zed</b></li>
                            <li class="list-group-item">Category: <b>{{ $post->Category->name}}</b></li>
                            <li class="list-group-item">Created Date: <b>{{ date('d/m/Y', strtotime($post->created_at)) }}</b></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection