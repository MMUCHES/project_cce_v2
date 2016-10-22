@extends('layouts.app')

@section('content')
    <div class="container"> 
    <div class="bs-old-docs"></div>
        <ol class="breadcrumb">
            <li><a href="/">หน้าหลัก</a></li>
            <li><a href="#">แบบสอบถาม</a></li>
            <li class="active">แบบสอบถามนักเรียน-นักศึกษา-ครูอาจารย์โครงการฝึกประสบการณ์วิชาชีพครู</li>
        </ol>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">

                {!! Form::open(array('route' => 'questionCRUD.store','method'=>'POST')) !!}
                @include('main.questionnaire.question_01')
                {!! Form::close() !!}

            </div>
        </div>
    </div>
    <style>
        th, td {
            text-align: center;
        }
    </style>
    </div>

@endsection
