
@include('login.header')
@include('login.slider') 
            <div class="row">


                <h1 class="page-header">التخصصات</h1>
                    <a  class="btn btn-primary"   href="add-major" >
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i> اضافة تخصص جديد </a>
<br>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        التخصصات
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>الرقم</th>
                                            <th>اسم التخصص</th>
                                            <th>اسم الكلية</th>
                                            <th></th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($Majors as $major)
                                        <tr class="odd gradeX">
                                        	<td>{{$major->id}}</td>
                                        	<td>{{$major->name}}</td>
                                            <td>{{$major->college->name}}</td> 
                                            
                                            <td><center>
                                         <form action="edit-major" method="get">
                                       <input hidden="" type="text" name="id" value="{{$major->id}}">
                         		<button type="submit" class="btn btn-primary">
                         		<i class="fa fa-pencil-square-o " aria-hidden="true">
                         		       تعديل </i></button>
                                            </center>
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
            

<script src="js/jquery-1.11.0.js"></script> 
@include('login.footer')