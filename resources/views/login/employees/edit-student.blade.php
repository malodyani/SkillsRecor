
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

<form action="/EditStudent" method="post">
@csrf
    <input type="text" hidden="" name="id" value="{{$Student->id}}">
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">اسم الطالب</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="name" value="{{$Student->name}}">
    @if ($errors->has('name'))
   <span class="invalid-feedback">
   <strong>{{ $errors->first('name') }}</strong>
     </span>
	@endif
    </div>
    
    <label class="col-sm-2 col-form-label">السجل الاكاديمي</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="uid" value="{{$Student->uid}}" >
    @if ($errors->has('uid'))
   <span class="invalid-feedback">
   <strong>{{ $errors->first('uid') }}</strong>
     </span>
@endif
    </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">السجل المدني</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="nid" value="{{$Student->nid}}">
    @if ($errors->has('nid'))
   <span class="invalid-feedback">
   <strong>{{ $errors->first('nid') }}</strong>
     </span>
@endif
   <span class="invalid-feedback">
   <strong></strong>
     </span>
    </div>
    <label class="col-sm-2 col-form-label">رقم الجوال</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="phone" value="{{$Student->phone}}" >
    @if ($errors->has('phone'))
   <span class="invalid-feedback">
   <strong>{{ $errors->first('phone') }}</strong>
     </span>
@endif
    </div>
    </div>
              <label class="col-sm-2 col-form-label">التخصص</label>
    			<div class="col-sm-4">
                <select class="form-control selectpicker"  name="major" id="select-country" data-live-search="true">
  				<option value="{{$Student->major->id}}">{{$Student->major->name}}</option>
  				@foreach($Majors as $Major)
  				<option value="{{$Major->id}}">{{$Major->name}}</option>
  				@endforeach
                </select>
              </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">البريد الالكتروني</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="email" value="{{$Student->email}}">
    @if ($errors->has('email'))
   <span class="invalid-feedback">
   <strong>{{ $errors->first('email') }}</strong>
     </span>
@endif
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