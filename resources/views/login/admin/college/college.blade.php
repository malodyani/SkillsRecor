
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
                                            </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($College as $college)
                                        <tr class="odd gradeX">
                                        	<td>{{$college->id}}</td>
                                        	<td>{{$college->name}}</td>
                                            <td>{{count($college->major)}}</td> 
                                            <td>
                                            <form action="/edit-college" method="get">
                                            <input hidden="" type="text" name="id" value="{{$college->id}}">
                                            @csrf
                                            <center>
                         		<button type="submit" class="btn btn-primary">
                         		<i class="fa fa-pencil-square-o " aria-hidden="true">
                         		       تعديل </i></button>
                                            </center>
                                </form>
                                
                                			</td>
               
                                        </tr>
                                    </tbody>
                                    @endforeach
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