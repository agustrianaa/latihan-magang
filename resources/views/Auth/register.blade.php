@extends('Auth.index')

@section('content')
<div class="container">
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-4">
                        <img src="../landingpage/assets/img/logokilau.png" alt="Logo" width="115" height="100" class="d-inline-block align-text-top" >
                        </div><!-- End Logo -->

                    <div class="card">
                        <div class="card-body">
                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                            <p class="text-center small">Enter your personal details to create account</p>
                        </div>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="col-12">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" required>
                                    <div class="invalid-feedback">Please, enter your name!</div>
                                </div>

                                <div class="col-12">
                                    <label for="email" class="form-label">Email Address </label>
                                    <input type="text" name="email" class="form-control" id="email" value="{{ old('email') }}" required>
                                    <div class="invalid-feedback">Please, enter your email!</div>
                                </div>

                                <div class="col-12">
                                    <label for="role" class="form-label">Role</label>

                                    <div class="col-12">
                                        <select id="role" type="text" class="form-select" name="role" aria-label="Default select example" id="role" required>
                                        <option selected>Pilih Role</option>
                                        <option value="adminpusat">Admin Pusat</option>
                                        <option value="admincabang">Admin Cabang</option>
                                        <option value="shelter">Shelter</option>
                                        </select>
                                        <div class="invalid-feedback">Please, enter your email!</div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="password" class="form-label">Password </label>
                                    <input type="password" name="password" class="form-control" id="password" value="{{ old('email') }}" required autocomplete="new-password">
                                    <div class="invalid-feedback">Please, enter your Password!</div>
                                </div>

                                <div class="col-12">
                                    <label for="password-confirm" class="form-label">Confirm Password </label>
                                    <input type="password-confirm" name="password-confirm" class="form-control" id="password" value="{{ old('email') }}" required autocomplete="new-password">
                                    <div class="invalid-feedback">Please, enter your Password!</div>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary w-100">
                                        Create Account
                                    </button>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">Already have an account? <a href="{{url('login')}}">Log in</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
