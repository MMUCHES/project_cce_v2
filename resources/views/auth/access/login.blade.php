@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading"><b>เข้าใช้งานระบบ</b></div>
                <div class="panel-body form-box">

                    {!! Form::open(array('method'=>'POST','url' => '/login')) !!}{{ csrf_field() }}
                    @include('auth.access.form.login')
                    {!! Form::close() !!}

                </div>
            </div>

        </div>
        </div>
    </div>
@endsection
