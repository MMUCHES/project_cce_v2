<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"
          integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
</head>
<style>
    body{
        background-color: #f8f8f8;
    }
</style>
<body>

<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">ระบบสรุปผลการประเมิน</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="/dasboard"><i class="fa fa-pie-chart fa-fw"></i> ข้อมูลสรุป</a></li>
            <li><a href="/report_02"><i class="fa fa-area-chart fa-fw"></i> แยกรายการ</a></li>
            <li><a href="/report_02"><i class="fa fa-comments fa-fw"></i> สรุปข้อคิดเห็น</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="/"><i class="fa fa-home fa-fw"></i> กลับหน้าหลัก</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i
                            class="fa fa-user fa-fw"></i>จัดการ <i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-fw"></i> ออกจากระบบ</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

    <div class="container">

        @yield('content')

    </div>

</div>


</body>
</html>
