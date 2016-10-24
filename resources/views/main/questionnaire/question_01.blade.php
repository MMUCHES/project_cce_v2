<!-- questionnaire1 -->

<div class="form-inline">
    <label>กรอกรหัสนิสิต:</label>
    <input type="text" name="usersid" class="form-control">

    <label>กรอกชื่อ สกุล:</label>
    <input type="text" name="name" class="form-control">

    <label>กรอกสาขา:</label>
    <input type="text" name="branch" class="form-control">
</div>

<p>
<div class="bs-callout bs-line bs-callout-info">คำชี้แจง! แบบสอบถามนี้มี 3 ตอน ตอนที่ 1
    เป็นแบบสำรวจเจตคติของท่านที่ดีต่อวิชาชีพครูตอนที่ 2 เป็นแบบสำรวจความเชื่อ ความคิดเห็นและการกระทำของท่าน ตอนที่ 3
    จะเป็นการแสดงความคิดเห็นอื่นๆจำนวนทั้งสิ้น 3
    หน้าผลการสอบของท่านจะนำมาประมวลผลเป็นภาพรวมมิได้นำเสนอและเป็นรายบุคคลจึงขอให้ท่านออกความคิดเห็น ความเชื่อ
    และความรู้สึกที่เป็นจริงของท่านผู้เขียนขึ้น
</div>

