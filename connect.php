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
$dbname = "";
$username = "";
$password = "";
$dbname = "";

        //create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
        //check connection if it is working or not
if (!$conn)
        {
die("Connection failed!" . mysqli_connect_error());
        }
        //This below line is a code to Send form entries to database
$sql = "INSERT INTO userdata (product_number, description, quantity, unit_weight, declared_value) VALUES ('$product_number','$description','$quantity','$unit_weight','$declared_value')";
      //fire query to save entries and check it with if statement
 $rs = mysqli_query($conn, $sql);
if($rs)
        {
echo '<span style="color: red; font-size: 50px;">"Record Successfully saved"
</span>';
        }
      //connection closed.
mysqli_close($conn);
    }
?>




