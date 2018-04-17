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
                        <input class="form-control" placeholder="الاسم" name="name" autofocus>
                    
                             @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                    
                    </div>
                    <div class="form-group">
                    <p>الرقم الجامعي</p>
                        <input class="form-control" placeholder="الرقم الجامعي" name="uid" autofocus>
                    
                              @if ($errors->has('uid'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('uid') }}</strong>
                                    </span>
                                @endif                   
                    </div>
                    <div class="form-group">
                    <p>رقم الهويه</p>
                        <input class="form-control" placeholder="رقم الهويه" name="nid" autofocus>
                              @if ($errors->has('nid'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nid') }}</strong>
                                    </span>
                                @endif                   
                    </div>
                    <div class="form-group">
                    <p>رقم الجوال</p>
                        <input class="form-control" placeholder="رقم الجوال" name="phone" autofocus>
                    
                              @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                    </div>
@php

	$College = App\Models\College::all();
	
@endphp
                    <div class="form-group">
                    <p>الكلية</p>
<<<<<<< HEAD
                    <select class="form-control" name="collge" id="college" >
    				<option>اختر الكلية</option>
    				@foreach($College as $college)
    				<option value="{{$college->id}}" onclick="getMessage()">{{$college->name}}</option>
=======
                    <select class="form-control selectpicker" id="select-country" data-live-search="true" name="collge" >
    				<option value="" >اختر الكلية</option>
    				@foreach($College as $college)
    				<option value="{{$college->id}}" data-tokens="{{$college->id}}" >{{$college->name}}</option>
>>>>>>> origin/master
    				@endforeach
    				</select>        
    

    
                </div>
                <div class="form-group" hidden="" id="MajorDiv">
                    <p>التخصص</p>
<<<<<<< HEAD
                    <select class="form-control" name="major_id" id="major_drop">
    				<option>اختر التخصص</option>
   					 </select>        
=======
                    <select class="form-control selectpicker" id="select-country" data-live-search="true" name="major_id"  >
    <option value="1" data-tokens="">test</option>
    </select>        
    
>>>>>>> origin/master
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



 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      
      
<script>
function myFunction() {
    ;



}
</script>
<script>
         function getMessage(){

             var id = document.getElementById('college').value;
             $.ajax({
            	    method: 'POST', // Type of response and matches what we said in the route
            	    url: '{{asset('ajax')}}', // This is the url we gave in the route
            	    data: {'id' : id}, // a JSON object to send back
            	    success: function(response){ // What to do if we succeed
            	    	document.getElementById("major_drop").options.length = 0;
            	    	for (var item in response.Majors) {
                			var select = document.getElementById("major_drop");
                   			var option = document.createElement("option");
                			option.text = response.Majors[item].name;
                			option.value = response.Majors[item].id;
                			select.appendChild(option);
            	    		}
            	    	
            	    	$(MajorDiv).show();
            	    },
            	    error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
            	        console.log(JSON.stringify(jqXHR));
            	        console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
            	    }
            	});
         }
      </script>

@include('footer')