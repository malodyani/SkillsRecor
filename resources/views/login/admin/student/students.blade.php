
@include('login.header')
@include('login.slider') 
            <div class="row">


                <h1 class="page-header">الطلاب ألمسجلين بالنظام</h1>
    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                       الطلاب  
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>الرقم</th>
                                            <th>الاسم</th>
                                            <th>رقم الهوية</th>
                                            <th>الرقم الجامعي</th>
                                            <th>الكلية</th>
                                            <th></th>
                                            <th></th>
                                            </tr>
                                    </thead>
									
                                        <tbody>

                                        <tr class="odd gradeX">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td> 
                                        <td>
                                        <form action="/edit-students" method="get">
        						<input hidden="" type="text" name="id" value="">
                                        <center>
                                            <td><center>
                         		<button type="submit" class="btn btn-primary">
                         		<i class="fa fa-pencil-square-o " aria-hidden="true">
                         		       تعديل </i></button>
                                            </center>
                                            </form>
                                </td>
                         
                                <td>
                                        <form action="" method="get">
        						<input hidden="" type="text" name="id" value="">
										<button class="btn btn-danger" onclick="return confirm('تأكيد الحذف؟')" >
 									<i class="fa fa-trash-o " aria-hidden="true"> حذف</i></button>
 									</form>
                                        </tr>
                                    </tbody>
                                 
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>

            </div>
            </div>   
            

<script src="js/jquery-1.11.0.js"></script>
@include('login.footer')