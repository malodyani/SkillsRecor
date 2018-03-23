
@include('login.header')
@include('login.slider') 
            <div class="row">
            <br>
                
                <a  class="btn btn-default" onclick="goBack()"> <i class="fa fa-chevron-right" aria-hidden="true"></i> رجوع</a>
                
                                    <h1 class="page-header"></h1>
                </div>

                <div class="panel panel-default">
                        <div class="panel-heading">
                 تعديل بياناتي
                        </div>
                        <div class="panel-body">
                        <div class="col-lg-12">  
                        
<form action="/change-password" method="post">
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">كلمة المرور الحالية</label>
    <div class="col-sm-4">
    <input type="password" class="form-control" name="OldPassword" value="">
                                        @if ($errors->has('OldPassword'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('OldPassword') }}</strong>
                                    </span>
								@endif
				@if(!empty($errors->first()))
    <div class="row col-lg-12">
        <div class="alert alert-danger">
            <span>{{ $errors->first() }}</span>
        </div>
    </div>
@endif
    </div>
    </div>
		@csrf
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">كلمة المرور الجديدة</label>
    <div class="col-sm-4">
    <input type="password" class="form-control" name="NewPassword" value="" >
                                            @if ($errors->has('NewPassword'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('NewPassword') }}</strong>
                                    </span>
								@endif
    </div>
    </div>


    <div class="form-group row">
    <label class="col-sm-2 col-form-label">تأكيد كلمة المرور</label>
    <div class="col-sm-4">
    <input type="password" class="form-control"  id="confirm_password" value="" >
    </div>
    </div>


        </div>


    <center>
    <div class="form-group row">
    <button type="submit" class="btn btn-success">حفظ</button>
    <button type="button" onclick="goBack()"  class="btn">إلغاء</button>
    </div>
</center>
</form>




<script>
var password = document.getElementById("password")
, confirm_password = document.getElementById("confirm_password");

function validatePassword(){
if(password.value != confirm_password.value) {
  confirm_password.setCustomValidity("كلمات المرور غير متطابقة!");
} else {
  confirm_password.setCustomValidity('');
}


password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

function show() {
    var a = document.getElementById('password');
    var b = document.getElementById('confirm_password');
    a.setAttribute('type', 'text');
    b.setAttribute('type', 'text');
}

function hide() {
        var a = document.getElementById('password');
    var b = document.getElementById('confirm_password');
    a.setAttribute('type', 'password');
    b.setAttribute('type', 'password');
}

var pwShown = 0;

document.getElementById("TogglePassword").addEventListener("click", function () {
    
    $(this).find('i').toggleClass('glyphicon glyphicon-eye-close').toggleClass('glyphicon glyphicon-eye-open');
    if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
       hide();
    }
}, false);


</script>





            </div>
            </div>
            </div>
         














            </div>
           </div>
                     
@include('login.footer')