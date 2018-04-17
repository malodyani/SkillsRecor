
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
<p class="col-sm-4">{{$Student[0]->StudentName}}</p>
<label class="col-sm-2 col-form-label">السجل الاكاديمي</label>
<p class="col-sm-4">{{$Student[0]->StudentUid}}</p>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">الكلية</label>
<p class="col-sm-4">{{$Student[0]->CollegeName}}</p>
<label class="col-sm-2 col-form-label">التخصص</label>
<p class="col-sm-4">{{$Student[0]->MajorName}}</p>
<div class="text-left">
<form action="/EditStudent" method="get">
<button type="submit" style="margin-bottom: -30px;" class="btn btn-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> تعديل بيانات الطالب</button>
<input hidden="" type="text" name="student_id" value="{{$Student[0]->StudentID}}">
@csrf
</form>
</div>
</div>
</div>
</div>
</div>

<table style="margin-bottom:5px;">
<td>
<form action="/AddCourseEmp" method="get">
@csrf
<input hidden="" type="text" name="id" value="{{$Student[0]->StudentID}}">
<input hidden="" type="text" name="uid" value="{{$Student[0]->StudentUid}}">
@csrf

<button type="submit" class="btn bn-info"><i class="fa fa-laptop" aria-hidden="true"></i> اضافة دورات</button>
</form>
</td>

<td>
<form action="/AddActivityEmp" method="get">
@csrf
<input hidden="" type="text" name="id" value="{{$Student[0]->StudentID}}">
<input hidden="" type="text" name="uid" value="{{$Student[0]->StudentUid}}">
<button type="submit" style="margin-right:10px;" type="button" class="btn bn-warning"><i class="fa fa-flag-checkered" aria-hidden="true"></i> اضافة انشطة</button>
</form>
</td>

<td>
<form action="/AddAwardEmp" method="get">
@csrf
<input hidden="" type="text" name="id" value="{{$Student[0]->StudentID}}">
<input hidden="" type="text" name="uid" value="{{$Student[0]->StudentUid}}">
<button type="submit" style="margin-right:10px;" type="button" class="btn bn-success"><i class="fa fa-trophy" aria-hidden="true"></i> اضافة جوائز</button>
</form>
</td>


<td>
<a href="print-SkillsRecord" target="_blank" ><button style="margin-right:10px;" type="button" class="btn btn-primary pull-right"> <i class="fa fa-print" aria-hidden="true"></i> طباعة</button></a>
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
        <th>بداية من تاريخ</th>
        <th>الى تاريخ</th>
        <th>تعديل</th>
        <th>حذف</th>
        <th>الأعتماد</th>
      </tr>
    </thead>
    <tbody>
@foreach($Course as $course)
    @if(!is_null($course->CourseName) && $course->CourseType == 0)
     @if($course->Auth == false)
       <tr class="p-3 mb-2 bn-info-text text-white">
        <td>{{$course->CourseName}}</td>
        <td>{{App\Models\School::find($course->SchoolID)->name}}</td>
        <td>{{$course->CourseStart_at}}</td>
        <td>{{$course->CourseEndAt}}</td>
        <td>{{$course->CourseHours}}</td>
        <form action="/OpenEdit" method="get">
        <input hidden="" type="text" name="id" value="{{$course->CourseID}}">
        <td><button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
        </form>
        <form action="/DeleteCourse" method="get">
        <input hidden="" type="text" name="id" value="{{$course->CourseID}}">
        <td><button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
      	</form>
      	<form action="/AuthCourse" method="post">
        <input hidden="" type="text" name="id" value="{{$course->CourseID}}">
        <input hidden="" type="text" name="uid" value="{{$Student[0]->StudentUid}}">
        @csrf
        <td><button type="submit" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i> أعتماد</button></td>
      	</form>
      	</tr>
      	</tbody>
      	@endif
   @endif
@endforeach
@foreach($Activity as $activity)
    <tbody>
    @if(!is_null($activity->ActivityName) && $activity->Type == 1)
    	@if($activity->Auth == false)
       <tr class="p-3 mb-2 bn-warning-text text-white">
        <td>{{$activity->ActivityName}}</td>
        <td>{{App\Models\School::find($activity->SchoolID)->name}}</td>
        <td>{{$activity->ActivityStart_at}}</td>
        <td>{{$activity->ActivityEndAt}}</td>
        <td>{{$activity->ActivityHours}}</td>
        <form action="/OpenEdit" method="get">
        <input hidden="" type="text" name="id" value="{{$activity->ActivityID}}">
        <td><button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
        </form>
        <form action="/DeleteCourse" method="get">
        <input hidden="" type="text" name="id" value="{{$activity->ActivityID}}">
        <td><button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
      	</form>
      	<form action="/AuthCourse" method="post">
        @csrf
        <input hidden="" type="text" name="id" value="{{$activity->ActivityID}}">
        <input hidden="" type="text" name="uid" value="{{$Student[0]->StudentUid}}">
        <td><button type="submit" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i> أعتماد</button></td>
      	</form>
      	@endif
   @endif
   </tr>
   </tbody>
@endforeach
@foreach($Awards as $award)
    	@if($award->Auth == false)

		<tbody>
       <tr class="p-3 mb-2 bn-success-text text-white">
        <td>{{$award->AwardName}}</td>
       	<td>{{App\Models\School::find($award->AwardSchool)->name}}</td>
        <td>-</td>
        <td>{{$award->AwardTookAt}}</td>
        <td>-</td>
        <form action="/EditAward" method="get">
        <input hidden="" type="text" name="id" value="{{$award->AwardID}}">
        <td><button type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
        </form>
        <form action="/DeleteAward" method="get">
        <input hidden="" type="text" name="id" value="{{$award->AwardID}}">
        <td><button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
      	</form>
      	<form action="/AuthAward" method="post">
      	@csrf
        <input hidden="" type="text" name="id" value="{{$award->AwardID}}">
        <input hidden="" type="text" name="uid" value="{{$Student[0]->StudentUid}}">
        <td><button type="submit" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i>  أعتماد</button></td>
      	</form>
      	</tr>
      	@endif
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