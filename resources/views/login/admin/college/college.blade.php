
@include('login.header')
@include('login.slider') 
            <div class="row">


                <h1 class="page-header">الكليات</h1>
                    <a  class="btn btn-primary"   href="add-college" >
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i> اضافة كلية جديد </a>
<br>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          الكليات
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>الرقم</th>
                                            <th>اسم الكلية</th>
                                            <th>عدد التخصصات</th>
                                            <th></th>
                                            <th></th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                    
                                        <tr class="odd gradeX">
                                        	<td></td>
                                        	<td></td>
                                            <td></td> 
                                     
                                            
                                            <td><center>
                         		<button type="submit" class="btn btn-primary">
                         		<i class="fa fa-pencil-square-o " aria-hidden="true">
                         		       تعديل </i></button>
                                            </center>
                                </td>

                         
                                <td>
<button class="btn btn-danger" onclick="return confirm('تأكيد الحذف؟')" >
 <i class="fa fa-trash-o " aria-hidden="true"> حذف</i></button>
                 				</td>
               
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