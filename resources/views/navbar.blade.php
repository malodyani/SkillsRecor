<!DOCTYPE html>
<html lang="ar">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <!-- Bootstrap-rtl CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/bootstrap-r.min.css" >
    <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
  </head>
  <body  style=" background-image: url('http://www.su.edu.sa/_LAYOUTS/15/New_SUPortal/images/ar/new/bg_body.png')"> 
  
  <div class="container" style="margin-top:5px; "> 
  <p>     <?php
  function intPart($float)
  {
      if ($float < -0.0000001)
          return ceil($float - 0.0000001);
      else
          return floor($float + 0.0000001);
  }
  
  
  function Greg2Hijri($day, $month, $year, $string = false)
  {
      $day   = (int) $day;
      $month = (int) $month;
      $year  = (int) $year;
  
  
      if (($year > 1582) or (($year == 1582) and ($month > 10)) or (($year == 1582) and ($month == 10) and ($day > 14)))
      {
          $jd = intPart((1461*($year+4800+intPart(($month-14)/12)))/4)+intPart((367*($month-2-12*(intPart(($month-14)/12))))/12)-
          intPart( (3* (intPart(  ($year+4900+    intPart( ($month-14)/12)     )/100)    )   ) /4)+$day-32074;
      }
      else
      {
          $jd = 367*$year-intPart((7*($year+5001+intPart(($month-9)/7)))/4)+intPart((275*$month)/9)+$day+1729777;
      }
  
  
      $l = $jd-1948440+10632;
      $n = intPart(($l-1)/10631);
      $l = $l-10631*$n+354;
      $j = (intPart((10985-$l)/5316))*(intPart((50*$l)/17719))+(intPart($l/5670))*(intPart((43*$l)/15238));
      $l = $l-(intPart((30-$j)/15))*(intPart((17719*$j)/50))-(intPart($j/16))*(intPart((15238*$j)/43))+29;
      
      $month = intPart((24*$l)/709);
      $day   = $l-intPart((709*$month)/24);
      $year  = 30*$n+$j-30;
      
      $date = array();
      $date['year']  = $year;
      $date['month'] = $month;
      $date['day']   = $day;
  
  
      if (!$string)
          return $date;
      else
          return     "{$year}-{$month}-{$day}";
  }
  
  
  $hijriDate = Greg2Hijri(date("d"), date("m"), date("Y"));
  
  
  $hijriMonth = array ("محرم", "صفر", "ربيع الاول", "ربيع الثاني", "جمادى الاولى", "جمادى الثاني", "رجب", "شعبان", "رمضان", "شوال", "ذو الحجة", "ذو القعدة");
  
  
  $year = $hijriDate["year"];
  $month = $hijriMonth[$hijriDate["month"]-1];
  $day = $hijriDate["day"];
  
  $nameday=date("l"); 
  
  switch ($nameday) 
  {
  case "Saturday":  
  $nameday="السبت"; 
  break; 
  case "Sunday":  
  $nameday="الأحد"; 
  break;  
  case "Monday":  
  $nameday="الاثنين"; 
  break; 
  case "Tuesday":  
  $nameday="الثلاثاء"; 
  break; 
  case "Wednesday": 
  $nameday="الأربعاء"; 
  break; 
  case "Thursday":  
  $nameday="الخميس"; 
  break; 
  case "Friday":  
  $nameday="الجمعة"; 
  break;
  }
  
  echo $nameday . " " . $hijriDate["day"] . " " . $hijriMonth[$hijriDate["month"]-1]  . " ". $hijriDate["year"]  ;
  ?>  </p>

	
  <hr style="margin-top:-10px;  background-color: #BDBDBD; height: 1px; border: 0;">
  </div>
  <div class="imgs">
  <img class="img1" src="http://www.su.edu.sa/_LAYOUTS/15/New_SUPortal/images/ar/new/logo.png"  > 
  <img class="img2"  src="" height="100px;" >
  </div>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <p class="imglogo" href="#"> </p>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
	
        <li class="active"><a href="/Home">الرئيسية <span class="sr-only">(current)</span></a></li>
        <li><a href="login">تسجيل الدخول</a></li>
        <li><a href="register">تسجيل </a></li>
     
      </ul>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




<div class="container">
    <div class="row">
       