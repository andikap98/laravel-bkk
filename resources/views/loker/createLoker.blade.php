@extends('layout.main')
@section('content')
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
           
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12">
                        <form action="{{route('loker.store')}}" method="POST">
                        @csrf
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Tambah Data Lowongan Pekerjaan</h6>
                            <div class="form-floating mb-3">
                                <input type="text" name="nama_perusahaan" class="form-control" id="floatingInput" placeholder="Nama Perusahaan" required>
                                <label for="floatingInput">Nama Perusahaan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="alamat_perusahaan" class="form-control" id="floatingInput" placeholder="Lokasi" required>
                                <label for="floatingInput">Lokasi</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="jenis_pekerjaan" class="form-control" id="floatingInput" placeholder="Pekerjaan" required>
                                <label for="floatingInput">Pekerjaan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="persyaratan" class="form-control" id="floatingInput" placeholder="Persyaratan">
                                <label for="floatingInput">Persyaratan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="jobdesk" class="form-control" id="floatingInput" placeholder="Deskripsi" required>
                                <label for="floatingInput">Deskripsi</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="kontak_person" class="form-control" id="floatingInput" placeholder="Kontak Person">
                                <label for="floatingInput">Kontak Person</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" name="kontak_email" class="form-control" id="floatingInput" placeholder="Email" required>
                                <label for="floatingInput">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" name="batas_waktu_pendaftaran" class="form-control" id="floatingInput" placeholder="Batas Waktu" required>
                                <label for="floatingInput">Batas Waktu</label>
                            </div>
                            <button type="submit" class="btn btn-success m-2">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
@endsection 