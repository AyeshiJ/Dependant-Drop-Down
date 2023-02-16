
<?php 
include("header.php"); 
?> 

<!-- database connection ................. -->
  <?php
$con = mysqli_connect("localhost","root","","drop");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
  }
?>
<!-- database connection ................. -->


<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

<head>
  <!-- for preventing reload page entry/double entry -->

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
 

  <!-- form submission successful message time to stay -->
<script type="text/javascript">
  setTimeout(function() {
    var element = document.getElementById('dissmiable');
    element.innerHTML = '';
  }, 2000)
</script>


</style>

</head>

<header>

</header>

<body>

<div class="container">
  <br>
<div class="row justify-content-center">
<div class="col-lg-8 text-dark mt-5">
  <?php
if (isset($_REQUEST['submit'])){
  $category = stripslashes($_REQUEST['category']);
  $category = mysqli_real_escape_string($con,$category);

  $sub_category = stripslashes($_REQUEST['sub_category']);
  $sub_category = mysqli_real_escape_string($con,$sub_category);


  $query = "INSERT into product_request (category, sub_category) VALUES ('$category', '$sub_category')";

        $result = mysqli_query($con,$query);
        
        if($result){
            // echo "<h5 style='color:#069' id='dissmiable'>Entry Recorded successfully.</h5>";
echo "<p id = 'dissmiable'><font color='blue'>Data Recorded Successfully.</font></p>";
 // header( 'Location: entry_zone1.php?result=success');
     
        }

    }
?>


<h5 class="text-center p-1" style="background-color: #ff3399">Category Form</h5>
<form name="entry_customer" action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
<div class="form-row">
<div class="form-group select-boxes col-md-6" class="form-control">
    <?php
          // $con = mysqli_connect("localhost", " root", " ", "catogories");
          $category = '';
          $query = "SELECT category FROM sub GROUP BY category ORDER BY category ASC";
          $result = mysqli_query($con, $query);
          while($row = mysqli_fetch_array($result))
          {
          $category .= '<option value="'.$row["category"].'">'.$row["category"].'</option>';
          }
    ?>
    <select name="category" id="category" class="form-control action">
    <option value="">Category</option>
    <?php echo $category; ?>
   </select>
</div>
<div class="form-group col-md-6">
    <select name="sub_category" id="sub_category" class="form-control action">
    <option value="">SubCategory</option>
   </select>
 </div></div>
 <div class="form-row">
  <div class="form-group col-md-6">
  <input type="submit" name="submit" value="Submit" class="btn float-right btn-block" style="background-color: #cc0066"> 
  </div>
</div>
  </form></div>

</body>


</html>


<script>
$(document).ready(function(){
 $('.action').change(function(){
  if($(this).val() != '')
  {
   var action = $(this).attr("id");
   var query = $(this).val();
   var result = '';
   if(action == "category")
   {
    result = 'sub_category';
   }

   $.ajax({
    url:"fetchdata.php",
    method:"POST",
    data:{action:action, query:query},
    success:function(data){
     $('#'+result).html(data);
    }
   })
  }
 });
});
</script>






