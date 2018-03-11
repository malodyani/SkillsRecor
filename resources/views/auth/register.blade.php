@include('navbar')
<div class="col-md-6 col-md-offset-3">
    <div class="login-panel panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">التسجيل </h3>
        </div>
        <div class="panel-body">
            <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
                <fieldset>
                <div class="form-group">
                <p>الاسم</p>
                        <input class="form-control" placeholder="الاسم" name="name" type="" autofocus>
                    
                             @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                    
                    </div>
                    <div class="form-group">
                    <p>الرقم الجامعي</p>
                        <input class="form-control" placeholder="الرقم الجامعي" name="uid" type="" autofocus>
                    
                              @if ($errors->has('uid'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('uid') }}</strong>
                                    </span>
                                @endif                   
                    </div>
                    <div class="form-group">
                    <p>رقم الهويه</p>
                        <input class="form-control" placeholder="رقم الهويه" name="nid" type="" autofocus>
                              @if ($errors->has('nid'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nid') }}</strong>
                                    </span>
                                @endif                   
                    </div>
                    <div class="form-group">
                    <p>رقم الجوال</p>
                        <input class="form-control" placeholder="رقم الجوال" name="phone" type="" autofocus>
                    
                              @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                    </div>
                                
                    <div class="form-group">
                    <p>الكلية</p>
                    <select class="form-control" name="collge"  >
    <option value="" >test</option>
    </select>        
    
    
                </div>
                <div class="form-group">
                    <p>التخصص</p>
                    <select class="form-control" name="major_id"  >
    <option value="1" >test</option>
    </select>        
    
                                 @if ($errors->has('major_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('major_id') }}</strong>
                                    </span>
                                @endif
                </div>
    
                    <div class="form-group">
                    <p>البريد الالكتروني</p>
                        <input class="form-control" placeholder="البريد الالكتروني" name="email" type="email" autofocus>

                             @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                    </div>
                                
                    <div class="form-group">
                    <p>كلمة المرور</p>
                        <input class="form-control" placeholder="كلمة المرور" name="password" type="password" value="">
                             @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif  
                    </div>
                                
                    <div class="form-group">
                    <p>كلمة المرور</p>
                        <input class="form-control" placeholder="تأكيد كلمة المرور" name="password_confirmation" type="password" value="">
                    </div>         
                    <button type="submit" class="btn btn-lg btn-success btn-block">التسجيل</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</div>
</div>

@include('footer')