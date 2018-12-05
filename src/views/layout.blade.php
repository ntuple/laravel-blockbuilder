<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset("vendor/blockbuilder/assets/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css"/>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.3 -->
    <script src="{{ asset ('vendor/blockbuilder/assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>

    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset ('vendor/blockbuilder/assets/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <!--DATATABLE-->
    <link rel="stylesheet" href="{{ asset ('vendor/blockbuilder/assets/plugins/datatables/dataTables.bootstrap.css')}}">
    <script src="{{ asset ('vendor/blockbuilder/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset ('vendor/blockbuilder/assets/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
    <!--END HERE-->
</head>
<body>
<div id='app' class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section id='content_section' class="content">
            <!-- Your Page Content Here -->
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
</div><!-- ./wrapper -->

@stack('bottom')
</body>
</html>
