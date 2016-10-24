@extends('dasboard')
@section('content')
    <div class="row">

        <p style="text-align: center;margin: 20px;">สรุปผลการประเมิน โครงการฝึกประสบการณ์วิชาชีพครู</p>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th style="width: 10%">รหัสนิสิต</th>
                <th style="width: 5%;">ผลการประเมิน ตอนที่ 1</th>
                <th style="width: 5%;">ผลการประเมิน ตอนที่ 2</th>
                <th style="width: 20%;">จุดเด่น</th>
                <th style="width: 20%;">จุดที่ควรพัฒนา</th>
                <th style="width: 20%;">ปัญหาและอุปสรรค</th>
                <th style="width: 20%;">ข้อเสนอแนะอื่นๆ</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($questions as $question)
                <tr>
                    <td>{{ $question->usersid }}</td>
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