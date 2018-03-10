
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
                        إضافة جائزة جديدة
                        </div>
                        <div class="panel-body">
                        <div class="col-lg-12">  
                        

                       
                      
    <div class="form-group row">
    <label class="col-sm-2 col-form-label" ><p><span  class="text-red">*</span>اسم الجائزة </p></label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="neme" >
    </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label"><p><span  class="text-red">*</span>المصدر</p></label>
    <div class="col-sm-4">
    <select class="form-control" name="school"  >
    <option value="" >test</option>
    </select>
    </div></div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label"><p><span class="text-red">*</span>تاريخ الجائزة</p></label>
    <div class="col-sm-4">
    <div class='input-group date' id='datetimepicker1'>
                  <input type='text' class="form-control" name="start_date" >
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
