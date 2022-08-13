    @include('layouts_admin.header')

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('AdminLTE')}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    @include('layouts_admin.navbar')

    @include('layouts_admin.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        {{-- Main content --}}
        @yield('content')

        @yield('searchs')
        {{-- @include('layouts_admin.content') --}}
        {{-- content --}}

    </div>

    @include('layouts_admin.footer')

