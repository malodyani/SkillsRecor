
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
                        إضافة دورة جديدة
                        </div>
                        <div class="panel-body">
                        <div class="col-lg-12">  
                        

                       
                      
    <div class="form-group row">
    <label class="col-sm-2 col-form-label"><p><span class="text-red">*</span>اسم الدورة</p></label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="neme" >
    </div>
    <label class="col-sm-2 col-form-label"><p><span class="text-red">*</span>عدد الساعات</p></label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="hours" >
    </div>
    </div>

    <div class="form-group row">
    
    <label class="col-sm-2 col-form-label"><p><span class="text-red">*</span>مصدرها</p></label>
    <div class="col-sm-4">
    <select class="form-control" name="school"  >
    <option value="" >test</option>
    </select>
    </div></div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label"><p><span class="text-red">*</span>من تاريخ</p></label>
    <div class="col-sm-4">
    <div class='input-group date' id='datetimepicker1'>
                  <input type='text' class="form-control" name="start_date" >
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
  
    </div>
    
    <label class="col-sm-2 col-form-label"><p><span class="text-red">*</span>الى تاريخ</p></label>
    <div class="col-sm-4">
    <div class='input-group date' id='datetimepicker1'>
    <input type='text' class="form-control" name="end_date">
    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
    </span>
</div>
</div>
    </div>

    <center>
    <div class="form-group row">
    <button type="button" class="btn btn-success">حفظ</button>
    <button onclick="goBack()" type="button" class="btn">إلغاء</button>
    </div>
</center>


            </div>
            </div>
            </div>
            </div>
                    @include('login.footer')
