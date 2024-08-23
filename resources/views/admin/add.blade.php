<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Required meta tags -->

    <title>Aplikasi Inventori - Admin</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.png">

    <!-- Plugins css -->
    <link rel="stylesheet" href="{{ asset('../css/mini-event-calendar.min.css') }}">

    <!-- Master Stylesheet CSS -->
    <link rel="stylesheet" href="{{ asset('../css/style.css') }}">

    <!-- These plugins only need for the run this page -->
    <link rel="stylesheet" href="{{ asset('../css/dataTable/datatables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/dataTable/responsive.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/dataTable/buttons.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('../css/dataTable/select.bootstrap4.css') }}">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader-area">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader -->

    <!-- ======================================
    ******* Main Page Wrapper **********
    ======================================= -->

    <!-- Choose Layout -->
    <div class="choose-layout-area">
        <div class="setting-trigger-icon" id="settingTrigger">
            <i class="ti-settings"></i>
        </div>
        <div class="choose-layout" id="chooseLayout">
            <div class="quick-setting-tab">
                <div class="widgets-todo-list-area">
                    <h4 class="todo-title">Todo List:</h4>
                    <form id="form-add-todo" class="form-add-todo">
                        <input type="text" id="new-todo-item" class="new-todo-item form-control" name="todo"
                            placeholder="Add New">
                        <input type="submit" id="add-todo-item" class="add-todo-item" value="+">
                    </form>

                    <form id="form-todo-list">
                        <ul id="flaptToDo-list" class="todo-list">
                            <li><label class="ckbox"><input type="checkbox" name="todo-item-done" class="todo-item-done"
                                        value="test"><span></span></label>Go to Market
                                <i class="todo-item-delete ti-close"></i></li>

                            <li><label class="ckbox"><input type="checkbox" name="todo-item-done" class="todo-item-done"
                                        value="hello"><span></span></label>Meeting with AD
                                <i class="todo-item-delete ti-close"></i></li>

                            <li><label class="ckbox"><input type="checkbox" name="todo-item-done" class="todo-item-done"
                                        value="hello"><span></span></label>Check Mail
                                <i class="todo-item-delete ti-close"></i></li>

                            <li><label class="ckbox"><input type="checkbox" name="todo-item-done" class="todo-item-done"
                                        value="hello"><span></span></label>Work for Theme
                                <i class="todo-item-delete ti-close"></i></li>

                            <li><label class="ckbox"><input type="checkbox" name="todo-item-done" class="todo-item-done"
                                        value="hello"><span></span></label>Create a Plugin
                                <i class="todo-item-delete ti-close"></i></li>

                            <li><label class="ckbox"><input type="checkbox" name="todo-item-done" class="todo-item-done"
                                        value="hello"><span></span></label>Fixed Template Issues
                                <i class="todo-item-delete ti-close"></i></li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="flapt-page-wrapper">
        <!-- Sidemenu Area -->
        <div class="flapt-sidemenu-wrapper">
            <!-- Desktop Logo -->
            <div class="flapt-logo">
                <a href="index.html"><img class="desktop-logo" src="{{ asset('image/logo.png') }}" alt="Desktop Logo"> <img
                        class="small-logo" src="{{ asset('image/small-logo.png') }}" alt="Mobile Logo"></a>
            </div>

            <!-- Side Nav -->
            <div class="flapt-sidenav" id="flaptSideNav">
                <!-- Side Menu Area -->
                <div class="side-menu-area">
                    <!-- Sidebar Menu -->
                    <nav>
                        <ul class="sidebar-menu" data-widget="tree">
                            <li class="menu-header-title">Dashboard</li>
                            <li class="active"><a href="{{ route('admin.index') }}"><i class='bx bx-home-heart'></i><span>Dashboard</span></a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logoutForm').submit();">
                                                        <i class="bx bx-power-off"></i>
                                                        <span>Log Out</span>
                                    </a>
                                {{-- Logout User --}}
                                <form method="POST" action="{{ route('logout') }}" class="logoutForm" id="logoutForm">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="flapt-page-content">
            <!-- Top Header Area -->
            <header class="top-header-area d-flex align-items-center justify-content-between">
                <div class="left-side-content-area d-flex align-items-center">
                    <!-- Mobile Logo -->
                    <div class="mobile-logo">
                        <a href="index.html"><img src="{{ asset('image/small-logo.png') }}" alt="Mobile Logo"></a>
                    </div>

                    <!-- Triggers -->
                    <div class="flapt-triggers">
                        <div class="menu-collasped" id="menuCollasped">
                            <i class='bx bx-grid-alt'></i>
                        </div>
                        <div class="mobile-menu-open" id="mobileMenuOpen">
                            <i class='bx bx-grid-alt'></i>
                        </div>
                    </div>
                </div>

                <div class="right-side-navbar d-flex align-items-center justify-content-end">
                    <!-- Mobile Trigger -->
                    <div class="right-side-trigger" id="rightSideTrigger">
                        <i class='bx bx-menu-alt-right'></i>
                    </div>

                    <!-- Top Bar Nav -->
                    <ul class="right-side-content d-flex align-items-center">

                        <li class="nav-item dropdown">
                            <a href="#" class="dropdown-item"><i class="font-15"
                                aria-hidden="true"></i> {{ Auth::user()->name }}</a>
                        </li>

                        <li class="nav-item dropdown">
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><img src="{{ asset('image/person_1.jpg') }}"
                                    alt=""></button>
                            <div class="dropdown-menu profile dropdown-menu-right">
                                <!-- User Profile Area -->
                                <div class="user-profile-area">
                                    <a href="{{ route('profile.edit') }}" class="dropdown-item"><i class="bx bx-wrench font-15"
                                            aria-hidden="true"></i> Profile Setting</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>

            <!-- Body Content -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="container-fluid">
                        <div class="row">

                            {{-- cek if message --}}
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    <strong>Sukses</strong> Aksi Berhasil
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            {{-- body --}}

                            <div class="row">
                                <div class="col-8 box-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-50">
                                                <h4 class="card-title mb-0">Tambah <span
                                                        class="break-320-480-none">Buku</span></h4>
                                            </div>

                                            {{-- MAIN CONTENT --}}
                                            <form action="{{ route('admin.store') }}" method="POST">
                                                @csrf
                                                <div class="form-group mb-3">
                                                    <label for="id">ID Buku</label>
                                                    <input type="number" class="form-control" id="id" name="id" placeholder="ID Buku" maxlength="10">

                                                    @if ($errors->has('id'))
                                                        <label id="lastname-error" class="error mt-2 text-danger" for="lastname">{{ $errors->first('id') }}</label>
                                                    @endif
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="name">Nama Buku</label>
                                                    <input type="string" class="form-control" id="name" name="name" placeholder="Nama Buku">

                                                    @if ($errors->has('name'))
                                                        <div class="invalid-feedback" role="alert">
                                                            {{ $errors->first('name') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="price">Harga</label>
                                                    <input type="number" class="form-control" id="price" name="price" placeholder="Harga">

                                                    @if ($errors->has('price'))
                                                        <div class="invalid-feedback" role="alert">
                                                            {{ $errors->first('price') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="stock">Stok</label>
                                                    <input type="number" class="form-control" id="stock" name="stock" placeholder="Stok">

                                                    @if ($errors->has('stock'))
                                                        <div class="invalid-feedback" role="alert">
                                                            {{ $errors->first('stock') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="form-group mb-3 col-md-4">
                                                    <label for="category" class="col-form-label">Kategori</label>
                                                    <select id="category" class="form-control" name="category">
                                                        <option value="">Choose</option>
                                                        <option value="fiksi">Fiksi</option>
                                                        <option value="nonfiksi">Non Fiksi</option>
                                                    </select>

                                                    @if ($errors->has('category'))
                                                        <div class="invalid-feedback" role="alert">
                                                            {{ $errors->first('category') }}
                                                        </div>
                                                    @endif
                                                </div>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </form>

                                        </div> <!-- end card body-->
                                    </div> <!-- end card -->
                                </div><!-- end col-->
                            </div>

                            </div>
                        </div>
                        <!-- / .row -->
                    </div>

                    <!-- Footer Area -->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <!-- Footer Area -->
                                <footer
                                    class="footer-area d-sm-flex justify-content-center align-items-center justify-content-between">
                                    <!-- Copywrite Text -->
                                    <div class="copywrite-text">
                                        <p>Created by @<a href="#">RIGEL</a></p>
                                    </div>
                                    <div class="fotter-icon text-center">
                                        <a href="#" class="action-item mr-2" data-bs-toggle="tooltip" title="Facebook">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="action-item mr-2" data-bs-toggle="tooltip" title="Twitter">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="action-item mr-2" data-bs-toggle="tooltip" title="Pinterest">
                                            <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="action-item mr-2" data-bs-toggle="tooltip" title="Instagram">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Plugins Js -->
    <script src="{{ asset('../js/jquery.min.js') }}"></script>
    <script src="{{ asset('../js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('../js/bundle.js') }}"></script>

    <!-- Active JS -->
    <script src="{{ asset('../js/settings.js') }}"></script>
    <script src="{{ asset('../js/scrool-bar.js') }}"></script>
    <script src="{{ asset('../js/todo-list.js') }}"></script>
    <!-- DATE TIME -->
    <script src="{{ asset('../js/active.js') }}"></script>
    <!-- Inject JS -->
    <script src="{{ asset('../js/mini-event-calendar.min.js') }}"></script>
    <script src="{{ asset('../js/mini-calendar-active.js') }}"></script>
    <script src="{{ asset('../js/apexchart.min.js') }}"></script>
    <script src="{{ asset('../js/dashboard-active.js') }}"></script>
    
</body>

</html>