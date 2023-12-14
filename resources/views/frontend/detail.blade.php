@extends('layouts.frontend')

@section('content')
    
    {{-- Page content  --}}
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                {{-- Post Content  --}}
                <article>
                    {{-- Post Header  --}}
                    <header class="mb-4">
                        {{-- Post Title  --}}
                        <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
                        {{-- Post meta content  --}}
                        <div class="text-muted fst-italic mb-2">Post on {{ $post->created_at->diffForHumans() }}</div>
                        {{-- Post Categories  --}}
                        <a href="" class="badge text-decoration-none link-light">{{ $post->Category->name }}</a>
                    </header>
                    {{-- Preview image figure  --}}
                    <figure class="mb-4">
                        @if ( Str::contains($post->cover, '.mp4') )
                        <video src="{{ asset('storage/'.$post->cover) }}" class="" width="100%" height="350px" controls></video>
                        @else
                        <img src="{{ asset('storage/'.$post->cover) }}" alt="" width="100%" height="350px" class="card-img-top">
                        @endif
                    </figure>
                    {{-- Post Content  --}}
                    <section class="mb-5">
                        <p class="fs-5 mb-4">
                            <?= $post->description ?>
                        </p>
                    </section>
                </article>
                {{-- Comments section  --}}
                <section class="mb-5">
                    <div class="card bg-light">
                        <div class="card-body">
                            {{-- Comment form  --}}
                            <form action="" class="mb-4">
                                <textarea class="form-control" name="" id="" cols="30" rows="3" placeholder="Join the discussion and leave a comment"></textarea>
                            </form>
                            {{-- Comment with nested comments  --}}
                            <div class="d-flex mb-4">
                                {{-- Parent comment  --}}
                                <div class="flex-shrink-0">
                                    <img src="https://dummyimage.com/50x50/dee2e6/6c757d.jpg" alt="" class="rounded-circle" >
                                </div>
                                <div class="ms-3">
                                    <div class="fw-bold">Comment Name</div>
                                    If you're going to lead a space frontier, it has to be government, it'll
                                    never be private enterprise. Because the space frontier is dangerous, and it's
                                    expensive, and it has unquantified risks.
                                    {{-- Child comment 1  --}}
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0">
                                            <img src="https://dummyimage.com/50x50/dee2e6/6c757d.jpg" alt="" class="rounded-circle">
                                        </div>
                                        <div class="ms-3">
                                            <div class="fw-bold">Comment Name</div>
                                            And under those conditions, you cannot establish a capital market evaluation of that
                                            enteripse. You can't get investors.
                                        </div>
                                    </div>
                                    {{-- Child comment 2  --}}
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0">
                                            <img src="https://dummyimage.com/50x50/dee2e6/6c757d.jpg" alt="" class="rounded-circle">
                                        </div>
                                        <div class="ms-3">
                                            <div class="fw-bold">Comment Name</div>
                                            And under those conditions, you cannot establish a capital market evaluation of that
                                            enteripse. You can't get investors.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Single Comments  --}}
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <img src="https://dummyimage.com/50x50/dee2e6/6c757d.jpg" alt="" class="rounded-circle">
                                </div>
                                <div class="ms-3">
                                    <div class="fw-bold">Commenter Name</div>
                                    WHen I look at the universe and all the ways the universe wants to kill us, I find it hard to
                                    reconcile that with statements of beneficence.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            {{-- Side Widgets  --}}
            <div class="col-lg-4">
                {{-- Search widget  --}}
                <div class="card mb-4">
                    <div class="card-header">Latest Post</div>
                    <div class="card-body">
                        @foreach ($latest_posts as $latest_post)
                            <a href="" class="text-primary text-bold text-decoration-none">
                                {{ $latest_post->title }}
                            </a>
                            <p><?= Str::words($latest_post->description, 20, '...') ?></p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection