
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
	@if(!(Auth::user()->role == App\Misc\Roles::$Student))     

<form action="/profile" method="POST">
	@csrf
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">الاسم</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="name" value="{{$User->name}}">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
								@endif
    </div>
    <label class="col-sm-2 col-form-label">السجل المدني</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="nid" value="{{$User->nid}}">
                                @if ($errors->has('nid'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nid') }}</strong>
                                    </span>
								@endif
  </div>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">رقم الجوال</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="phone" value="{{$User->phone}}" >
                                    @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
								@endif
    </div>
    <label class="col-sm-2 col-form-label">البريد الالكتروني</label>
    <div class="col-sm-4">
    <input type="email" class="form-control" name=email value="{{$User->email}}">
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
								@endif
    </div>
    </div>
    <div class="form-group row">
    <div class="col-xs-4  col-md-offset-2">
    <a href="/change-password" class="col-lg-6 btn btn-info" >تغيير كلمة المرور</a>
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
	@endif

	
	
	@if(Auth::user()->role == App\Misc\Roles::$Student)
<form action="/profile" method="POST">
@foreach($User as $U)
	@csrf

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">اسم الطالب</label>
    <p class="col-sm-4">{{$U->name}}</p>
    <label class="col-sm-2 col-form-label">السجل الاكاديمي</label>
    <p class="col-sm-4">{{$U->uid}}</p>
    </div>

    <div class="form-group row">
    <label class="col-sm-2 col-form-label">السجل المدني</label>
    <p class="col-sm-4">{{$U->nid}}</p>
    </div>


    <div class="form-group row">
    <label class="col-sm-2 col-form-label">الكلية</label>
    <p class="col-sm-4">{{$U->CollegeName}}</p>
    <label class="col-sm-2 col-form-label">التخصص</label>
    <p class="col-sm-4">{{$U->MajorName}}</p>
    </div>


    <div class="form-group row">
    <label class="col-sm-2 col-form-label">رقم الجوال</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="phone" value="{{$U->phone}}" >
                                        @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
								@endif
    </div>
    
    <label class="col-sm-2 col-form-label">البريد الالكتروني</label>
    <div class="col-sm-4">
    <input type="text" class="form-control" name="email" value="{{$U->email}}">
                                        @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
								@endif
    </div>
    </div>


    <div class="form-group row">
    <div class="col-xs-4  col-md-offset-2">
    <a href="/change-password" class="col-lg-6 btn btn-info">تغيير كلمة المرور </a>
    </div>
    </div>
@endforeach


        </div>

    <center>
    <div class="form-group row">
    <button type="submit" class="btn btn-success">حفظ</button>
    <button type="button" onclick="goBack()" class="btn">إلغاء</button>
    </div>
</center>            
</form>
	@endif     





            </div>
            </div>
            </div>
         














            </div>
           </div>
                     
@include('login.footer')