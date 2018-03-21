
@include('login.header')
@include('login.slider') 


<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote-bs4.js"></script>
  </head>

            <div class="row">
            <div class="col-lg-12">
                <br>
                
<a  class="btn btn-default" onclick="goBack()"> <i class="fa fa-chevron-right" aria-hidden="true"></i> رجوع</a>
                    <h1 class="page-header">الرئيسية</h1>
                </div>
             



                <div class="form-group row">
    <label class="col-sm-2 col-form-label">المحتوى</label>
    <div class="col-sm-10">

<textarea class="summernote" name="content" ></textarea> 


<script>
$(document).ready(function() {
  $('.summernote').summernote();
});
    </script>

		 
    </div>
  </div>

<center>

  <button  class="btn btn-success" ><i class="fa fa-plus-square" aria-hidden="true"></i>حفظ</button>
  <button  class="btn btn-muted" onclick="goBack()"><i class="fa fa-ban" aria-hidden="true"></i> الغاء</button>


</center>














                </div> 
            </div>     
@include('login.footer')