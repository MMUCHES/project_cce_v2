@extends('dasboard')
@section('content')
    <div class="row">

        <p style="text-align: center;margin: 20px;">สรุปผลการประเมิน โครงการฝึกประสบการณ์วิชาชีพครู</p>

        <table class="table table-bordered">

            <thead>
            <tr>
                <th rowspan="2" style="text-align: center; width: 10%">รหัสนิสิต</th>
                <th rowspan="2" style="text-align: center; width: 10%;">ผลประเมิน ตอนที่ 1</th>
                <th rowspan="2" style="text-align: center; width: 10%;">ผลประเมิน ตอนที่ 2</th>
                <th colspan="2" style="text-align: center; width: 40%">จุดเด่นและจุดที่ควรพัฒนาของโครงการฯ</th>
                <th rowspan="4" style="text-align: center; width: 15%">ปัญหาและอุปสรรค</th>
                <th rowspan="2" style="text-align: center; width: 15%">ข้อเสนอแนะอื่นๆ</th>
            </tr>
            <tr>
                <th style="text-align: center;">จุดเด่น</th>
                <th style="text-align: center;">จุดที่ควรพัฒนา</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($questions as $question)
                <tr>
                    <td>{{ $question->student_id }}</td>
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


    </div>
@endsection