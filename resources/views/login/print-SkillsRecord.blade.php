<html lang="ar">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <!-- Bootstrap-rtl CSS -->
    <link rel="stylesheet" href="css/bootstrap.css"  >
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/bootstrap-r.min.css" >
    <link rel="stylesheet" href="css/style1.css" >
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet" >

<script language="javascript" type="text/javascript">
    window.print();
 </script>
<style>
 
* {
    
font-family: 'Cairo', sans-serif;
      -webkit-print-color-adjust: exact;
      line-height: 115%
    }
  @page {  size: A4 landscape; }
  
  
    .award {
      background-color: #FF8800 !important;
    } 
    .award-text {
      background-color: #ffbb33 !important;
    } 
    .gray-text {
      background-color: #e0e0e0 !important;
    } 
    .activity {
      background-color: #1976d2 !important;
    } 
    .course {
      background-color: #26a69a !important;
    } 
    .activity-text {
      background-color: #90caf9  !important;
    } 
    .course-text {
      background-color: #81c784 !important;
    }   


    @media print {
 .table td, .table th {
   background-color: initial !important;
  }
}
</style>
</head>
<!--
<center><img src="http://www.su.edu.sa/_LAYOUTS/15/New_SUPortal/images/ar/new/logo.png" width="200px;" />
</center>
-->
<body>

<table dir="rtl"  align="center" width="98%" border="0" cellpadding="0" cellspacing="0">
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
                                <td  align="right" class="fontText" >عمادة شؤون الطلاب</td>
                            </tr>
                           
                            <tr>
                                <td align="right" class="fontText" >التاريخ&nbsp; : &nbsp;<?php echo date("Y/m/d"); ?></td>
                            </tr>
                            <tr>
                                <td align="right" class="fontText" >الوقت&nbsp;&nbsp; : &nbsp; <?php echo date("H:i" , strtotime('+3 hours') ); ?> </td>
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
                                <td align="left" class="fontText" >Deanship of Student Affairs</td>
                            </tr>
                           
                           
                            <tr>
                                <td align="left" class="fontText" >Date&nbsp; : &nbsp;<?php echo date("d/m/Y"); ?></td>
                            </tr>
                            <tr>
                                <td align="left" class="fontText" >Time&nbsp;&nbsp; : &nbsp; <?php echo date("H:i" , strtotime('+3 hours') ); ?> </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                
            </table>
        

               <center>  <label >{السجل المهاري}</label></center>
<hr style="border-top:1px solid #083972; " >


         
               <div class="form-group row">
    <label class="col-sm-2 col-form-label">اسم الطالب</label>
    <p class="col-sm-4">محمد</p>
    <label class="col-sm-2 col-form-label">السجل الاكاديمي</label>
    <p class="col-sm-4">123</p>

    <label class="col-sm-2 col-form-label">الكلية</label>
    <p class="col-sm-4">الحاسب الالي وتقنية المعلومات</p>
    <label class="col-sm-2 col-form-label">التخصص</label>
    <p class="col-sm-4">علوم الحاسب</p>
    </div>

  <table class="table table-bordered" style=" margin-bottom: 0px;">    
  <thead>
      <tr>
        <th> النوع </th>
        <th>الاسم</th>
        <th>المصدر</th>
        <th>عدد الساعات</th>
        <th> من تاريخ</th>
        <th>الى تاريخ</th>
       </tr>
    </thead>
    <tbody>
    <tr   >
    <td rowspan="number of cources" >الدورات</td>

       @foreach($Courses as $cours) 
     
        <td>{{$cours->name}}</td>
        <td>{{$cours->school->name}}</td>
        <td>{{$cours->hours}}</td>  
        <td>{{$cours->start_at}}</td>  
        <td>{{$cours->end_at}}</td>
      </tr>
@endforeach


 <tr>
    <td  rowspan="1" >المشاركات و الانشطة</td>

@foreach($Activity as $Act)
     
        <td>{{$Act->name}}</td>
        <td>{{$Act->school->name}}</td>
        <td>{{$Act->hours}}</td>  
        <td>{{$Act->start_at}}</td>  
        <td>{{$Act->end_at}}</td>
       </tr>
@endforeach

 <tr >
    <td  rowspan="1" >الجوائز</td>

@foreach($Awards as $awrd)
     
      <td>{{$awrd->name}}</td>
      <td>{{$awrd->school->name}}</td>
      <td>-</td>  
      <td>{{$awrd->took_at}}</td>  
      <td>-</td>
      </tr>
@endforeach
    </tbody>
  
  </table>
</body>
</html>