<!--Form-login-->

<div class="form-group">
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">
            <span class="glyphicon glyphicon-user"></span>
        </span>
        <input id="username" type="text" class="form-control" name="username"
               value="{{ old('username') }}" placeholder="ชื่อผู้ใช้งาน">
    </div>
</div>

<div class="form-group">
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">
            <span class="glyphicon glyphicon-lock"></span>
        </span>
        <input id="password" type="password" class="form-control" name="password" placeholder="รหัสผ่าน">
    </div>
</div>

<div class="form-group">
    <div class="checkbox">
        <label>
            <input type="checkbox" name="remember"> คงอยู่ในระบบ
        </label>
    </div>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-warning">
        <i class="fa fa-btn fa-sign-in"></i> เข้าสู่ระบบ
    </button>
    <a class="btn btn-link" href="{{ url('/password/reset') }}">ลืมรหัสผ่านใช่หรือไม่</a>
</div>