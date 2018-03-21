
@include('login.header')
@include('login.slider') 
            <div class="row">
             
                    <h1 class="page-header">الرئيسية</h1>
                </div> 


                <div class="col-lg-12">
                <div class="panel panel-default" >
                    
  <div class="panel-body" >
   
  <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>الصفحة</th>
                      <th></th>
                    
                    </tr>
                  </thead>
                  <tbody>
                      
                    <tr>
                      <td> الموظفين </td>
                      <td><a href="employees" ><button class="btn btn-primary">عرض</button></a></td>
                     
                    </tr> 

                    <tr>
                      <td>الكليات</td>
                      <td><a href="college" ><button class="btn btn-primary">عرض</button></a></td>
                     
                    </tr>
                    <tr>
                      <td>التخصصات</td>
                      <td><a href="major" ><button class="btn btn-primary">عرض</button></a></td>
                     
                    </tr>
                    <tr>
                      <td> مصادر الدورات  و الانشطة</td>
                      <td><a href="school" ><button class="btn btn-primary">عرض</button></a></td>
                     
                    </tr>



                    <tr>
                      <td>تعديل التعريف وشروط السجل المهاري</td>
                      <td><a href="edit-home" ><button class="btn btn-primary">عرض</button></a></td>
                    </tr>

                  </tbody>
                </table>
                </div>
                </div>
                </div>













                </div>
</div>     
@include('login.footer')