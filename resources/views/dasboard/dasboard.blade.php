@extends('dasboard')
@section('content')
    <div class="row font">

        <p style="text-align: center;margin: 20px;">สรุปผลการประเมิน โครงการฝึกประสบการณ์วิชาชีพครู</p>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th style="width: 10%;text-align: center">รหัสนิสิต</th>
                <th style="width: 15%;text-align: center">ผลการประเมิน ตอนที่ 1</th>
                <th style="width: 15%;text-align: center">ผลการประเมิน ตอนที่ 2</th>
                <th style="width: 15%;text-align: center">จุดเด่น</th>
                <th style="width: 15%;text-align: center">จุดที่ควรพัฒนา</th>
                <th style="width: 15%;text-align: center">ปัญหาและอุปสรรค</th>
                <th style="width: 15%;text-align: center">ข้อเสนอแนะอื่นๆ</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($questions as $question)
                <tr>
                    <td style="width: 5%;text-align: center">{{ $question->student_id }}</td>
                    <td>เห็นด้วยมากที่สุด</td>
                    <td>เห็นด้วยมาก</td>
                    <td>{{ $question->comment_1 }}</td>
                    <td>{{ $question->comment_2 }}</td>
                    <td>{{ $question->comment_3 }}</td>
                    <td>{{ $question->comment_4 }}</td>

                </tr>
            @endforeach
            </tbody>
        </table>

        {{--{!! $questions->render() !!}--}}

    </div>


    <style>
        .font{
            font-size: 12px;
            color: #333;
        }
    </style>
    <script>
        function myFunction() {
            window.print();
        }
    </script>

@endsection