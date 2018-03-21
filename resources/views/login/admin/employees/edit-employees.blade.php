
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
تعديل بيانات موظف 
                        </div>
                        <div class="panel-body">
                        <div class="col-lg-12">  
 
<form action="" method="post">

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">الاسم  </label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="name" value="" >
    </div>
    <label class="col-sm-2 col-form-label"> رقم الهوية </label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="n_id" value="" >
    </div>
    </div>



    <div class="form-group row">
    <label class="col-sm-2 col-form-label">البريد الالكتروني  </label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="email" value="" >
    </div>
    <label class="col-sm-2 col-form-label"> رقم الجوال </label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="phone" value="" >
    </div>
    </div>



    <div class="form-group row">
    <label class="col-sm-2 col-form-label">كلمة المرور  </label>
    <div class="col-sm-4">
    <input type="password" class="form-control" name="password" >
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
