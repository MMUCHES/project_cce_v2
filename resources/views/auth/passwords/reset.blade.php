@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Reset Password</b></div>
                <div class="panel-body form-box">

                    {!! Form::open(array('class' => 'form-horizontal','method'=>'POST','url' => '/password/reset')) !!}{{ csrf_field() }}
                    @include('auth.passwords.form.reset')
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
