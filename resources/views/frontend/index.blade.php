@extends('layouts.frontend')

@section('content')

{{-- Page header with logo and tagline  --}}
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Welcome to Blog Home!</h1>
        </div>
    </div>
</header>

{{-- Page Content  --}}
<div class="container">
    <div class="row">

        {{-- blog entries --}}
        <div class="col-lg-8">
            {{-- Featured blog post  --}}
            <div class="card mb-4">
                
                <a href="">
                    @if ( Str::contains($feature_post->cover, '.mp4') )
                    <video src="{{ 'storage/'.$feature_post->cover }}" class="" width="100%" height="350px" controls></video>
                    @else
                    <img src="{{ 'storage/'.$feature_post->cover }}" alt="" class="card-img-top">
                    @endif
                </a>
                <div class="card-body">
                    <div class="small text-muted">{{ $feature_post->created_at->diffForHumans() }}</div>
                    <h2 class="card-title">{{ $feature_post->title }}</h2>
                    <p class="card-text">
                        <?= Str::words($feature_post->description, 20, '...') ?>
                    </p>
                    <a href="" class="btn btn-primary">Read more</a>
                </div>
            </div>
            {{-- Nested row for non-featured blog posts --}}
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-lg-6">
                    {{-- Blog post  --}}
                    <div class="card mb-4">
                        <a href="">
                            @if ( Str::contains($post->cover, '.mp4') )
                            <video src="{{ 'storage/'.$post->cover }}" class="" width="100%" height="200px" controls></video>
                            @else
                            <img src="{{ 'storage/'.$post->cover }}" alt="" class="card-img-top">
                            @endif
                        </a>
                        <div class="card-body">
                            <div class="small text-muted">{{ $post->created_at->diffForHumans() }}</div>
                            <h2 class="card-title h4">{{ $post->title }}</h2>
                            <p class="card-text"><?= Str::words($post->description, 20, '....') ?></p>
                            <a href="" class="btn btn-primary">Read more ></a>
                        </div>
                    </div>
                    {{-- End of Blog  --}}
                </div>
                @endforeach
                
                <div class="col-lg-6">
                    {{-- Blog post  --}}
                    <div class="card mb-4">
                        <a href="">
                            <img src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="" class="card-img-top">
                        </a>
                        <div class="card-body">
                            <div class="small text-muted">January 1, 2023</div>
                            <h2 class="card-title h4">Post Title</h2>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus, quibusdam.</p>
                            <a href="" class="btn btn-primary">Read more ></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Pagination  --}}
            <nav aria-label="Pagination">
                <hr class="my-0" />
                <ul class="pagination justify-content-center my-4">
                    <li class="page-item disabled">
                        <a href="" class="page-link" tabindex="-1" aria-disabled="true">Newer</a>
                    </li>
                    <li class="page-item active" aria-current="page">
                        <a href="" class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a href="" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="" class="page-link">3</a>
                    </li>
                    <li class="page-item disabled">
                        <a href="" class="page-link">...</a>
                    </li>
                    <li class="page-item">
                        <a href="" class="page-link">15</a>
                    </li>
                    <li class="page-item">
                        <a href="" class="page-link">Older</a>
                    </li>
                </ul>
            </nav>
        </div>

        {{-- Side Widgets  --}}
        <div class="col-lg-4">
            {{-- Search widget  --}}
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" placeholder="Enter Search Term..." aria-label="Enter Search Term..." aria-describedby="button-search" class="form-control">
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>
            {{-- Category widget  --}}
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                @foreach ($categories as $item)
                                    <li><a href="">{{ $item->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Side Widget  --}}
            <div class="card mb-4">
                <div class="card-header">Latest Post</div>
                @foreach ($latest_posts as $latest_post)
                <div class="card-body">
                    <a href="" class="text-primary text-bold text-decoration-none">{{ $latest_post->title }}</a>
                    <p><?= Str::words($latest_post->description, 20, '...') ?></p>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>

@endsection