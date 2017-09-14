<?php
require_once("incs/connect.php");

$username=$_GET['username'];
$code=$_GET['code'];

$query=mysqli_query($dbc,"SELECT * FROM students WHERE username='$username'");
while($row=mysqli_fetch_assoc($query)){
    $db_code=$row['confirm_code'];
    
    if($code == $db_code){
        mysqli_query($dbc,"UPDATE students SET confirmed='1' ");
        mysqli_query($dbc,"UPDATE students SET confirm_code='1' ");
        
        echo "Thanks for Confirming your email. You can now login";
    }else{
        echo "The username and code does not match";
    }
}





?>