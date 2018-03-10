@include('navbar')
<div class="col-md-6 col-md-offset-3">
    <div class="login-panel panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">التسجيل </h3>
        </div>
        <div class="panel-body">
            <form role="form">
                <fieldset>
                <div class="form-group">
                <p>الاسم</p>
                        <input class="form-control" placeholder="الاسم" name="name" type="" autofocus>
                    </div>
                    <div class="form-group">
                    <p>الرقم الجامعي</p>
                        <input class="form-control" placeholder="الرقم الجامعي" name="name" type="" autofocus>
                    </div>
                    <div class="form-group">
                    <p>رقم الهويه</p>
                        <input class="form-control" placeholder="رقم الهويه" name="name" type="" autofocus>
                    </div>
                    <div class="form-group">
                    <p>رقم الجوال</p>
                        <input class="form-control" placeholder="رقم الجوال" name="name" type="" autofocus>
                    </div>
                    <div class="form-group">
                    <p>الكلية</p>
                    <select class="form-control" name="collge"  >
    <option value="" >test</option>
    </select>        
                </div>
                <div class="form-group">
                    <p>التخصص</p>
                    <select class="form-control" name="collge"  >
    <option value="" >test</option>
    </select>        
                </div>
                    <div class="form-group">
                    <p>البريد الالكتروني</p>
                        <input class="form-control" placeholder="البريد الالكتروني" name="email" type="email" autofocus>
                    </div>

                    <div class="form-group">
                    <p>كلمة المرور</p>
                        <input class="form-control" placeholder="كلمة المرور" name="password" type="password" value="">
                    </div>
                  
                    <a href="#" class="btn btn-lg btn-success btn-block">التسجيل</a>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</div>
</div>

@include('footer')