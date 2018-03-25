
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
اضافة تخصص الى كلية
                        </div>
                        <div class="panel-body">
                        <div class="col-lg-12">  
 
<form action="/add-major" method="post">
@csrf

@php
$College = App\Models\College::all();
@endphp
<div class="form-group row">
    <label class="col-sm-2 col-form-label">الكلية</label>
    <div class="col-sm-4">
    <select class="form-control selectpicker" id="select-country" data-live-search="true" name="college">
    <option value="">اختر الكلية</option>
    @foreach($College as $coll)
	<option value="{{$coll->id}}">{{$coll->name}}</option>
	@endforeach
    </select>
                                            @if ($errors->has('collage'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('collage') }}</strong>
                                    </span>
								@endif
    </div>
</div>
    
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">اسم التخصص </label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="name">
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
