
@include('login.header')
@include('login.slider') 
            <div class="row">
            <br>
                
<a  class="btn btn-default" onclick="goBack()"> <i class="fa fa-chevron-right" aria-hidden="true"></i> رجوع</a>

                    <h1 class="page-header"></h1> </div>
              







                <div class="panel panel-default">
                        <div class="panel-heading">
                 تعديل بياناتي
                        </div>
                        <div class="panel-body">
                        <div class="col-lg-12">  
                        

<form action="" method="post">
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">الاسم</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="name" value="">
    </div>
    <label class="col-sm-2 col-form-label">السجل المدني</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="n_id" value="">
  </div>
    </div>


    <div class="form-group row">
    <label class="col-sm-2 col-form-label">رقم الجوال</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="phone" value="" >
    </div>
    <label class="col-sm-2 col-form-label">البريد الالكتروني</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="mail" value="">
    </div>
    </div>

    <div class="form-group row">
    <div class="col-xs-4  col-md-offset-2">
    <a href="/change-password" ><button class="col-lg-6 btn btn-info">تغيير كلمة المرور </button></a>
    </div>
    </div>
        </div>


    <center>
    <div class="form-group row">
    <button type="submit" class="btn btn-success">حفظ</button>
    <button type="button" onclick="goBack()"   class="btn">إلغاء</button>
    </div>
</center>
</form>


<form action="" method="post">

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">اسم الطالب</label>
    <p class="col-sm-4">محمد العضياني</p>
    <label class="col-sm-2 col-form-label">السجل الاكاديمي</label>
    <p class="col-sm-4">123456789</p>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">السجل المدني</label>
    <p class="col-sm-4">1234567890</p>
    </div>


    <div class="form-group row">
    <label class="col-sm-2 col-form-label">الكلية</label>
    <p class="col-sm-4">كلية الحاسب الالي</p>
    <label class="col-sm-2 col-form-label">التخصص</label>
    <p class="col-sm-4">علوم الحاسب</p>
    </div>


    <div class="form-group row">
    <label class="col-sm-2 col-form-label">رقم الجوال</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="phone" value="" >
    </div>
    
    <label class="col-sm-2 col-form-label">البريد الالكتروني</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="mail" value="">
    </div>
    </div>


    <div class="form-group row">
    <div class="col-xs-4  col-md-offset-2">
    <a href="change-password" ><button class="col-lg-6 btn btn-info">تغيير كلمة المرور </button></a>
    </div>
    </div>



        </div>

    <center>
    <div class="form-group row">
    <button type="submit" class="btn btn-success">حفظ</button>
    <button type="button" onclick="goBack()" class="btn">إلغاء</button>
    </div>
</center>            
</form>





            </div>
            </div>
            </div>
         














            </div>
           </div>
                     
@include('login.footer')