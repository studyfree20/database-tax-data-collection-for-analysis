<?php
//include("connection.php");
//if(isset($_POST['submit']))
   // if(isset($_POST['submit']))
    {
$product_number = $_POST['product_number'];
$description = $_POST['description'];
$quantity = $_POST['quantity'];
$unit_weight = $_POST['unit_weight'];
$declared_value = $_POST['declared_value'];
        
//database details. You have created these details in the third step. Use your own.
$servername = "localhost";
$dbname = "ligiyetu_flag";
$username = "ligiyetu";
$password = "";
$dbname = "ligiyetu_flag";

        //create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
        //check connection if it is working or not
if (!$conn)
        {
die("Connection failed!" . mysqli_connect_error());
        }
        //This below line is a code to Send form entries to database
 $product_number=$_POST['product_number'];
 $unit_weight=$_POST['unit_weight'];
 if($product_number!=''&&$unit_weight!='')
 {
   $query=mysqli_query($connection,"select * from flagtable where product_number='".$product_number."' and unit_weight='".$unit_weight."'");
   $res=mysqli_num_rows($query);
   if($res>0)
  // {
    //$_SESSION["product_number"] = $unit_weight;
   // header('location:browse.php');
   //}
   //else
   {
    echo'Your submission has been flagged due to compliance issues.';
   }
 }
 
}
?>





