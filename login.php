<?php 
include 'navbar.html';
?>
<div class="col-md-6 col-md-offset-3">
    <div class="login-panel panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">تسجيل الدخول</h3>
        </div>
        <div class="panel-body">
            <form role="form">
                <fieldset>
                    <div class="form-group">
                        <input class="form-control" placeholder="اسم المستخدم" name="email" type="email" autofocus>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="كلمة المرور" name="password" type="password" value="">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input name="remember" type="checkbox" value="Remember Me">تذكرني
                        </label>
                    </div>
                    <!-- Change this to a button or input when using this as a form -->
                    <a href="index.html" class="btn btn-lg btn-success btn-block">تسجيل الدخول</a>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</div>
</div>

<?php 
include 'footer.html';
?>
