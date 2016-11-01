@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="bs-old-docs"></div>
        <ul class="list-group" >
            <li class="list-group-item list-group-item-default text-center"><h4>
                    แบบสอบถามนักเรียน-นักศึกษา-ครูอาจารย์โครงการฝึกประสบการณ์วิชาชีพครู</h4></li>
        </ul>

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
<style>
    input[type=radio] {
        border: 0px;
        width: 80%;
        height: 1.2em;
    }
</style>
@endsection
