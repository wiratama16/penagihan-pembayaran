        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Kelola Transaksi</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('admin.transaksi.tagihan')}}" class="dropdown-item">Tagihan</a>
                            <a href="{{route('admin.transaksi.riwayat_tagihan')}}" class="dropdown-item">Riwayat Tagihan</a>
                            <a href="{{route('admin.transaksi.tambah_tagihan')}}" class="dropdown-item">Tambah Tagihan</a>

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-th me-2"></i>Pelanggan</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{route('admin.pelanggan.data_pelanggan')}}" class="dropdown-item">Data Pelanggan</a>
                            <a href="{{route('admin.pelanggan.tambah_pelanggan')}}" class="dropdown-item">Tambah Pelanggan</a>

                        </div>
                    </div>
                    
                           
                    <a href="{{route('admin.laporan.laporan')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Laporan</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item active">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->