@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            @if (Auth::guest())
                <div class="panel panel-default">
                    <div class="panel-heading"><b>เข้าใช้งานระบบ</b></div>
                    <div class="panel-body form-box">

                        {!! Form::open(array('class' => 'form-horizontal','method'=>'POST','url' => '/login')) !!}{{ csrf_field() }}
                        @include('auth.access.form.login')
                        {!! Form::close() !!}
                    </div>
                </div>
            @else
                <div class="panel panel-default">
                    <div class="panel-heading"><b>เข้าใช้งานระบบ</b></div>
                    <div class="panel-body">
                        <div class="bs-callout bs-callout-info"><b>ผู้ใช้งาน :</b> {{ Auth::user()->name }}</div><br>
                        <span>เข้าสู่ระบบภายในโดยใช้สิทธิ์ของ : {{ Auth::user()->position }}</span><br>
                        <a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>ออกจากระบบ</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
