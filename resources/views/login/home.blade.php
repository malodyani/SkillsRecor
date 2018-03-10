
@include('login.header')
@include('login.slider') 
            <div class="row">
             
                    <h3 class="page-header">السجل المهاري</h3>
                </div>
            
              <div class="col-lg-12">

              <table style="margin-bottom:5px;" >
                  <td >
                  <a href="add-cours"><button type="button" class="btn btn-info">اضافة دورات</button></a>
</td>
<td>
<a href="add-awards"><button style="margin-right:10px;" type="button" class="btn btn-success">اضافة جوائز</button></a>
</td>
<td>
<a href="add-activities"><button style="margin-right:10px;" type="button" class="btn btn-warning">اضافة انشطة</button></a>
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
        <td>انترنت الاشياء</td>
        <td>كلية الحاسب الالي وتقنية المعلومات فرع عفيف</td>
        <td>4</td>  
        <td>2018-02-16</td>  
        <td>2018-02-16</td>
        <td><button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
        <td><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
      </tr>
      <tr class="p-3 mb-2 bg-warning text-white">
      <td>المشاركة في الاعمال التطوعية</td>
      <td>كلية ادارة الاعمال</td>
      <td>20</td>  
      <td>2017-01-16</td>  
      <td>2017-01-20</td>
      <td><button type="button" class="btn btn-primary disabled"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
      <td><button type="button" class="btn btn-danger disabled"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
   </tr>
      <tr class="p-3 mb-2 bg-success text-white" >
      <td>جائزة التفوق</td>
      <td>كلية التربية</td>
      <td>-</td>  
      <td>2018-02-22</td>  
      <td>-</td>
      <td><button type="button" class="btn btn-primary disabled"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
      <td><button type="button" class="btn btn-danger disabled"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
   
      </tr>
    </tbody>
  
  </table>
</div>
  </div>
</div>


            </div>
            <!-- /.row -->
                        <!-- /.panel-footer -->
                   
@include('login.footer')