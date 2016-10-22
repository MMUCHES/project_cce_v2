<!--Form Reset Password-->

<div class="form-group">
    <label for="email" class="col-md-4 control-label">E-Mail Address</label>
    <div class="col-md-6">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-envelope"></i> Send Password Reset Link
        </button>
    </div>
</div>
