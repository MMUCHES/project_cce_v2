@extends('dasboard')
@section('content')
    <div class="row font">
        <div class="col-xs-12 col-sm-12 col-md-12">

            {{ Form::open(array()) }}
            @include('dasboard..question_report')
            {!! Form::close() !!}

        </div>
    </div>

    <style>
        th, td {
            text-align: center;
        }
    </style>
    <style>
        .font{
            font-size: 12px;
            color: #333;
        }
    </style>
@endsection