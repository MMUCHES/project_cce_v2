<!-- questionnaire1 -->

<p>
<div class="table-responsive">
  
    <?php $section = 0;?>
    @foreach($questions as $q)

        <?php $section += 1; ?>
        @if($q->type == 'section')
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
                        <td><input type="radio" name="question[{{$sub->id}}][value]" value="5" checked></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @elseif($q->type =='section-varchar')
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="text-align: left">
                            ตอนที่ {{$section}} {{$q->text}}
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $index = 0; ?>
                    @foreach($q->children as $sub)
                        <?php $index += 1; ?>

                        <tr>
                            <td class="text-left">{{$section}}.{{$index}}  {{$sub->text}}</td>
                        </tr>
                        <tr>
                            <td><textarea class="form-control" rows="5" name="question[{{$sub->id}}][remark]"></textarea></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        @endif
    @endforeach
</div>
</p>


<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">ส่งแบบสอบถาม</button>
</div>
<div class="bs-old-docs"></div>
<div class="bs-old-docs"></div>
