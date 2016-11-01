@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="centering text-center error-container" style="margin-top: 200px;">
                    <div class="text-center">
                        <h2 class="without-margin"><span class="text-danger"><big>ระบบได้บันทึกคำตอบของคุณไว้แล้ว</big></span></h2>
                        <h4 class="text-danger">แบบสอบถามนักเรียน-นักศึกษา-ครูอาจารย์โครงการฝึกประสบการณ์วิชาชีพครู</h4>
                    </div>
                    <div class="text-center">
                        <h3><small>Choose an option below</small></h3>
                    </div>
                    <hr>
                    <ul class="pager">
                        <li><a href="/questionCRUD">ส่งคำตอบเพิ่มอีก</a></li>
                        <li><a href="/">กลับสู่หน้าหลัก</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
