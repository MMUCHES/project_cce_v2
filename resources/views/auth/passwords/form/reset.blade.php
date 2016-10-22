<!--Form New Password-->

<div class="form-group">
    <label for="email" class="col-md-4 control-label">อีเมล</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}">
    </div>
</div>

<div class="form-group">
    <label for="password" class="col-md-4 control-label">รหัสผ่านใหม่</label>
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
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-refresh"></i> Reset Password
        </button>
    </div>
</div>