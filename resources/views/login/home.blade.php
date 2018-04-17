
@include('login.header')
@include('login.slider') 
            <div class="row">
             
                    <h3 class="page-header">السجل المهاري</h3>
                </div>
            
              <div class="col-lg-12">

              <table style="margin-bottom:5px;" >
                  <td >
<a href="/AddCourse"><button type="button" class="btn bn-info"><i class="fa fa-laptop" aria-hidden="true"></i> اضافة دورات</button></a>
</td>

<td>
<a href="/AddActivity"><button style="margin-right:10px;" type="button" class="btn bn-warning"><i class="fa fa-flag-checkered" aria-hidden="true"></i> اضافة انشطة</button></a>
</td>
<td>
<a href="/AddAward"><button style="margin-right:10px;" type="button" class="btn bn-success"><i class="fa fa-trophy" aria-hidden="true"></i> اضافة جوائز</button></a>
</td>
@if(!(Auth::user()->role == App\Misc\Roles::$Student))
<a href="javascript:openWindow('/su/ui/student/student_transcript/printStudentTranscript.faces');">طباعة</a>
@endif
<td>
<a href="print-SkillsRecord" target="_blank"> <button style="margin-right:10px;" type="button" class="btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i> طباعة</a>
</td>

</table>


<div class="panel panel-default" >
  <div class="panel-body" >
   
  <div class="table-responsive">
 <p>
           <span class="suqer btn-sq-xs bn-info"></span> الدورات
           <span class="suqer btn-sq-xs bn-warning"></span> المشاركات و الانشطة
           <span class="suqer btn-sq-xs bn-success"></span> الجوائز
        
</p>
  <table class="table table-bordered" style=" margin-bottom: 0px;">    
  <thead>
      <tr>
        <th>الاسم</th>
        <th>المصدر</th>
        <th>عدد الساعات</th>
        <th> من تاريخ</th>
        <th>الى تاريخ</th>
        <th>تعديل</th>
        <th>حذف</th>
      </tr>
    </thead>
    <tbody>
@foreach($Courses as $cours)
       <tr class="p-3 mb-2 bn-info-text text-white">
        <td>{{$cours->name}}</td>
        <td>{{$cours->school->name}}</td>
        <td>{{$cours->hours}}</td>  
        <td>{{$cours->start_at}}</td>  
        <td>{{$cours->end_at}}</td>
        @if($cours->Auth == false)
        <form action="/OpenEdit" method="get">
        <input hidden="" type="text" name="id" value="{{$cours->id}}">
@csrf
        <td><button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
        </form>
        
        <form action="/DeleteCourse" method="get">
        <input hidden="" type="text" name="id" value="{{$cours->id}}">
@csrf
        <td><button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
      	</form>
      	@endif
      </tr>
@endforeach

@foreach($Activity as $Act)
       <tr class="p-3 mb-2 bn-warning-text text-white">
        <td>{{$Act->name}}</td>
        <td>{{$Act->school->name}}</td>
        <td>{{$Act->hours}}</td>  
        <td>{{$Act->start_at}}</td>  
        <td>{{$Act->end_at}}</td>
        @if($Act->Auth == false)
        <form action="/OpenEdit" method="get">
        <input hidden="" type="text" name="id" value="{{$Act->id}}">
@csrf
        <td><button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
        </form>
        
        <form action="/DeleteCourse" method="get">
        <input hidden="" type="text" name="id" value="{{$Act->id}}">
@csrf
        <td><button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
      	</form>
      	@endif
      </tr>
@endforeach
@foreach($Awards as $awrd)
       <tr class="p-3 mb-2 bn-success-text text-white" >
      <td>{{$awrd->name}}</td>
      <td>{{$awrd->school->name}}</td>
      <td>-</td>  
      <td>{{$awrd->took_at}}</td>  
      <td>-</td>
      @if($awrd->Auth == false)
      
        <form action="/EditAward" method="get">
        <input hidden="" type="text" name="id" value="{{$awrd->id}}">
        <td><button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
        </form>
        
        <form action="/DeleteAward" method="get">
        <input hidden="" type="text" name="id" value="{{$awrd->id}}">
        <td><button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
      	</form>
      	@endif
      </tr>
@endforeach
    </tbody>
  
  </table>
</div>
  </div>
</div>


            </div>
            <!-- /.row -->
                        <!-- /.panel-footer -->
                   
@include('login.footer')