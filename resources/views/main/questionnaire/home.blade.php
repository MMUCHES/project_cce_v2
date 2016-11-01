@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <p class="col-lg-12">
            <ul class="list-group">
                <li class="list-group-item list-group-item-success"><h4>
                        ระบบแบบสอบถามนักเรียน-นักศึกษา-ครูอาจารย์โครงการฝึกประสบการณ์วิชาชีพครู</h4></li>
            </ul>
            <h4>คำชี้แจง!</h4>
            <p> แบบสอบถามนี้มี 3 ตอน ตอนที่ 1
                เป็นแบบสำรวจเจตคติของท่านที่ดีต่อวิชาชีพครูตอนที่ 2 เป็นแบบสำรวจความเชื่อ ความคิดเห็นและการกระทำของท่าน
                ตอนที่ 3
                จะเป็นการแสดงความคิดเห็นอื่นๆจำนวนทั้งสิ้น 3
                หน้าผลการสอบของท่านจะนำมาประมวลผลเป็นภาพรวมมิได้นำเสนอและเป็นรายบุคคลจึงขอให้ท่านออกความคิดเห็น
                ความเชื่อ
                และความรู้สึกที่เป็นจริงของท่านผู้เขียนขึ้น
            </p>

            <ul style="list-style-type: none;">
                <li><b>ระดับคะแนนความพึงพอใจ</b></li>
                <li>&nbsp;&nbsp; ระดับ 5 = ความพึงพอใจอยู่ในระดับ <b>มากที่สุด</b></li>
                <li>&nbsp;&nbsp; ระดับ 4 = ความพึงพอใจอยู่ในระดับ <b>มาก</b></li>
                <li>&nbsp;&nbsp; ระดับ 3 = ความพึงพอใจอยู่ในระดับ <b>ปานกลาง</b></li>
                <li>&nbsp;&nbsp; ระดับ 2 = ความพึงพอใจอยู่ในระดับ <b>น้อย</b></li>
                <li>&nbsp;&nbsp; ระดับ 1 = ความพึงพอใจอยู่ในระดับ <b>น้อยมาก</b></li>
            </ul>
            <ul class="list-group">
                <li class="list-group-item list-group-item-default">
                    <h5><b>ทำแบบสอบถาม : </b>แบบสอบถามนักเรียน-นักศึกษา-ครูอาจารย์โครงการฝึกประสบการณ์วิชาชีพครู&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/questionCRUD">
                            <button type="button" class="btn btn-danger">ทำแบบสอบถาม <i class="fa fa-long-arrow-right"
                                                                                        aria-hidden="true"></i></button>
                        </a>
                    </h5>
                </li>
            </ul>
        </div>
    </div>
    </div>
@endsection
