
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
                 تعديل جائزة 
                        </div>
                        <div class="panel-body">
                        <div class="col-lg-12">  
                        

                       
  <form action="/SaveActivity" method="post">   
  @csrf
  <input hidden="" type="text" name="id" value="{{$Awards->id}}">
                 
    <div class="form-group row">
    <label class="col-sm-2 col-form-label" ><p><span  class="text-red">*</span>اسم الجائزة </p></label>
    <div class="col-sm-4">
    <input type="text" class="form-control" value="{{$Awards->name}}" name="name" >
    </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label"><p><span  class="text-red">*</span>المصدر</p></label>
    <div class="col-sm-4">
    <select class="form-control" name="school"  >
	<option value="" >اختر مصدر الشهادة</option>
@foreach($Schools as $School)
    <option value="{{$School->id}}" >{{$School->name}}</option>
@endforeach
    </select>
    </div></div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label"><p><span class="text-red">*</span>تاريخ الجائزة</p></label>
    <div class="col-sm-4">
    <div class='input-group date' id='datetimepicker1'>
                  <input type='text' class="form-control" value="{{$Awards->took_at}}" name="date" >
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
  
    </div>
    </div>

    <center>
    <div class="form-group row">
    <button type="submit" class="btn btn-success">حفظ</button>
    <button onclick="goBack()" type="button" class="btn">إلغاء</button>
    </div>
</center>

</form> 
            </div>
            </div>
            </div>
            </div>
                    @include('login.footer')
