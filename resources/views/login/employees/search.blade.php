
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
    <div class="col-sm-5">
    <input type="text" class="form-control"  placeholder="السجل الاكاديمي او رقم الهوية" name="search" >
    </div>
    <button class="col-sm-1 btn btn-info">بحث</button>  
</div>

<div class="panel panel-default">
<div class="panel-body">
<div class="col-lg-12">  
<div class="form-group row">
<label class="col-sm-2 col-form-label">اسم الطالب</label>
<p class="col-sm-4">محمد العضياني</p>
<label class="col-sm-2 col-form-label">السجل الاكاديمي</label>
<p class="col-sm-4">123456789</p>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">التخصص</label>
<p class="col-sm-4">علوم الحاسب الالي</p>   
<label class="col-sm-2 col-form-label">الكلية</label>
<p class="col-sm-4">الحاسب الالي وتقنية المعلومات</p>
</div>


<center> <a href="records"><button   class="btn btn-success">عرض السجل المهاري</button></a>   </center>

</div>
</div>
</div>




</div>
</div>
</div>




          
                     
@include('login.footer')