@extends('Auth.index')

@section('content')
<main>
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-4">
                            <img src="../landingpage/assets/img/logokilau.png" alt="Logo" width="115" height="100" class="d-inline-block align-text-top" >
                    </div><!-- End Logo -->

                    <div class="card mb-3">
                        <div class="card-header">
                        <h5 class="card-title text-center pb-0 fs-4">LOGIN</h5>
                        </div>
                            <div class="card-body">

                            <div class="pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Yang bener login nya ya!!</h5>
                            </div>

                            <form class="row g-3 needs-validation" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="col-12">
                                    <label for="email" class="form-label">Email Address</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control" id="email">
                                            <div class="invalid-feedback">Please enter your username.</div>
                                        </div>
                                </div>

                                <div class="col-12">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" required>
                                    <div class="invalid-feedback">Please enter your password!</div>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" value="true" id="remember">
                                    <label class="form-check-label" for="remember">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Login</button>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">Don't have account? <a href="{{url('register')}}">Create an account</a></p>
                                </div>
                            </form>

                            </div>
                </div>
                </div>
                </div>
            </div>
        </section>
    </div>
</main><!-- End #main -->
@endsection