<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th colspan="2" style="text-align: left">
                ตอนที่ 1 การเข้าร่วมโครงการฯช่วยให้ท่านมีความรู้ความเข้าใจและประสบการณ์ในประเด็นต่อไปนี้อย่างไร
            </th>
            <th colspan="5" style="text-align: center">ระดับความชอบ ความสนใจ</th>
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
        <tr>
            <td>1.1</td>
            <td style="text-align: left">ฉันรู้สึกเฉยๆกับการประกอบวิชาชีพครู</td>
            <td>{!! Form::radio('radio_1_1', '1') !!}</td>
            <td>{!! Form::radio('radio_1_1', '2') !!}</td>
            <td>{!! Form::radio('radio_1_1', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_1', '4') !!}</td>
            <td>{!! Form::radio('radio_1_1', '5') !!}</td>
        </tr>
        <tr>
            <td>1.2</td>
            <td style="text-align: left">งานนครูเป็นงานที่ท้าทาย</td>
            <td>{!! Form::radio('radio_1_2', '1') !!}</td>
            <td>{!! Form::radio('radio_1_2', '2') !!}</td>
            <td>{!! Form::radio('radio_1_2', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_2', '4') !!}</td>
            <td>{!! Form::radio('radio_1_2', '5') !!}</td>
        </tr>
        <tr>
            <td>1.3</td>
            <td style="text-align: left">ฉันรักอาชีพครู</td>
            <td>{!! Form::radio('radio_1_3', '1') !!}</td>
            <td>{!! Form::radio('radio_1_3', '2') !!}</td>
            <td>{!! Form::radio('radio_1_3', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_3', '4') !!}</td>
            <td>{!! Form::radio('radio_1_3', '5') !!}</td>
        </tr>
        <tr>
            <td>1.4</td>
            <td style="text-align: left">คุณภาพการศึกษาและการเรียนรู้ยุค</td>
            <td>{!! Form::radio('radio_1_4', '1') !!}</td>
            <td>{!! Form::radio('radio_1_4', '2') !!}</td>
            <td>{!! Form::radio('radio_1_4', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_4', '4') !!}</td>
            <td>{!! Form::radio('radio_1_4', '5') !!}</td>
        </tr>
        <tr>
            <td>1.5</td>
            <td style="text-align: left">ความสุขของฉันก็คือการประกอบอาชีพครู</td>
            <td>{!! Form::radio('radio_1_5', '1') !!}</td>
            <td>{!! Form::radio('radio_1_5', '2') !!}</td>
            <td>{!! Form::radio('radio_1_5', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_5', '4') !!}</td>
            <td>{!! Form::radio('radio_1_5', '5') !!}</td>
        </tr>
        <tr>
            <td>1.6</td>
            <td style="text-align: left">ฉันคนหนึ่งละจะไม่ให้ใครมาลบหลู่อาชีพครู</td>
            <td>{!! Form::radio('radio_1_6', '1') !!}</td>
            <td>{!! Form::radio('radio_1_6', '2') !!}</td>
            <td>{!! Form::radio('radio_1_6', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_6', '4') !!}</td>
            <td>{!! Form::radio('radio_1_6', '5') !!}</td>
        </tr>
        <tr>
            <td>1.7</td>
            <td style="text-align: left">ฉันคนนึงละที่จะไม่ประกอบอาชีพครู</td>
            <td>{!! Form::radio('radio_1_7', '1') !!}</td>
            <td>{!! Form::radio('radio_1_7', '2') !!}</td>
            <td>{!! Form::radio('radio_1_7', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_7', '4') !!}</td>
            <td>{!! Form::radio('radio_1_7', '5') !!}</td>
        </tr>
        <tr>
            <td>1.8</td>
            <td style="text-align: left">งานครูเป็นงานที่น่าสรรเสริญ</td>
            <td>{!! Form::radio('radio_1_8', '1') !!}</td>
            <td>{!! Form::radio('radio_1_8', '2') !!}</td>
            <td>{!! Form::radio('radio_1_8', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_8', '4') !!}</td>
            <td>{!! Form::radio('radio_1_8', '5') !!}</td>
        </tr>
        <tr>
            <td>1.9</td>
            <td style="text-align: left">ฉันรู้สึกภาคภูมิใจที่จะบอกใครๆว่าฉันเป็น</td>
            <td>{!! Form::radio('radio_1_9', '1') !!}</td>
            <td>{!! Form::radio('radio_1_9', '2') !!}</td>
            <td>{!! Form::radio('radio_1_9', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_9', '4') !!}</td>
            <td>{!! Form::radio('radio_1_9', '5') !!}</td>
        </tr>
        <tr>
            <td>1.10</td>
            <td style="text-align: left">ฉันลำบากใจที่บอกใครๆว่าฉันเป็นครู
            </td>
            <td>{!! Form::radio('radio_1_10', '1') !!}</td>
            <td>{!! Form::radio('radio_1_10', '2') !!}</td>
            <td>{!! Form::radio('radio_1_10', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_10', '4') !!}</td>
            <td>{!! Form::radio('radio_1_10', '5') !!}</td>
        </tr>
        <tr>
            <td>1.11</td>
            <td style="text-align: left">
                อาชีพฉันเป็นอาชีพที่ก้าวหน้า
            </td>
            <td>{!! Form::radio('radio_1_11', '1') !!}</td>
            <td>{!! Form::radio('radio_1_11', '2') !!}</td>
            <td>{!! Form::radio('radio_1_11', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_11', '4') !!}</td>
            <td>{!! Form::radio('radio_1_11', '5') !!}</td>
        </tr>
        <tr>
            <td>1.12</td>
            <td style="text-align: left">
                ฉันรู้สึกผิดหวังที่ต้องมาประกอบอาชีพครู
            </td>
            <td>{!! Form::radio('radio_1_12', '1') !!}</td>
            <td>{!! Form::radio('radio_1_12', '2') !!}</td>
            <td>{!! Form::radio('radio_1_12', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_12', '4') !!}</td>
            <td>{!! Form::radio('radio_1_12', '5') !!}</td>
        </tr>
        <tr>
            <td>1.13</td>
            <td style="text-align: left">อาชีพครูเป็นอาชีพสุดท้ายที่ฉันนึกถึง</td>
            <td>{!! Form::radio('radio_1_13', '1') !!}</td>
            <td>{!! Form::radio('radio_1_13', '2') !!}</td>
            <td>{!! Form::radio('radio_1_13', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_13', '4') !!}</td>
            <td>{!! Form::radio('radio_1_13', '5') !!}</td>
        </tr>
        <tr>
            <td>1.14</td>
            <td style="text-align: left">งานครูเป็นงานที่จุกจิก
            </td>
            <td>{!! Form::radio('radio_1_14', '1') !!}</td>
            <td>{!! Form::radio('radio_1_14', '2') !!}</td>
            <td>{!! Form::radio('radio_1_14', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_14', '4') !!}</td>
            <td>{!! Form::radio('radio_1_14', '5') !!}</td>
        </tr>
        <tr>
            <td>1.15</td>
            <td style="text-align: left">อาชีพครูเป็นอาชีพที่ฉันเลือก</td>
            <td>{!! Form::radio('radio_1_15', '1') !!}</td>
            <td>{!! Form::radio('radio_1_15', '2') !!}</td>
            <td>{!! Form::radio('radio_1_15', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_15', '4') !!}</td>
            <td>{!! Form::radio('radio_1_15', '5') !!}</td>
        </tr>
        <tr>
            <td>1.16</td>
            <td style="text-align: left">
                งานครูเป็นงานหนัก
            </td>
            <td>{!! Form::radio('radio_1_16', '1') !!}</td>
            <td>{!! Form::radio('radio_1_16', '2') !!}</td>
            <td>{!! Form::radio('radio_1_16', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_16', '4') !!}</td>
            <td>{!! Form::radio('radio_1_16', '5') !!}</td>
        </tr>
        <tr>
            <td>1.17</td>
            <td style="text-align: left">
                ฉันอยากที่จะสนับสนุนให้คนมาประกอบอาชีพครู
            </td>
            <td>{!! Form::radio('radio_1_17', '1') !!}</td>
            <td>{!! Form::radio('radio_1_17', '2') !!}</td>
            <td>{!! Form::radio('radio_1_17', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_17', '4') !!}</td>
            <td>{!! Form::radio('radio_1_17', '5') !!}</td>
        </tr>
        <tr>
            <td>1.18</td>
            <td style="text-align: left">
                ฉันรู้สึกท้อแท้เมื่อนึกถึงภาระของครู
            </td>
            <td>{!! Form::radio('radio_1_18', '1') !!}</td>
            <td>{!! Form::radio('radio_1_18', '2') !!}</td>
            <td>{!! Form::radio('radio_1_18', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_18', '4') !!}</td>
            <td>{!! Form::radio('radio_1_18', '5') !!}</td>
        </tr>
        <tr>
            <td>1.19</td>
            <td style="text-align: left">
                อาชีพครูมีความก้าวหน้าพอกับอาชีพอื่น
            </td>
            <td>{!! Form::radio('radio_1_19', '1') !!}</td>
            <td>{!! Form::radio('radio_1_19', '2') !!}</td>
            <td>{!! Form::radio('radio_1_19', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_19', '4') !!}</td>
            <td>{!! Form::radio('radio_1_19', '5') !!}</td>
        </tr>
        <tr>
            <td>1.20</td>
            <td style="text-align: left">
                รางวัลชีวิตที่ฉันได้ก็คือการเป็นครู
            </td>
            <td>{!! Form::radio('radio_1_20', '1') !!}</td>
            <td>{!! Form::radio('radio_1_20', '2') !!}</td>
            <td>{!! Form::radio('radio_1_20', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_20', '4') !!}</td>
            <td>{!! Form::radio('radio_1_20', '5') !!}</td>
        </tr>
        <tr>
            <td>1.21</td>
            <td style="text-align: left">
                งานครู้ก็งั้นๆไม่เห็นจะมีอะไร
            </td>
            <td>{!! Form::radio('radio_1_21', '1') !!}</td>
            <td>{!! Form::radio('radio_1_21', '2') !!}</td>
            <td>{!! Form::radio('radio_1_21', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_21', '4') !!}</td>
            <td>{!! Form::radio('radio_1_21', '5') !!}</td>
        </tr>
        <tr>
            <td>1.22</td>
            <td style="text-align: left">
                อาชีพครูเป็นอาชีพที่ลำบาก
            </td>
            <td>{!! Form::radio('radio_1_22', '1') !!}</td>
            <td>{!! Form::radio('radio_1_22', '2') !!}</td>
            <td>{!! Form::radio('radio_1_22', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_22', '4') !!}</td>
            <td>{!! Form::radio('radio_1_22', '5') !!}</td>
        </tr>
        <tr>
            <td>1.23</td>
            <td style="text-align: left">
                วิชาชีพครูเป็นอาชีพที่ตื่นเต้น
            </td>
            <td>{!! Form::radio('radio_1_23', '1') !!}</td>
            <td>{!! Form::radio('radio_1_23', '2') !!}</td>
            <td>{!! Form::radio('radio_1_23', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_23', '4') !!}</td>
            <td>{!! Form::radio('radio_1_23', '5') !!}</td>
        </tr>
        <tr>
            <td>1.24</td>
            <td style="text-align: left">
                ฉันรู้สึกว่าอาชีพครูก็ไม่แตกต่างไปจากอาชีพอื่น
            </td>
            <td>{!! Form::radio('radio_1_24', '1') !!}</td>
            <td>{!! Form::radio('radio_1_24', '2') !!}</td>
            <td>{!! Form::radio('radio_1_24', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_24', '4') !!}</td>
            <td>{!! Form::radio('radio_1_24', '5') !!}</td>
        </tr>
        <tr>
            <td>1.25</td>
            <td style="text-align: left">
                งานครูเป็นงานที่ต้องฝึกฝน
            </td>
            <td>{!! Form::radio('radio_1_25', '1') !!}</td>
            <td>{!! Form::radio('radio_1_25', '2') !!}</td>
            <td>{!! Form::radio('radio_1_25', '3', true) !!}</td>
            <td>{!! Form::radio('radio_1_25', '4') !!}</td>
            <td>{!! Form::radio('radio_1_25', '5') !!}</td>
        </tr>
        </tbody>
    </table>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th colspan="2" style="text-align: left">
                ตอนที่ 2 การเข้าร่วมโครงการฯช่วยให้ท่านมีความรู้ความเข้าใจและประสบการณ์ในประเด็นต่อไปนี้อย่างไร
            </th>
            <th colspan="5" style="text-align: center">ระดับความชอบ ความสนใจ</th>
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
        <tr>
            <td>2.1</td>
            <td style="text-align: left">
                ฉันไม่เชื่อสิ่งใดง่ายๆ ถ้าสิ่งนั้นขาดการพิสูจน์หรือพิสูจน์ไม่ได้
            </td>
            <td>{!! Form::radio('radio_2_1', '1') !!}</td>
            <td>{!! Form::radio('radio_2_1', '2') !!}</td>
            <td>{!! Form::radio('radio_2_1', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_1', '4') !!}</td>
            <td>{!! Form::radio('radio_2_1', '5') !!}</td>
        </tr>
        <tr>
            <td>2.2</td>
            <td style="text-align: left">
                ความรู้ที่ได้จากการทดลองย่อมน่าเชื่อถือกว่าความรู้ที่ได้จากการสังเกตอย่างเดียว
            </td>
            <td>{!! Form::radio('radio_2_2', '1') !!}</td>
            <td>{!! Form::radio('radio_2_2', '2') !!}</td>
            <td>{!! Form::radio('radio_2_2', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_2', '4') !!}</td>
            <td>{!! Form::radio('radio_2_2', '5') !!}</td>
        </tr>
        <tr>
            <td>2.3</td>
            <td style="text-align: left">
                ถ้ามีทางเลือกสองทางที่ฉันไม่ทราบว่าทางใดถูกต้องฉันจะเลือกทางหนึ่ง
            </td>
            <td>{!! Form::radio('radio_2_3', '1') !!}</td>
            <td>{!! Form::radio('radio_2_3', '2') !!}</td>
            <td>{!! Form::radio('radio_2_3', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_3', '4') !!}</td>
            <td>{!! Form::radio('radio_2_3', '5') !!}</td>
        </tr>
        <tr>
            <td>2.4</td>
            <td style="text-align: left">
                เมื่อไหร่ก็ตามที่ฉันตอบคำถามฉันมีเหตุผลสนับสนุนคำตอบนั้น
            </td>
            <td>{!! Form::radio('radio_2_4', '1') !!}</td>
            <td>{!! Form::radio('radio_2_4', '2') !!}</td>
            <td>{!! Form::radio('radio_2_4', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_4', '4') !!}</td>
            <td>{!! Form::radio('radio_2_4', '5') !!}</td>
        </tr>
        <tr>
            <td>2.5</td>
            <td style="text-align: left">
                เมื่อฉันสงสัยหรือมีปัญหากันต้องศึกษาค้นคว้าด้วยตนเอง
            </td>
            <td>{!! Form::radio('radio_2_5', '1') !!}</td>
            <td>{!! Form::radio('radio_2_5', '2') !!}</td>
            <td>{!! Form::radio('radio_2_5', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_5', '4') !!}</td>
            <td>{!! Form::radio('radio_2_5', '5') !!}</td>
        </tr>
        <tr>
            <td>2.6</td>
            <td style="text-align: left">
                สำนักจะติดตามข่าวสารเกี่ยวกับปรากฏการณ์แผ่นธรรมชาติหรือเหตุการณ์ต่างๆอยู่เสมอ
            </td>
            <td>{!! Form::radio('radio_2_6', '1') !!}</td>
            <td>{!! Form::radio('radio_2_6', '2') !!}</td>
            <td>{!! Form::radio('radio_2_6', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_6', '4') !!}</td>
            <td>{!! Form::radio('radio_2_6', '5') !!}</td>
        </tr>
        <tr>
            <td>2.7</td>
            <td style="text-align: left">
                ฉันคิดว่ายังมีความรู้ต่างๆอีกมากมายที่ฉันไม่รู้มาก่อน
            </td>
            <td>{!! Form::radio('radio_2_7', '1') !!}</td>
            <td>{!! Form::radio('radio_2_7', '2') !!}</td>
            <td>{!! Form::radio('radio_2_7', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_7', '4') !!}</td>
            <td>{!! Form::radio('radio_2_7', '5') !!}</td>
        </tr>
        <tr>
            <td>2.8</td>
            <td style="text-align: left">
                แปลฉันชอบซักถามปัญหาที่ฉันอยากรู้จักบุคคลต่างๆอยู่เสมอ
            </td>
            <td>{!! Form::radio('radio_2_8', '1') !!}</td>
            <td>{!! Form::radio('radio_2_8', '2') !!}</td>
            <td>{!! Form::radio('radio_2_8', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_8', '4') !!}</td>
            <td>{!! Form::radio('radio_2_8', '5') !!}</td>
        </tr>
        <tr>
            <td>2.9</td>
            <td style="text-align: left">
                ฉันคิดว่าการค้นคว้าด้วยตัวเองมีความสำคัญ
            </td>
            <td>{!! Form::radio('radio_2_9', '1') !!}</td>
            <td>{!! Form::radio('radio_2_9', '2') !!}</td>
            <td>{!! Form::radio('radio_2_9', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_9', '4') !!}</td>
            <td>{!! Form::radio('radio_2_9', '5') !!}</td>
        </tr>
        <tr>
            <td>2.10</td>
            <td style="text-align: left">
                เมื่อฉันเสนอความคิดเห็นต่อที่หรือกลุ่มเพื่อนฉันไม่ชอบให้เพื่อนมาวิจารณ์ความคิดถึงของฉัน
            </td>
            <td>{!! Form::radio('radio_2_10', '1') !!}</td>
            <td>{!! Form::radio('radio_2_10', '2') !!}</td>
            <td>{!! Form::radio('radio_2_10', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_10', '4') !!}</td>
            <td>{!! Form::radio('radio_2_10', '5') !!}</td>
        </tr>
        <tr>
            <td>2.11</td>
            <td style="text-align: left">
                หากสิ่งทุกอย่างทำได้ผลต่างไปจากคนอื่นที่ทำในสิ่งเดียว
                การฉันจะยอมทดลองทำสิ่งนั้นซ้ำอีกเพื่อตรวจสอบให้แน่ใจถึงผลที่เกิดขึ้น
            </td>
            <td>{!! Form::radio('radio_2_11', '1') !!}</td>
            <td>{!! Form::radio('radio_2_11', '2') !!}</td>
            <td>{!! Form::radio('radio_2_11', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_11', '4') !!}</td>
            <td>{!! Form::radio('radio_2_11', '5') !!}</td>
        </tr>
        <tr>
            <td>2.12</td>
            <td style="text-align: left">
                ฉันรู้สึกยินดีหากได้ฟังคำแนะนำจากเพื่อนหรือบุคคลอื่น
            </td>
            <td>{!! Form::radio('radio_2_12', '1') !!}</td>
            <td>{!! Form::radio('radio_2_12', '2') !!}</td>
            <td>{!! Form::radio('radio_2_12', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_12', '4') !!}</td>
            <td>{!! Form::radio('radio_2_12', '5') !!}</td>
        </tr>
        <tr>
            <td>2.13</td>
            <td style="text-align: left">
                แผ่นสามารถเปลี่ยนความคิดได้หากพบว่าสิ่งนั้นฉันคิดไม่ถูกต้อง
            </td>
            <td>{!! Form::radio('radio_2_13', '1') !!}</td>
            <td>{!! Form::radio('radio_2_13', '2') !!}</td>
            <td>{!! Form::radio('radio_2_13', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_13', '4') !!}</td>
            <td>{!! Form::radio('radio_2_13', '5') !!}</td>
        </tr>
        <tr>
            <td>2.14</td>
            <td style="text-align: left">
                ฉันจะไม่ยอมรับแนวคิดของบุคคลที่ไม่ใช่บุคคลในวงการวิทยาศาสตร์
            </td>
            <td>{!! Form::radio('radio_2_14', '1') !!}</td>
            <td>{!! Form::radio('radio_2_14', '2') !!}</td>
            <td>{!! Form::radio('radio_2_14', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_14', '4') !!}</td>
            <td>{!! Form::radio('radio_2_14', '5') !!}</td>
        </tr>
        <tr>
            <td>2.15</td>
            <td style="text-align: left">
                หลักการและทฤษฎีต่างๆความวิทยาศาสตร์หรือว่าถูกต้องสมบูรณ์และเปลี่ยนแปลงไม่ได้
            </td>
            <td>{!! Form::radio('radio_2_15', '1') !!}</td>
            <td>{!! Form::radio('radio_2_15', '2') !!}</td>
            <td>{!! Form::radio('radio_2_15', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_15', '4') !!}</td>
            <td>{!! Form::radio('radio_2_15', '5') !!}</td>
        </tr>
        <tr>
            <td>2.16</td>
            <td style="text-align: left">
                การแก้ปัญหาด้วยตัวเองย่อมดีกว่าการรับฟังความคิดเห็นของผู้อื่น
            </td>
            <td>{!! Form::radio('radio_2_16', '1') !!}</td>
            <td>{!! Form::radio('radio_2_16', '2') !!}</td>
            <td>{!! Form::radio('radio_2_16', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_16', '4') !!}</td>
            <td>{!! Form::radio('radio_2_16', '5') !!}</td>
        </tr>
        <tr>
            <td>2.17</td>
            <td style="text-align: left">
                ฉันไม่ชอบให้ใครมาวิจารณ์ในงานของฉัน
            </td>
            <td>{!! Form::radio('radio_2_17', '1') !!}</td>
            <td>{!! Form::radio('radio_2_17', '2') !!}</td>
            <td>{!! Form::radio('radio_2_17', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_17', '4') !!}</td>
            <td>{!! Form::radio('radio_2_17', '5') !!}</td>
        </tr>
        <tr>
            <td>2.18</td>
            <td style="text-align: left">
                คิดว่าคนเราไม่ควรวิจารณ์คนอื่น
            </td>
            <td>{!! Form::radio('radio_2_18', '1') !!}</td>
            <td>{!! Form::radio('radio_2_18', '2') !!}</td>
            <td>{!! Form::radio('radio_2_18', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_18', '4') !!}</td>
            <td>{!! Form::radio('radio_2_18', '5') !!}</td>
        </tr>
        <tr>
            <td>2.19</td>
            <td style="text-align: left">
                เมื่อเพื่อนเพื่อนร่วมงานเกิดความขัดแย้งกันจะเข้าข้างคนที่ฉันสนิทที่สุด
            </td>
            <td>{!! Form::radio('radio_2_19', '1') !!}</td>
            <td>{!! Form::radio('radio_2_19', '2') !!}</td>
            <td>{!! Form::radio('radio_2_19', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_19', '4') !!}</td>
            <td>{!! Form::radio('radio_2_19', '5') !!}</td>
        </tr>
        <tr>
            <td>2.20</td>
            <td style="text-align: left">
                ฉันคิดว่าการรับฟังแนวคิดหรือความรู้นอกเหนือจากที่ตัวเองอยู่เป็นสิ่งที่น่าสนใจตลก
            </td>
            <td>{!! Form::radio('radio_2_20', '1') !!}</td>
            <td>{!! Form::radio('radio_2_20', '2') !!}</td>
            <td>{!! Form::radio('radio_2_20', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_20', '4') !!}</td>
            <td>{!! Form::radio('radio_2_20', '5') !!}</td>
        </tr>
        <tr>
            <td>2.21</td>
            <td style="text-align: left">
                เป็นการเสียเวลาโดยเปล่าประโยชน์ในการรับฟังความคิดเห็น
            </td>
            <td>{!! Form::radio('radio_2_21', '1') !!}</td>
            <td>{!! Form::radio('radio_2_21', '2') !!}</td>
            <td>{!! Form::radio('radio_2_21', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_21', '4') !!}</td>
            <td>{!! Form::radio('radio_2_21', '5') !!}</td>
        </tr>
        <tr>
            <td>2.22</td>
            <td style="text-align: left">
                ฉันเชื่อว่าชีวิตคนเราจะต้องดำเนินไปตามโชคชะตา
            </td>
            <td>{!! Form::radio('radio_2_22', '1') !!}</td>
            <td>{!! Form::radio('radio_2_22', '2') !!}</td>
            <td>{!! Form::radio('radio_2_22', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_22', '4') !!}</td>
            <td>{!! Form::radio('radio_2_22', '5') !!}</td>
        </tr>
        <tr>
            <td>2.23</td>
            <td style="text-align: left">
                ฉันเชื่อว่าสิ่งที่ฉันนอนฝันสักวันจะเป็นจริง
            </td>
            <td>{!! Form::radio('radio_2_23', '1') !!}</td>
            <td>{!! Form::radio('radio_2_23', '2') !!}</td>
            <td>{!! Form::radio('radio_2_23', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_23', '4') !!}</td>
            <td>{!! Form::radio('radio_2_23', '5') !!}</td>
        </tr>
        <tr>
            <td>2.24</td>
            <td style="text-align: left">
                ฉันเชื่อว่าถ้าดาวหางปรากฏขึ้นจะทำให้เกิดภัยพิบัติ
            </td>
            <td>{!! Form::radio('radio_2_24', '1') !!}</td>
            <td>{!! Form::radio('radio_2_24', '2') !!}</td>
            <td>{!! Form::radio('radio_2_24', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_24', '4') !!}</td>
            <td>{!! Form::radio('radio_2_24', '5') !!}</td>
        </tr>
        <tr>
            <td>2.25</td>
            <td style="text-align: left">
                ผมเชื่อว่าความสำเร็จของคนเราบางครั้งก็มาจากโชคและดวง
            </td>
            <td>{!! Form::radio('radio_2_25', '1') !!}</td>
            <td>{!! Form::radio('radio_2_25', '2') !!}</td>
            <td>{!! Form::radio('radio_2_25', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_25', '4') !!}</td>
            <td>{!! Form::radio('radio_2_25', '5') !!}</td>
        </tr>
        <tr>
            <td>2.26</td>
            <td style="text-align: left">
                ฉันเชื่อว่าคนเราก่อนเกิดเหตุร้ายมักมีลางสังหรณ์ล่วงหน้า
            </td>
            <td>{!! Form::radio('radio_2_26', '1') !!}</td>
            <td>{!! Form::radio('radio_2_26', '2') !!}</td>
            <td>{!! Form::radio('radio_2_26', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_26', '4') !!}</td>
            <td>{!! Form::radio('radio_2_26', '5') !!}</td>
        </tr>
        <tr>
            <td>2.27</td>
            <td style="text-align: left">
                ฉันคิดว่าทรัพยศาสตร์ไม่ควรค้นคว้าเรื่องพลังงานนิวเคลียร์อีกต่อไปเพราะว่าจะทำให้เราประสบความหายนะเร็วขึ้น
            </td>
            <td>{!! Form::radio('radio_2_27', '1') !!}</td>
            <td>{!! Form::radio('radio_2_27', '2') !!}</td>
            <td>{!! Form::radio('radio_2_27', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_27', '4') !!}</td>
            <td>{!! Form::radio('radio_2_27', '5') !!}</td>
        </tr>
        <tr>
            <td>2.28</td>
            <td style="text-align: left">
                ฉันเชื่อว่าวันเดือนปีที่เกิดและลายฝ่ามือของคนเราเป็นเครื่องบอกอนาคตได้
            </td>
            <td>{!! Form::radio('radio_2_28', '1') !!}</td>
            <td>{!! Form::radio('radio_2_28', '2') !!}</td>
            <td>{!! Form::radio('radio_2_28', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_28', '4') !!}</td>
            <td>{!! Form::radio('radio_2_28', '5') !!}</td>
        </tr>
        <tr>
            <td>2.9</td>
            <td style="text-align: left">
                ฉันรู้สึกว่าความเชื่อของคนรุ่นก่อนเป็นที่ยอมรับกันมานานแล้วย่อมถูกต้องเสมอนะ
            </td>
            <td>{!! Form::radio('radio_2_29', '1') !!}</td>
            <td>{!! Form::radio('radio_2_29', '2') !!}</td>
            <td>{!! Form::radio('radio_2_29', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_29', '4') !!}</td>
            <td>{!! Form::radio('radio_2_29', '5') !!}</td>
        </tr>
        <tr>
            <td>2.30</td>
            <td style="text-align: left">
                กำจัดบันทึกผลการทดลองที่ฉันสังเกตได้อย่างตรงไปตรงมาแม้ผลการทดลองจะไม่เป็นที่พอใจของฉัน
            </td>
            <td>{!! Form::radio('radio_2_30', '1') !!}</td>
            <td>{!! Form::radio('radio_2_30', '2') !!}</td>
            <td>{!! Form::radio('radio_2_30', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_30', '4') !!}</td>
            <td>{!! Form::radio('radio_2_30', '5') !!}</td>
        </tr>
        <tr>
            <td>2.31</td>
            <td style="text-align: left">
                ถ้าผลการปฏิบัติของฉันไม่ตรงตำราหรือแบบเรียนฉันจะรายงานผลให้ตรงให้ตรงกับผลที่อยู่ในตำราเรียนนั้น
            </td>
            <td>{!! Form::radio('radio_2_31', '1') !!}</td>
            <td>{!! Form::radio('radio_2_31', '2') !!}</td>
            <td>{!! Form::radio('radio_2_31', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_31', '4') !!}</td>
            <td>{!! Form::radio('radio_2_31', '5') !!}</td>
        </tr>
        <tr>
            <td>2.32</td>
            <td style="text-align: left">
                ฉันไม่ชอบทำงานกลุ่มเพราะไม่ชอบทำงานร่วมกับผู้อื่น
            </td>
            <td>{!! Form::radio('radio_2_32', '1') !!}</td>
            <td>{!! Form::radio('radio_2_32', '2') !!}</td>
            <td>{!! Form::radio('radio_2_32', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_32', '4') !!}</td>
            <td>{!! Form::radio('radio_2_32', '5') !!}</td>
        </tr>
        <tr>
            <td>2.33</td>
            <td style="text-align: left">
                ฉันมักจะทดลองในหลายครั้งเพื่อให้เกิดความแน่ใจก่อนที่จะสรุปผล
            </td>
            <td>{!! Form::radio('radio_2_33', '1') !!}</td>
            <td>{!! Form::radio('radio_2_33', '2') !!}</td>
            <td>{!! Form::radio('radio_2_33', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_33', '4') !!}</td>
            <td>{!! Form::radio('radio_2_33', '5') !!}</td>
        </tr>
        <tr>
            <td>2.34</td>
            <td style="text-align: left">
                ฉันมักจะเขียนผลการทดลองของฉันจากผลการทดลองของฉันไม่เหมือนเพื่อนคนอื่น
            </td>
            <td>{!! Form::radio('radio_2_34', '1') !!}</td>
            <td>{!! Form::radio('radio_2_34', '2') !!}</td>
            <td>{!! Form::radio('radio_2_34', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_34', '4') !!}</td>
            <td>{!! Form::radio('radio_2_34', '5') !!}</td>
        </tr>
        <tr>
            <td>2.35</td>
            <td style="text-align: left">
                ฉันคิดว่าผลการทดลองขอนักเรียนในกลุ่มต่างๆไม่เหมือนกันผมจะทดลองนั้นใหม่อีกครั้ง
            </td>
            <td>{!! Form::radio('radio_2_35', '1') !!}</td>
            <td>{!! Form::radio('radio_2_35', '2') !!}</td>
            <td>{!! Form::radio('radio_2_35', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_35', '4') !!}</td>
            <td>{!! Form::radio('radio_2_35', '5') !!}</td>
        </tr>
        <tr>
            <td>2.36</td>
            <td style="text-align: left">
                ฉันคิดว่าการรับฟังข่าวสารจากแหล่งใดข่าวสารนั้นอาจจะไม่ถูกต้อง
            </td>
            <td>{!! Form::radio('radio_2_36', '1') !!}</td>
            <td>{!! Form::radio('radio_2_36', '2') !!}</td>
            <td>{!! Form::radio('radio_2_36', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_36', '4') !!}</td>
            <td>{!! Form::radio('radio_2_36', '5') !!}</td>
        </tr>
        <tr>
            <td>2.37</td>
            <td style="text-align: left">
                ฉันคิดว่านักวิทยาศาสตร์สามารถให้คำตอบได้ทันเพียงได้ฟังข้อมูลบางส่วน
            </td>
            <td>{!! Form::radio('radio_2_37', '1') !!}</td>
            <td>{!! Form::radio('radio_2_37', '2') !!}</td>
            <td>{!! Form::radio('radio_2_37', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_37', '4') !!}</td>
            <td>{!! Form::radio('radio_2_37', '5') !!}</td>
        </tr>
        <tr>
            <td>2.38</td>
            <td style="text-align: left">
                แผ่นมาร์คเชื่อในสิ่งที่ผู้สูงอายุบอกเพราะว่าท่านมีประสบการณ์มากกว่า
            </td>
            <td>{!! Form::radio('radio_2_38', '1') !!}</td>
            <td>{!! Form::radio('radio_2_38', '2') !!}</td>
            <td>{!! Form::radio('radio_2_38', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_38', '4') !!}</td>
            <td>{!! Form::radio('radio_2_38', '5') !!}</td>
        </tr>
        <tr>
            <td>2.39</td>
            <td style="text-align: left">
                ฉันคิดว่าในการตอบปัญหาที่ดีที่สุดเสียเวลาน้อยที่สุดไม่จำเป็นต้องใช้หลายวิธี
            </td>
            <td>{!! Form::radio('radio_2_39', '1') !!}</td>
            <td>{!! Form::radio('radio_2_39', '2') !!}</td>
            <td>{!! Form::radio('radio_2_39', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_39', '4') !!}</td>
            <td>{!! Form::radio('radio_2_39', '5') !!}</td>
        </tr>
        <tr>
            <td>2.40</td>
            <td style="text-align: left">
                ผมรู้สึกเบื่อที่จะทำอะไรไปหลายครั้งก่อนที่จะพูดอะไรสักอย่าง
            </td>
            <td>{!! Form::radio('radio_2_40', '1') !!}</td>
            <td>{!! Form::radio('radio_2_40', '2') !!}</td>
            <td>{!! Form::radio('radio_2_40', '3', true) !!}</td>
            <td>{!! Form::radio('radio_2_40', '4') !!}</td>
            <td>{!! Form::radio('radio_2_40', '5') !!}</td>
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
