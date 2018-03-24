
@include('login.header')
@include('login.slider') 

<div class="col-lg-12">
                    
<div class="row">
                <br>
                
<a  class="btn btn-default" onclick="goBack()"> <i class="fa fa-chevron-right" aria-hidden="true"></i> رجوع</a>

                    <h1 class="page-header"></h1>
                </div>
              
         
            <div class="panel panel-default">
                        <div class="panel-heading">
اضافة موظف جديد
                        </div>
                        <div class="panel-body">
                        <div class="col-lg-12">  
 
<form action="/add-employees" method="POST">
@csrf
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">الاسم  </label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="name" >
                                        @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
								@endif
    </div>
    <label class="col-sm-2 col-form-label"> رقم الهوية </label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="nid" >
                                        @if ($errors->has('nid'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nid') }}</strong>
                                    </span>
								@endif
    </div>
    </div>



    <div class="form-group row">
    <label class="col-sm-2 col-form-label">البريد الالكتروني  </label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="email" >
                                        @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
								@endif
    </div>
    <label class="col-sm-2 col-form-label"> رقم الجوال </label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="phone" >
                                        @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
								@endif
    </div>
    </div>



    <div class="form-group row">
    <label class="col-sm-2 col-form-label">كلمة المرور  </label>
    <div class="col-sm-4">
    <input type="password" class="form-control" name="password" >
                                        @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
								@endif
    </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">تاكيد كلمة المرور  </label>
    <div class="col-sm-4">
    <input type="password" class="form-control"  >
    </div>
    </div>


<center>
    <button type="submit" class="btn btn-success">حفظ</button>
    <button type="button" class="btn">إلغاء</button>
</center>
            </div>
            </div>
</form>

            </div>
            </div>
                    @include('login.footer')
