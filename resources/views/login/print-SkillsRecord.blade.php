<script language="javascript" type="text/javascript">
    window.print();
 </script>
<style type="text/css" media="print">
  @page {  size: A4 landscape; }

  
</style>
<link href="css/bootstrap-r.min.css" rel="stylesheet">
<link href="css/style1.css" rel="stylesheet">
 
<!--
<center><img src="http://www.su.edu.sa/_LAYOUTS/15/New_SUPortal/images/ar/new/logo.png" width="200px;" />
</center>
-->


<table dir="rtl"  align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td  >
            <table  width="100%"  border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="40%" >
                        <table width="100%"  border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td  align="right" class="fontText" >جامعة شقراء</td>
                            </tr>
                            <tr>
                                <td  align="right" class="fontText" >عمادة شؤون القبول والتسجيل</td>
                            </tr>
                            <tr>
                                <td align="right" class="fontText" >البوابة الإلكترونية</td>
                            </tr>
                            <tr>
                                <td align="right" class="fontText" >التاريخ&nbsp; : &nbsp;7/07/1439</td>
                            </tr>
                            <tr>
                                <td align="right" class="fontText" >الوقت&nbsp;&nbsp; : &nbsp;07:06</td>
                            </tr>
                        </table>
                    </td>
                    <td width="20%" align="center"><img  src="http://www.su.edu.sa/_LAYOUTS/15/New_SUPortal/images/ar/new/logo.png"  height="120" width="100" /></td>
                    <td  width="40%">
                        <table width="100%" align="left"  border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td  align="left" class="fontText" >Shaqra University</td>
                            </tr>
                            <tr>
                                <td align="left" class="fontText" >Deanship of Admission and Registration</td>
                            </tr>
                            <tr>
                                <td align="left" class="fontText" >EduGate</td>
                            </tr>
                            <tr>
                                <td align="left" class="fontText" >Date&nbsp; : &nbsp;24/03/2018</td>
                            </tr>
                            <tr>
                                <td align="left" class="fontText" >Time&nbsp; : &nbsp;07:06</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td height="10" ></td>
    </tr>
    <tr>
        <td>
           
           <hr style="background-color: black; height: 2px; border: 0;">
   
   <table align="center" width="99%" cellspacing="0" cellpadding="0" border="0">
        <tr><td height="12" ></td></tr>
        <tr>
            <td align="center" class="fontTextTitle">
                <span id="myForm:title">السجل المهاري</span>
            </td>
        </tr>
        <tr><td height="12" ></td></tr>
    </table>



<div style="margin-right: 60px;">
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">اسم الطالب</label>
    <p class="col-sm-4">محمد</p>
    <label class="col-sm-2 col-form-label">السجل الاكاديمي</label>
    <p class="col-sm-4">123</p>
    </div>
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">الكلية</label>
    <p class="col-sm-4">الحاسب الالي وتقنية المعلومات</p>
    <label class="col-sm-2 col-form-label">التخصص</label>
    <p class="col-sm-4">علوم الحاسب</p>
    </div>
</div>


 <p>
           <span class="suqer btn-sq-xs" style="background-color: #000000" ></span> الدورات
           <span class="suqer btn-sq-xs btn-success"></span> الجوائز
           <span class="suqer btn-sq-xs btn-warning"></span> المشاركات و الانشطة
</p>
  <table class="table table-bordered" style=" margin-bottom: 0px;">    
  <thead>
      <tr>
        <th>الاسم</th>
        <th>المصدر</th>
        <th>عدد الساعات</th>
        <th> من تاريخ</th>
        <th>الى تاريخ</th>
       </tr>
    </thead>
    <tbody>
@foreach($Courses as $cours)
       <tr class="p-3 mb-2 bg-info text-white">
        <td>{{$cours->name}}</td>
        <td>{{$cours->school->name}}</td>
        <td>{{$cours->hours}}</td>  
        <td>{{$cours->start_at}}</td>  
        <td>{{$cours->end_at}}</td>

@endforeach

@foreach($Activity as $Act)
       <tr class="p-3 mb-2 bg-warning text-white">
        <td>{{$Act->name}}</td>
        <td>{{$Act->school->name}}</td>
        <td>{{$Act->hours}}</td>  
        <td>{{$Act->start_at}}</td>  
        <td>{{$Act->end_at}}</td>
       
@endforeach
@foreach($Awards as $awrd)
       <tr class="p-3 mb-2 bg-success text-white" >
      <td>{{$awrd->name}}</td>
      <td>{{$awrd->school->name}}</td>
      <td>-</td>  
      <td>{{$awrd->took_at}}</td>  
      <td>-</td>
      
@endforeach
    </tbody>
  
  </table>
