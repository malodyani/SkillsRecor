
@include('login.header')
@include('login.slider') 
            <div class="row">
             
                    <h3 class="page-header">السجل المهاري</h3>
                </div>
            
              <div class="col-lg-12">



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
<label class="col-sm-2 col-form-label">الكلية</label>
<p class="col-sm-4">الحاسب الالي وتقنية المعلومات</p>
<label class="col-sm-2 col-form-label">التخصص</label>
<p class="col-sm-4">علوم الحاسب الالي</p>
<div class="text-left">
<a href="edit-student"><button type="submit" style="margin-bottom: -30px;" class="btn btn-warning">تعديل بيانات الطالب</button></a>  
</div>
</div>
</div>
</div>
</div>





              <table style="margin-bottom:5px;" >
                  <td >
<a href="/AddCourse"><button type="button" class="btn btn-info">اضافة دورات</button></a>
</td>
<td>
<a href="/AddAward"><button style="margin-right:10px;" type="button" class="btn btn-success">اضافة جوائز</button></a>
</td>
<td>
<a href="/AddActivity"><button style="margin-right:10px;" type="button" class="btn btn-warning">اضافة انشطة</button></a>
</td>


<td>
<button style="margin-right:10px;" type="button" class="btn btn-primary disabled">طباعة</button>
</td>


</table>







<div class="panel panel-default" >
  <div class="panel-body" >
   


   
  <div class="table-responsive">
 <p>
           <span class="suqer btn-sq-xs btn-info"></span> الدورات
           <span class="suqer btn-sq-xs btn-success"></span> الجوائز
           <span class="suqer btn-sq-xs btn-warning"></span> المشاركات و الانشطة
</p>
  <table class="table table-bordered" style=" margin-bottom: 0px;">    
  <thead>
      <tr>
        <th>الاسم</th>
        <th>المصدر</th>
        <th>عدد الساعات</th>
        <th>بداية من تاريخ</th>
        <th>الى تاريخ</th>
        <th>تعديل</th>
        <th>حذف</th>
      </tr>
    </thead>
    <tbody>
       <tr class="p-3 mb-2 bg-info text-white">
        <td></td>
        <td></td>
        <td></td>  
        <td></td>  
        <td></td>
        <form action="/OpenEdit" method="get">
        <input hidden="" type="text" name="id" value="">

        <td><button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
        </form>
        
        <form action="/DeleteCourse" method="get">
        <input hidden="" type="text" name="id" value="">

        <td><button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
      	</form>
      </tr>

       <tr class="p-3 mb-2 bg-warning text-white">
        <td></td>
        <td></td>
        <td></td>  
        <td></td>  
        <td></td>
        <form action="/OpenEdit" method="get">
        <input hidden="" type="text" name="id" value="">

        <td><button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
        </form>
        
        <form action="/DeleteCourse" method="get">
        <input hidden="" type="text" name="id" value="">

        <td><button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
      	</form>
      </tr>

       <tr class="p-3 mb-2 bg-success text-white" >
      <td></td>
      <td></td>
      <td>-</td>  
      <td></td>  
      <td>-</td>
        <form action="/EditAward" method="get">
        <input hidden="" type="text" name="id" value="">
        <td><button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
        </form>
        
        <form action="/DeleteAward" method="get">
        <input hidden="" type="text" name="id" value="">
        <td><button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
      	</form>
      </tr>
    </tbody>
  
  </table>


  <center><button     class="btn btn-success">اعتماد</button><button     class="btn btn-danger">رفض</button></center>
  

</div>
  </div>
</div>


            </div>
            <!-- /.row -->
                        <!-- /.panel-footer -->
                   
@include('login.footer')