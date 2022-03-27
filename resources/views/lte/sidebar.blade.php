<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="width: 270px">
    <!-- Brand Logo -->
    <a href="/test" class="brand-link" style="margin-bottom: 17px; width:270px">
        <img src="{{ url('img/logo_undip.png') }}" alt="" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Universitas Diponegoro</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel pb-3 mb-3 d-flex">
            {{-- <div class="image">
      <img src="{{ url('template/LTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
    </div> --}}
            <div class="info ml-4">
                {{-- <a href="#" class="d-block">Welcome, Alexander Pierce</a> --}}
                <span class="text-white">Welcome, {{ auth()->user()->name }}</span>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                @if (auth()->user()->role == 'mahasiswa')
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book-open"></i>
                            <p>
                                Kelola Portofolio
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="mahasiswa/experiences" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Experience</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="mahasiswa/projects" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Project</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="mahasiswa/achievements" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Achievement</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="pages/gallery.html" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                                Tampilkan Portofolio
                            </p>
                        </a>
                    </li>
                @endif

                @if (auth()->user()->role == 'admin')
                <li class="nav-item">
                    <a href="admin/daftar_mhs" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Daftar Mahasiswa
                        </p>
                    </a>
                </li>
                @endif
            </ul>
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="nav-link px-3 bg-dark border-0">Logout <span
                        data-feather="log-out"></span></button>
            </form>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
