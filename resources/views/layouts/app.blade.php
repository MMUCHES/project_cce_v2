<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"
          integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"
          integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
            integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/cce.css">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
<nav class="navbar navbar-default navbar-static-top bs-docs-nav">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="{{ url('/') }}" class="navbar-brand"><span class="glyphicon glyphicon-record"></span> CCE </a>
        </div>

        <div class="collapse navbar-collapse bs-navbar-collapse" id="app-navbar-collapse">

            <ul class="nav navbar-nav">
                @if (Auth::guest())
                @else
                    <li><a href="{{ url('/') }}">หน้าหลัก</a></li>
                    @role('admin')
                    <li><a href="/dasboard">สรุปผลแบบสอบถาม</a></li>
                    @endrole
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">แบบสอบถาม<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/questionHOME">แบบสอบถามนักเรียน-นักศึกษา-ครูอาจารย์โครงการฝึกประสบการณ์วิชาชีพครู</a></li>
                        </ul>
                    </li>
                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li>
                        <a href="{{ url('/')}}">
                            <span class="glyphicon glyphicon-user"></span> &nbsp;<b> เข้าสู่ระบบ</b>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/register')}}">
                            <span class="glyphicon glyphicon-user"></span> &nbsp;<b> สร้างบัญชี</b>
                        </a>
                    </li>
                @else
                    <li>
                        <a>
                            <span class="glyphicon glyphicon-user"></span> &nbsp;<b>ผู้ใช้งาน
                                : </b> {{ Auth::user()->name }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>ออกจากระบบ</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>

</body>
</html>
