@include('navbar')
<div class="col-md-6 col-md-offset-3">
    <div class="login-panel panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">استعادة كلمة المرور</h3>
        </div>
        <div class="panel-body">
 		<form method="POST" action="">
 	
                 <fieldset>
                    <div class="form-group">
                        <input class="form-control" placeholder="البريد الالكتروني" name="email" type="text" autofocus>
                            
                                    <span class="invalid-feedback">
                                        <strong></strong>
                                    </span>
								
                    </div>
                    <!-- Change this to a button or input when using this as a form -->
                    <button type="submit" class="btn btn-lg btn-success btn-block">الاستمرار</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</div>
</div>

@include('footer')