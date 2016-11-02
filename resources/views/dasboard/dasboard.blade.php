@extends('dasboard')
@section('content')
    <style>
        .font {
            font-size: 14px;
            line-height: 1.8em;
            color: #333;
        }
        .btn-top{
            margin-top: 10px;
        }
    </style>

    <button class="btn btn-primary pull-right btn-top"><i OnClick="printTable('print_table');" class="fa fa-print fa-2x"
                                                          aria-hidden="true"></i></button>


    <div class="row font panel panel-default" id="print_table">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="bs-old-docs"></div>
            <p style="text-align: center;margin: 20px;font-size: 18px;">สรุปผลการประเมิน
                โครงการฝึกประสบการณ์วิชาชีพครู</p>
            <div class="bs-old-docs"></div>
            @foreach ($avgTotals as $avgTotal)
                <ul style="list-style-type: none;">
                    <li>สรุปผลในภาพรวมของโครงการประเมินความพึงพอใจโครงการฝึกประสบการณ์วิชาชีพครู</li>
                </ul>
                <ul style="list-style-type: none;">
                    <li><b>จำนวนคนประเมินทั้งหมด : </b> {{$avgTotal->count/26}} คน</li>
                </ul>
                <ul style="list-style-type: none;">
                    <li><b>จากตาราง</b> ความคิดเห็นในตอนที่ 1</li>
                    <li><b>ระดับความคิดเห็นมีค่าเฉลี่ย {{$avgTotal->part1}} อยู่ในระดับ มากที่สุด</b></li>
                </ul>
                <ul style="list-style-type: none;">
                    <li><b>จากตาราง</b> ความคิดเห็นในตอนที่ 2</li>
                    <li><b>ระดับความคิดเห็นมีค่าเฉลี่ย {{$avgTotal->part2}} อยู่ในระดับ มาก</b></li>
                </ul>
            @endforeach
            <div class="bs-old-docs"></div>
            <ul style="list-style-type: none;">
                <li><b>ค่าเฉลี่ยคะแนนความพึงพอใจ</b></li>
                <li>คะแนน 4.50-5.00 ความพึงพอใจอยู่ในระดับ <b>มากที่สุด</b></li>
                <li>คะแนน 3.50-4.49 ความพึงพอใจอยู่ในระดับ <b>มาก</b></li>
                <li>คะแนน 2.50-3.49 ความพึงพอใจอยู่ในระดับ <b>ปานกลาง</b></li>
                <li>คะแนน 1.50-2.49 ความพึงพอใจอยู่ในระดับ <b>น้อย</b></li>
                <li>คะแนน 1.00-1.49 ความพึงพอใจอยู่ในระดับ <b>น้อยมาก</b></li>
            </ul>

            <div class="bs-old-docs"></div>
            <div class="bs-old-docs"></div>
            <br><br><br><br><br><br><br><br><br><br><br><br>

        </div>
    </div>

    <script type="text/javascript">
        function printTable(tableprint) {
            var printContents = document.getElementById(tableprint).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
@endsection