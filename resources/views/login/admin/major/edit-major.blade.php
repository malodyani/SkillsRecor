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
تعديل التخصص                         </div>
                        <div class="panel-body">
                        <div class="col-lg-12">  
 
<form action="/edit-major" method="POST">
@csrf

<div class="form-group row">
    <label class="col-sm-2 col-form-label">الكلية</label>
    <div class="col-sm-4">
    <select class="form-control selectpicker" id="select-country" data-live-search="true" name="college">
	<option value="{{$Major->college_id}}" >{{$Major->college->name}}</option>
	@foreach($College as $college)
	<option value="{{$college->id}}" >{{$college->name}}</option>
	@endforeach
    </select>
                                @if ($errors->has('college'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('college') }}</strong>
                                    </span>
								@endif
    </div>
</div>
    
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">اسم التخصص </label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="name" value="{{$Major->name}}">
                                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
								@endif
    </div>
</div>


    <div class="form-group row">
    <div class="col-xs-offset-3">
    <button type="submit" class="btn btn-success">حفظ</button>
    <button type="button" class="btn">إلغاء</button>
</div>
    </div>

            </div>
            </div>
</form>

            </div>
            </div>
                    @include('login.footer')
