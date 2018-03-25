
@include('login.header')
@include('login.slider') 
            <div class="row">
                <h1 class="page-header">مصادر الدورات و الانشطة</h1>
                    <a  class="btn btn-primary"   href="add-school" >
                   <i class="fa fa-pencil-square-o" aria-hidden="true"></i> اضافة مصدر جديد </a>
<br>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>الرقم</th>
                                            <th>الاسم</th>
                                            <th></th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($School as $school)
                                        <tr class="odd gradeX">
                                        	<td>{{$school->id}}</td>
                                            <td>{{$school->name}}</td> 
                                            <td>
        <form action="/edit-school" method="get">                                    
		<input hidden="" type="text" name="id" value="{{$school->id}}">
                                            <center>
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