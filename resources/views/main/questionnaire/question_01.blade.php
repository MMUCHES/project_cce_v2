<!-- questionnaire1 -->

<p>
<div class="bs-callout bs-line bs-callout-info">คำชี้แจง! แบบสอบถามนี้มี 3 ตอน ตอนที่ 1
    เป็นแบบสำรวจเจตคติของท่านที่ดีต่อวิชาชีพครูตอนที่ 2 เป็นแบบสำรวจความเชื่อ ความคิดเห็นและการกระทำของท่าน ตอนที่ 3
    จะเป็นการแสดงความคิดเห็นอื่นๆจำนวนทั้งสิ้น 3
    หน้าผลการสอบของท่านจะนำมาประมวลผลเป็นภาพรวมมิได้นำเสนอและเป็นรายบุคคลจึงขอให้ท่านออกความคิดเห็น ความเชื่อ
    และความรู้สึกที่เป็นจริงของท่านผู้เขียนขึ้น
</div>

<div class="table-responsive">

    <?php $section = 0;?>
    @foreach($questions as $q)
        <?php $section += 1; ?>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th colspan="2" style="text-align: left">
                    ตอนที่ {{$section}} {{$q->text}}
                </th>
                <th colspan="5" style="text-align: center">ระดับความคิดเห็น</th>
            </tr>
            <tr>
                <th style="width:80px">ข้อที่</th>
                <th>ข้อความ</th>
                <th style="width:50px">1</th>
                <th style="width:50px">2</th>
                <th style="width:50px">3</th>
                <th style="width:50px">4</th>
                <th style="width:50px">5</th>
            </tr>
            </thead>
            <tbody>
            <?php $index = 0; ?>
            @foreach($q->children as $sub)
                <?php $index += 1; ?>
                <tr>
                    <td>{{$section}}.{{$index}} </td>
                    <td style="text-align: left">{{$sub->text}}</td>
                    <td><input type="radio" name="question[{{$sub->id}}][value]" value="1"></td>
                    <td><input type="radio" name="question[{{$sub->id}}][value]" value="2"></td>
                    <td><input type="radio" name="question[{{$sub->id}}][value]" value="3"></td>
                    <td><input type="radio" name="question[{{$sub->id}}][value]" value="4"></td>
                    <td><input type="radio" name="question[{{$sub->id}}][value]" value="5"></td>
                </tr>
            @endforeach

            </tbody>
        </table>

    @endforeach
    <table class="table table-bordered">
        <thead>
        <tr>
            <th colspan="2" style="text-align: left">
                ตอนที่ 2 การเข้าร่วมโครงการฯช่วยให้ท่านมีความรู้ความเข้าใจและประสบการณ์ในประเด็นต่อไปนี้อย่างไร
            </th>
            <th colspan="5" style="text-align: center">ระดับความคิดเห็น</th>
        </tr>

        </tbody>
    </table>
</div>
</p>
<p>
<table class="table table-bordered">
    <thead>
    <th colspan="2" style="text-align: left">
        ตอนที่ 3 จุดเด่นและจุดที่ควรพัฒนาของโครงการฯ
    </th>
    <tr>
        <th>จุดเด่น</th>
        <th>จุดที่ควรพัฒนา</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{ Form::textarea('comment_1', null, ['size' => '30x5','class' => 'form-control']) }}</td>
        <td>{{ Form::textarea('comment_2', null, ['size' => '30x5','class' => 'form-control']) }}</td>
    </tr>
    </tbody>
</table>
<table class="table table-bordered">
    <thead>
    <th colspan="2" style="text-align: left">
        2.ปัญหาและอุปสรรค
    </th>
    </thead>
    <tbody>
    <tr>
        <td>{{ Form::textarea('comment_3', null, ['size' => '30x5','class' => 'form-control']) }}</td>
    </tr>
    </tbody>
</table>
<table class="table table-bordered">
    <thead>
    <th colspan="2" style="text-align: left">
        3.ข้อเสนอแนะอื่นๆ
    </th>
    </thead>
    <tbody>
    <tr>
        <td>{{ Form::textarea('comment_4', null, ['size' => '30x5','class' => 'form-control']) }}</td>
    </tr>
    </tbody>
</table>
</p>


<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">บันทึก</button>
</div>
<div class="bs-old-docs"></div>
