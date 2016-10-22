<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ระบบจัดการผู้ดูแลระบบ</title>

    <link href="/sb-admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/sb-admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="/sb-admin/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="/sb-admin/vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="/sb-admin/dist/css/style.css" rel="stylesheet">
    <link href="/sb-admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/sb-admin/dasboard.css">
    

</head>

<body>

<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">ระบบจัดการผู้ดูแลระบบ</a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> ตั้งค่า</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-fw"></i> ออกจากระบบ</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /.navbar-top-links sidebar-->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="/dasboard"><i class="fa fa-home fa-fw"></i> หน้าหลัก</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-pie-chart fa-fw"></i> ข้อมูลสรุป</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-area-chart fa-fw"></i> แยกรายการ</a>
                    </li>
    
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">

        @yield('content')

    </div>

</div>


<div><!-- /#script -->
    <script src="/sb-admin/vendor/jquery/jquery.min.js"></script>
    <script src="/sb-admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/sb-admin/vendor/metisMenu/metisMenu.min.js"></script>
    <script src="/sb-admin/vendor/raphael/raphael.min.js"></script>
    <script src="/sb-admin/vendor/morrisjs/morris.min.js"></script>
    <script src="/sb-admin/data/morris-data.js"></script>
    <script src="/sb-admin/dist/js/sb-admin-2.js"></script>
</div>

</body>
</html>
