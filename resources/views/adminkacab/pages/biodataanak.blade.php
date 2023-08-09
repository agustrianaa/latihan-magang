@extends('layouts.app')

@section('content')

<main id="main" class="main">

    <div class="pagetitle">
    <h1>Profile</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Profile</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
    <div class="row">
        <div class="col-xl-4">

        <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <h2>{{ $dataAnak -> nama}}</h2>
            <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
            </div>
        </div>

        </div>

        <div class="col-xl-8">

        <div class="card">
            <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Biodata Anak</button>
                </li>

                <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-datapendidikan">Data Pendidikan</button>
                </li>

                <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-data-orangtua">Data OrangTua</button>
                </li>

            </ul>
            <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                <h5 class="card-title">Profile Details</h5>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                    <div class="col-lg-9 col-md-8">{{$dataAnak->nama}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tempat Lahir</div>
                    <div class="col-lg-9 col-md-8">{{$dataAnak->tempat_lahir}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                    <div class="col-lg-9 col-md-8">{{$dataAnak->tanggal_lahir}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                    <div class="col-lg-9 col-md-8">{{$dataAnak->jenis_kelamin}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                    <div class="col-lg-9 col-md-8">{{$dataAnak->alamat}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Pendidikan</div>
                    <div class="col-lg-9 col-md-8">{{$dataAnak->pendidikan}}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Orang Tua</div>
                    <div class="col-lg-9 col-md-8">{{$dataAnak->ortu_wali}}</div>
                </div>

                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                <!-- Profile Edit Form -->
                <form action="#" method="POST" id="editData">
                    @csrf
                    <div class="row mb-3">
                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Photo</label>
                    <div class="col-md-8 col-lg-9">
                        <img src="assets/img/profile-img.jpg" alt="Profile">
                        <div class="pt-2">
                        <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                        <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                        </div>
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="nama" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="nama" type="text" class="form-control" id="nama" value="{{$dataAnak->nama}}">
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="tempat_lahir" class="col-md-4 col-lg-3 col-form-label">Tempat Lahir</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" >
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="tanggal_lahir" class="col-md-4 col-lg-3 col-form-label">Tanggal Lahir</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="tanggal_lahir" type="text" class="form-control" id="tanggal_lahir">
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="JK" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="jenis_kelamin" type="text" class="form-control" id="jenis_kelamin" >
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="alamat" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="alamat" type="text" class="form-control" id="alamat" >
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="pendidikan" class="col-md-4 col-lg-3 col-form-label">Pendidikan</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="pendidikan" type="text" class="form-control" id="pendidikan">
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="OrtuWali" class="col-md-4 col-lg-3 col-form-label">Orang Tua atau Wali</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="ortu_wali" type="text" class="form-control" id="ortu_wali" >
                    </div>
                    </div>

                    <div class="text-center">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-datapendidikan">

                <!-- Settings Form -->
                <form>

                    <div class="row mb-3">
                    <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                    <div class="col-md-8 col-lg-9">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="changesMade" checked>
                        <label class="form-check-label" for="changesMade">
                            Changes made to your account
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="newProducts" checked>
                        <label class="form-check-label" for="newProducts">
                            Information on new products and services
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="proOffers">
                        <label class="form-check-label" for="proOffers">
                            Marketing and promo offers
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                        <label class="form-check-label" for="securityNotify">
                            Security alerts
                        </label>
                        </div>
                    </div>
                    </div>

                    <div class="text-center">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form><!-- End settings Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                <!-- Change Password Form -->
                <form>

                    <div class="row mb-3">
                    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                    </div>
                    </div>

                    <div class="row mb-3">
                    <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                    <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                    </div>
                    </div>

                    <div class="text-center">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                </form><!-- End Change Password Form -->

                </div>

            </div><!-- End Bordered Tabs -->

            </div>
        </div>

        </div>
    </div>
    </section>

</main><!-- End #main -->
@endsection
