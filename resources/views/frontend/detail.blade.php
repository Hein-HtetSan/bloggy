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
                        <h1 class="fw-bolder mb-1">Welcome to Blog Post</h1>
                        {{-- Post meta content  --}}
                        <div class="text-muted fst-italic mb-2">Post on January 1, 2023 by StartBootstrap</div>
                        {{-- Post Categories  --}}
                        <a href="" class="badge text-decoration-none link light">Web Design</a>
                        <a href="" class="badge text-decoration-none link light">Freebies</a>
                    </header>
                    {{-- Preview image figure  --}}
                    <figure class="mb-4">
                        <img src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="" class="img-fluid rounded">
                    </figure>
                    {{-- Post Content  --}}
                    <section class="mb-5">
                        <p class="fs-5 mb-4">
                            Science is an enterprise that should be cherished as a activity of the free
                            human mind. Because it transforms who we are, how we live, and it gives us an
                            understanding of our place in the universe.
                        </p>
                        <div class="fs-5 mb-4">
                            The universe is large and old, and the ingredients for life as we know it are 
                            everywhere, so there's no reason to think that Earth would be unique in that 
                            regard. Whether of not the life became intelligent is a different question, and
                            we'll see if we find that.
                        </div>
                        <div class="fs-5 mb-4">
                            The universe is large and old, and the ingredients for life as we know it are 
                            everywhere, so there's no reason to think that Earth would be unique in that 
                            regard. Whether of not the life became intelligent is a different question, and
                            we'll see if we find that.
                        </div>
                        <div class="fs-5 mb-4">
                            The universe is large and old, and the ingredients for life as we know it are 
                            everywhere, so there's no reason to think that Earth would be unique in that 
                            regard. Whether of not the life became intelligent is a different question, and
                            we'll see if we find that.
                        </div>
                        <div class="fs-5 mb-4">
                            The universe is large and old, and the ingredients for life as we know it are 
                            everywhere, so there's no reason to think that Earth would be unique in that 
                            regard. Whether of not the life became intelligent is a different question, and
                            we'll see if we find that.
                        </div>
                    </section>
                </article>
                {{-- Comments section  --}}
                <section class="mb-5">
                    <div class="card bg-light">
                        <div class="card-body">
                            {{-- Comment form  --}}
                            <form action="" class="mb-4">
                                <textarea name="" id="" cols="30" rows="3" placeholder="Join the discussion and leave a comment"></textarea>
                            </form>
                            {{-- Comment with nested comments  --}}
                            <div class="d-flex mb-4">
                                {{-- Parent comment  --}}
                                <div class="flex-shrink-0">
                                    <img src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="" class="rounded-circle" >
                                </div>
                                <div class="ms-3">
                                    <div class="fw-bold">Comment Name</div>
                                    If you're going to lead a space frontier, it has to be government, it'll
                                    never be private enterprise. Because the space frontier is dangerous, and it's
                                    expensive, and it has unquantified risks.
                                    {{-- Child comment 1  --}}
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0">
                                            <img src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="" class="rounded-circle">
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
                                            <img src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="" class="rounded-circle">
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
                                    <img src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="" class="rounded-circle">
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
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" placeholder="Enter Search Terms..." aria-label="Enter search terms..." aria-describedby="button-search" class="form-control">
                            <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                        </div>
                    </div>
                </div>
                {{-- Categories widget  --}}
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="">web design</a></li>
                                    <li><a href="">HTML</a></li>
                                    <li><a href="">Freebies</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="">JavaScript</a></li>
                                    <li><a href="">CSS</a></li>
                                    <li><a href="">Tutorials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Side widget  --}}
                <div class="card mb-4">
                    <div class="card-header">Side Widget</div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, quam?
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection