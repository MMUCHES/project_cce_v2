<!--Form-register-->

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">ชื่อ-สกุล</label>
    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <label for="username" class="col-md-4 control-label">ชื่อผู้ใช้งาน</label>
    <div class="col-md-6">
        <input id="username" type="text" class="form-control" name="username" value="{{ old('name') }}">
    </div>
</div>

<div class="form-group">
    <label for="email" class="col-md-4 control-label">อีเมล</label>
    <div class="col-md-6">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
    </div>
</div>

<div class="form-group">
    <label for="password" class="col-md-4 control-label">สร้างรหัสผ่าน</label>
    <div class="col-md-6">
        <input id="password" type="password" class="form-control" name="password">
    </div>
</div>

<div class="form-group">
    <label for="password-confirm" class="col-md-4 control-label">ใส่รหัสผ่านอีกครั้ง</label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-warning">
            <i class="fa fa-btn fa-user"></i> สร้างบัญชี
        </button>
    </div>
</div>