@extends('dasboard')
@section('content')
    <div class="row">

        <table class="table table-bordered">
            <thead>
            <tr>
                <th style="width: 10%">รหัสนิสิต 55555</th>
                <th style="width: 50%">ชื่อ</th>
                <th style="width: 30%">สาขา</th>
                <th style="width: 10%;">ผลการประเมิน</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($questions as $question)
                <tr>
                    <td>{{ $question->id }}</td>
                    <td>นายเสรี ยอยยิ้ม</td>
                    <td>เทคโนโลยีคอมพิวเตอร์เคลื่อนที่</td>

                    <td style="text-align: center"><span class="glyphicon glyphicon glyphicon-list-alt"
                                                         aria-hidden="true"></span></td>
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>




@endsection