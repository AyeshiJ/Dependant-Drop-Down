<?php
//fetchdata.php
if(isset($_POST["action"]))
{
 $con = mysqli_connect("localhost", "root", "", "drop");
 $output = '';
 if($_POST["action"] == "category")
 {
  $query = "SELECT sub_category FROM sub WHERE category = '".$_POST["query"]."' GROUP BY sub_category";
  $result = mysqli_query($con, $query);
  $output .= '<option value="">Select Sub Category</option>';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '<option value="'.$row["sub_category"].'">'.$row["sub_category"].'</option>';
  }
 }
echo $output;
}
?>
