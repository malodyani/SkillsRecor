@include('navbar')
<div class="col-md-6 col-md-offset-3">
    <div class="login-panel panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">تسجيل الدخول</h3>
        </div>
        <div class="panel-body">
 		<form method="POST" action="{{ route('login') }}">
 		@csrf
                 <fieldset>
                    <div class="form-group">
                        <input class="form-control" placeholder="رقم الهوية" name="nid" type="text" autofocus>
                                @if ($errors->has('nid'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nid') }}</strong>
                                    </span>
								@endif
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="كلمة المرور" name="password" type="password" value="">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
								@endif
                    </div>
                    <!-- Change this to a button or input when using this as a form -->
                    <button type="submit" class="btn btn-lg btn-success btn-block">تسجيل الدخول</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</div>
</div>

@include('footer')