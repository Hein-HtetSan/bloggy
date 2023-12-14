

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Post - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        @include('frontend.part.navbar')

        <!-- Page content-->
        <div class="container-fluid ">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
        

                    @if($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ $error }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endforeach
                    @endif

                    <div class="card w-75 my-5">
                        <div class="card-header">
                            <h3 class="text-muted mb-2 text-center">Welcome!</h3>
                        </div>
                        <div class="card-body">
        
                            <form action="{{ route('UserStore') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">User Name</label>
                                    <input type="name" name="name" id="name" placeholder="Enter User Name" class="form-control @error('name') is-invalid @enderror">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" name="email" id="email" placeholder="Enter Email Address" class="form-control @error('email') is-invalid @enderror">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Gender</label><br>
                                    <input type="radio" name="gender" id="male"><label for="male">Male</label> &nbsp;&nbsp;
                                    <input type="radio" name="gender" id="female"><label for="female">Female</label>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" placeholder="Enter password Address" class="form-control @error('password') is-invalid @enderror">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
    
                                <div class="mb-2 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>

                                <hr>

                                <div class="mb-3 d-flex flex-column align-items-center justify-content-center">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                    <a href="{{ route('UserLogin') }}">Already have an Account!</a>
                                </div>
                                
                            </form>
        
                        </div>
                    </div>
        
                </div>
            </div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>


