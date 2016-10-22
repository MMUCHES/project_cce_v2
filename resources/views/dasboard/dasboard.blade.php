@extends('dasboard')
@section('content')
    <div class="row">
        <div class="bs-callout bs-line bs-callout-info">รายชื่อนิสิตที่ทำแบบสอบถาม</div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10%">รหัสนิสิต</th>
                    <th style="width: 50%">ชื่อ</th>
                    <th style="width: 30%">สาขา</th>
                    <th style="width: 10%;">ผลการประเมิน</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>56025794</td>
                    <td>นายเสรี  ยอยยิ้ม</td>
                    <td>เทคโนโลยีคอมพิวเตอร์เคลื่อนที่</td>
                    <td style="text-align: center"><span class="glyphicon glyphicon glyphicon-list-alt" aria-hidden="true"></span></td>
                </tr>
            </tbody>
        </table>

    </div>
@endsection