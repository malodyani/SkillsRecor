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
                     تعديل بيانات الدورة
                        </div>
                        <div class="panel-body">
                        <div class="col-lg-12">  
                        

<form action="/SaveEdit" method="post">
@csrf
    <input hidden="" type="text" name="id" value="{{$Courses->id}}">
	<input hidden="" type="text" name="type" value="{{$Courses->type}}">
	
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">اسم الدورة</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="name" value="{{$Courses->name}}">
@if ($errors->has('name'))
   <span class="invalid-feedback">
   <strong>{{ $errors->first('name') }}</strong>
     </span>
@endif
    </div>
    <label class="col-sm-2 col-form-label">عدد الساعات</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="hours" value="{{$Courses->hours}}" >
    </div>
                                    @if ($errors->has('hours'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('hours') }}</strong>
                                    </span>
								@endif
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">مصدرها</label>
    <div class="col-sm-4">
    <select class="form-control" name="school">
	<option value="" >اختر مصدر الشهادة</option>
@foreach($Schools as $School)
    <option value="{{$School->id}}" >{{$School->name}}</option>
@endforeach
    </select>
@if ($errors->has('school'))
   <span class="invalid-feedback">
   <strong>{{ $errors->first('school') }}</strong>
     </span>
@endif
    </div></div>
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">من تاريخ</label>
    <div class="col-sm-4">
    <div class='input-group date' id='datetimepicker1'>
                  <input type='text' class="form-control" value="{{$Courses->start_at}}" name="start_date" >
                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
@if ($errors->has('start_date'))
   <span class="invalid-feedback">
   <strong>{{ $errors->first('start_date') }}</strong>
     </span>
@endif
    </div>
    
    <label class="col-sm-2 col-form-label">الى تاريخ</label>
    <div class="col-sm-4">
    <div class='input-group date' id='datetimepicker1'>
    <input type='text' class="form-control" value="{{$Courses->end_at}}" name="end_date">
    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
    </span>
@if ($errors->has('end_date'))
   <span class="invalid-feedback">
   <strong>{{ $errors->first('end_date') }}</strong>
     </span>
@endif
</div>
</div>
    </div>

    <center>
    <div class="form-group row">
    <button type="submit" class="btn btn-success">حفظ</button>
    <button type="button" class="btn">إلغاء</button>
    </div>
</center>
            </div>
            </div>
</form>
            
            </div>
            
            
            </div>
@include('login.footer')
