@include('partials.header')

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->





        <!-- Content Start -->
        <div class="content">
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
                                    <img class="rounded-circle" src="/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="/img/user.jpg" alt="" style="width: 40px; height: 40px;">
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
                            <img class="rounded-circle me-lg-2" src="/img/user.jpg" alt="" style="width: 40px; height: 40px;">
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
            
            @include('partials.sidebar')
            @include('sweetalert::alert')

            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="col-sm-12 col-xl-12">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Tambah Tagihan</h6>
                        <form action="{{route('admin.transaksi.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label for="id_pelanggan">ID Pelanggan:</label><br>
                            <select name="id_pelanggan" id="id_pelanggan" class="form-select">
                                @foreach ($pelanggan as $p)
                                <option value="{{$p->id_pelanggan}}">{{$p->nama_pelanggan}}</option>
                                    
                                @endforeach
                            </select>
                        
                            <label for="jenis_tagihan">Jenis Tagihan:</label><br>
                            <input type="text" value="{{$transaksi->jenis_tagihan}}" class="form-control" id="jenis_tagihan" name="jenis_tagihan" required><br><br>
                        
                            <label for="tanggal_tagihan">Tanggal Tagihan:</label><br>
                            <input type="date"value="{{$transaksi->tanggal_tagihan}}"  class="form-control" id="tanggal_tagihan" name="tanggal_tagihan" required><br><br>
                        
                            <label for="jumlah_tagihan">Jumlah Tagihan:</label><br>
                            <input type="number" value="{{$transaksi->jumlah_tagihan}}"  class="form-control" id="jumlah_tagihan" name="jumlah_tagihan" required><br><br>
                        
                            <label for="tanggal_jatuh_tempo">Tanggal Jatuh Tempo:</label><br>
                            <input type="date" value="{{$transaksi->tanggal_jatuh_tempo}}"  class="form-control" id="tanggal_jatuh_tempo" name="tanggal_jatuh_tempo" required><br><br>
                        
                            <label for="rincian_tagihan">Rincian Tagihan:</label><br>
                            <textarea class="form-control" id="rincian_tagihan" name="rincian_tagihan" rows="4" required>{{$transaksi->rincian_tagihan}} </textarea><br><br>
                        
                            <label for="no_rekening">Nomor Rekening:</label><br>
                            <input type="text" value="{{$transaksi->no_rekening}}" class="form-control" id="no_rekening" name="no_rekening" required><br><br>
                        
                            <label for="bukti_transfer">Bukti Transfer:</label><br>
                            <input type="file" class="form-control" id="bukti_transfer" name="bukti_transfer" accept="image/*" required><br><br>
                        
                            <label for="status">Status:</label><br>
                            <select class="form-select" id="status" name="status" required>
                                <option value="belum_lunas" <?= $transaksi->status == 'belum_lunas'?"selected":'' ?>>Belum Lunas</option>
                                <option value="lunas" <?= $transaksi->status == 'lunas'?"selected":'' ?>>Lunas</option>
                                <option value="sedang_divalidasi" <?= $transaksi->status == 'sedang_divalidasi'?"selected":'' ?>>Sedang divalidasi</option>

                            </select><br><br>
                        
                            <input type="submit" value="Submit">
                            </form>
                    </div>
                </div>
            </div>
            <!-- Blank End -->


            @include('partials.footer')

        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @include('partials.scripts')
</body>

</html>