
@include('login.header')
@include('login.slider') 
            <div class="row">
            <br>
                
                <a  class="btn btn-default" onclick="goBack()"> <i class="fa fa-chevron-right" aria-hidden="true"></i> رجوع</a>
                
                                    <h1 class="page-header"></h1>
                </div>
              







                <div class="panel panel-default">
                        <div class="panel-heading">
                     تعديل بيانات الطالب
                        </div>
                        <div class="panel-body">
                        <div class="col-lg-12">  
                        

<form action="" method="post">

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">اسم الطالب</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="name" value="">
    </div>
    <label class="col-sm-2 col-form-label">السجل الاكاديمي</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="collge_id" value="" >
    </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">السجل المدني</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="n_id" value="">
   <span class="invalid-feedback">
   <strong></strong>
     </span>
    </div>
    <label class="col-sm-2 col-form-label">رقم الجوال</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="phone" value="" >
    </div>
    </div>


    <div class="form-group row">
    <label class="col-sm-2 col-form-label">الكلية</label>
    <div class="col-sm-4">
                <select class="form-control selectpicker"  name="collge" id="select-country" data-live-search="true">
                <option data-tokens="">اختر الكلية</option>
  <option value=""  data-tokens=""></option>
                </select>
              </div>
              <label class="col-sm-2 col-form-label">التخصص</label>
    <div class="col-sm-4">
                <select class="form-control selectpicker"  name="major" id="select-country" data-live-search="true">
                <option data-tokens="">اختر التخصص</option>
  <option value=""  data-tokens=""></option>
                </select>
              </div>
    </div>


    <div class="form-group row">
    <label class="col-sm-2 col-form-label">البريد الالكتروني</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="mail" value="">
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