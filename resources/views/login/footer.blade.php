<script>

function goBack() {
    window.history.back();
}



</script>
<?php $host = $_SERVER['SERVER_NAME']  . $_SERVER['REQUEST_URI'];
if ( $host == "www.skills.com/edit-home")
{
    echo " ";
} 
else {
    echo '
    <script src="js/jquery-1.11.0.js"></script>';
}
?>
<script src="js/jquery/jquery.dataTables.min.js"></script>
<script src="js/bootstrap/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
      $('#dataTables-example').dataTable();
    });
</script>


<script src='http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js'></script>

<script src="js/date.js"></script>


<!--start Search in select -->
<script src="js/bootstrap-select.min.js"></script>
<link href="css/bootstrap-select.min.css" rel="stylesheet" />
<script>
$(function() {
  $('.selectpicker').selectpicker();
});
</script>
<!--end Search in select -->


    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/raphael/raphael.min.js"></script>
    <script src="js/morris/morris.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
