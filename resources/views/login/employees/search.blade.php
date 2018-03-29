
@include('login.header')
@include('login.slider') 
            <div class="row">
           
                    <h1 class="page-header">الرئيسية</h1>
                </div>
             
             
            <div class="panel panel-default">
                        <div class="panel-heading">
                       البحث عن السجل المهاري للطلاب
                        </div>
                        <div class="panel-body">
                        <div class="col-lg-12">  
 
    <div class="form-group row">
    <form action="/search" method="post">
    @csrf
    <div class="col-sm-5">
    <input type="text" class="form-control"  placeholder="السجل الاكاديمي او رقم الهوية" name="uid" >
                                        @if ($errors->has('uid'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('uid') }}</strong>
                                    </span>
								@endif
    </div>
    <button type="submit" class="col-sm-1 btn btn-info">بحث</button> 
    </form> 
</div>

</div>
</div>
</div>




          
                     
@include('login.footer')