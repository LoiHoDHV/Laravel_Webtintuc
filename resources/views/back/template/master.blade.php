<!-- file dung chung  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('/admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{url('/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{url('/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{url('/admin/plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('/admin/dist/css/adminlte.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{url('/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{url('/admin/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{url('/admin/plugins/summernote/summernote-bs4.min.css')}}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{url('/admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo"
                height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{url('/')}}" class="nav-link" target="_blank">Xem Website</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-user fa-fw"></i>
                        Xin cha??o<b> {{Auth::user()->fullname}}</b>
                        <i class="fas fa-chevron-down"></i>
                        <!-- <span class="badge badge-warning navbar-badge"></span> -->
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        @if(isset(Auth::user()->level) && Auth::user()->level == 1)
                        <a href="{{url('admin/staff/list')}}" class="dropdown-item">
                            <i class="fas fa-users-cog"></i> Qua??n ly?? nh??n vi??n
                            <div class="dropdown-divider"></div>
                            @endif
                            <a href="{{url('admin/staff/profile')}}" class="dropdown-item">
                                <i class="fas fa-user-edit"></i>Th??ng tin ta??i khoa??n
                            </a>


                            <div class="dropdown-divider"></div>
                            <a href="{{url('logout')}}" class="dropdown-item dropdown-footer">Thoa??t ra</a>
                    </div>
                </li>


            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{url('admin/home')}}" class="brand-link">
                <span class="brand-text font-weight-light">Nho??m 9_pr02k2</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <!-- Ph??n quy????n admin ????????c nhi??n th????y toa??n b???? -->
                        @if(isset(Auth::user()->level) && Auth::user()->level == 1)
                        <li class="nav-item has-treeview menu-open">
                            <a href="{{url('admin/system')}}" class="nav-link @yield('system') ">
                                <i class="fas fa-cog fa-fw"></i>
                                <p>
                                    C????u hi??nh h???? th????ng
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="{{url('admin/page/list')}}" class="nav-link @yield('page') ">
                                <i class="fas fa-sitemap fa-fw"></i>
                                <p>
                                    Qua??n ly?? trang
                                </p>
                            </a>
                        </li>
                        
                        @endif
                        @if(isset(Auth::user()->level))
                        <li class="nav-item has-treeview menu-open">
                            <a href="#" class="nav-link">
                                <i class="fas fa-newspaper fa-fw"></i>
                                <p>
                                    Qua??n ly?? tin t????c

                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{url('admin/news_cat/list')}}" class="nav-link @yield('news')">
                                        ??? Danh mu??c tin t????c
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('admin/news/list')}}" class="nav-link @yield('news_list')">
                                        ??? Danh sa??ch tin t????c
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{url('admin/news/moresearch')}}" class="nav-link @yield('more_search')">
                                        ??? Ti??m ki????m tin t????c
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif

                        @if(isset(Auth::user()->level) && Auth::user()->level == 1)
                        <li class="nav-item has-treeview menu-open">
                            <a href="{{url('admin/social/list')}}" class="nav-link @yield('social')">
                                <i class="fas fa-share-alt fa-fw "></i>
                                <p>
                                    Qua??n ly?? ma??ng xa?? h????i
                                </p>
                            </a>
                        </li>
                        @endif
                        <li class="nav-item has-treeview menu-open">
                            <a href="{{url('admin/newsletter/list')}}" class="nav-link @yield('newsletter') ">
                                <i class="fas fa-envelope-open-text"></i>
                                <p>
                                    Qua??n ly?? nh????n tin nh????n ng??????i du??ng
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview menu-open">
                            <a href="{{url('admin/contact/list')}}" class="nav-link @yield('contact')">
                                <i class="fab fa-mailchimp"></i>
                                <p>
                                    Qua??n ly?? li??n h???? 
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="m-0">@yield('heading')</h1>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <section class="content">
                <div class="container-fluid">
                    <div class="col-md-12">
                        @if(Session::has('flash_message') == true)
                        <div class="container-fluid">
                            <button type="button" class="btn btn-danger">{!! Session::get('flash_message') !!} </button>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"> &times;</span>
                            </button>
                        </div>

                        <!-- L????i gi?? ????y kh??ng ro?? :-->
                        <!-- <div class="ad_message alert alert-{!! Session::get('flash_level')!!}">
                                <button type="button" class = "btn btn-danger">{!! Session::get('flash_message') !!} </button>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"> &times;</span>
                                </button>
                            </div> -->

                        @endif

                        <!-- Main content -->
                        @yield('content')
                        <!-- /.content -->
                    </div>
            </section>

        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Nho??m 9 - 37 clone &copy; 2023 <a href="https://wwww.facebook.com/thangkhoia.16">L????i Admin
                    keke</a>.</strong>
            <b>S????ng nghi??a khi??</b>
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> hehe
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->


    <!-- jQuery -->
    <script src="{{url('/admin/plugins/jquery/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{url('/admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{asset('/admin/plugins/chart.js/Chart.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('/admin/plugins/sparklines/sparkline.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('/admin/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('/admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('/admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('/admin/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('/admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Summernote -->
    <script src="{{asset('/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('/admin/dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('/admin/dist/js/demo.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('/admin/dist/js/pages/dashboard.js')}}"></script>


    <!-- DataTables  & Plugins -->
    <script src="{{url('/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{url('/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{url('/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{url('/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{url('/admin/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{url('/admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{url('/admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{url('/admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{url('/admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{url('/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- Page specific script -->
    <script>
    $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
    </script>

    <script src="{{url('/ckeditor4.17/ckeditor.js')}}"></script>
    // type 1 t????c la?? cho upload hi??nh a??nh
    <script>
    
    
    CKEDITOR.replace('ckeditor', {
        filebrowserBrowseUrl: '{!!url("/responsive_filemanager/filemanager/dialog.php?type=1&editor=ckeditor&fldr=")!!}',
        filebrowserUploadUrl: '{!!url("/responsive_filemanager/filemanager/dialog.php?type=1&editor=ckeditor&fldr=")!!}',
        filebrowserImageBrowseUrl: '{!!url("/responsive_filemanager/filemanager/dialog.php?type=1&editor=ckeditor&fldr=")!!}'
    });
    </script>

    <script type="text/javascript">
    function ChangeToSlug() {
        var title, slug;

        //L???y text t??? th??? input title
        title = document.getElementById("title").value;

        //?????i ch??? hoa th??nh ch??? th?????ng
        slug = title.toLowerCase();

        //?????i k?? t??? c?? d???u th??nh kh??ng d???u
        slug = slug.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'a');
        slug = slug.replace(/??|??|???|???|???|??|???|???|???|???|???/gi, 'e');
        slug = slug.replace(/i|??|??|???|??|???/gi, 'i');
        slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'o');
        slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???/gi, 'u');
        slug = slug.replace(/??|???|???|???|???/gi, 'y');
        slug = slug.replace(/??/gi, 'd');
        //X??a c??c k?? t??? ?????t bi???t
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|'|\"|\:|\;|_/gi, '');
        //?????i kho???ng tr???ng th??nh k?? t??? g???ch ngang
        slug = slug.replace(/ /gi, "-");
        //?????i nhi???u k?? t??? g???ch ngang li??n ti???p th??nh 1 k?? t??? g???ch ngang
        //Ph??ng tr?????ng h???p ng?????i nh???p v??o qu?? nhi???u k?? t??? tr???ng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //X??a c??c k?? t??? g???ch ngang ??? ?????u v?? cu???i
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox c?? id ???slug???
        document.getElementById('slug').value = slug;
    };
    </script>


</body>

</html>