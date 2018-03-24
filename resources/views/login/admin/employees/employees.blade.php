
@include('login.header')
@include('login.slider') 
            <div class="row">


                <h1 class="page-header">الموظفين</h1>
                    <a  class="btn btn-primary"   href="add-employees" >
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i> اضافة موظف جديد </a>
<br>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         الموظفين
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
                                            <th>البريد الالكتروني</th>
                                            <th></th>
                                            <th></th>
                                            </tr>
                                    </thead>
                          @foreach($Emp as $emp)
                                    	<tbody>
                                        <tr class="odd gradeX">
                                        <td>{{$emp->id}}</td>
                                        <td>{{$emp->name}}</td>
                                        <td>{{$emp->nid}}</td>
                                        <td>{{$emp->email}}</td> 
                                        <td>
                                        <form action="/edit-employees" method="get">
        						<input hidden="" type="text" name="id" value="{{$emp->id}}">
                                        <center>
                                            
                         		<button type="submit" class="btn btn-primary">
                         		<i class="fa fa-pencil-square-o " aria-hidden="true">
                         		       تعديل </i></button>
                                            </center>
                                            </form>
                                </td>
                         
                                <td>
                                        <form action="/delete-employees" method="get">
        						<input hidden="" type="text" name="id" value="{{$emp->id}}">
										<button class="btn btn-danger" onclick="return confirm('تأكيد الحذف؟')" >
 									<i class="fa fa-trash-o " aria-hidden="true"> حذف</i></button>
 									</form>
                 				</td>
                 		@endforeach
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
@include('login.footer')