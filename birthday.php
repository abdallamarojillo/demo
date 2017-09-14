<?php
if(!isset($_SESSION['logged_in'])){
    header("Location:login.php");
}
require_once("incs/connect.php"); //calling database connection file
date_default_timezone_set('Africa/Nairobi');//set the time zone according to the time zone you re in
echo date('D F Y ')."East African Time <br/>";
$day=date('j');
$month=date('F');
echo "$day$month <br/>";
//check user in database that matches the day and month
$check="SELECT username,day,month FROM students WHERE day='$day' && month='$month'";
$confirm=mysqli_query($dbc,$check);
if($confirm){
    $count=mysqli_num_rows($confirm);
    if($count>0){
        echo "$count birthday/s today ";
        //fetch the username from the database;
        while($row=mysqli_fetch_array($confirm,MYSQLI_ASSOC)){
            echo "<div class='bday'>
            ".$row['username'].";
           </div>";
        }
    }else{ 
        echo "No birthdays today";
    }
} //A SMALL CODE FOR MY BIRTHDAY AND IT MAKES ME HAPPY :-) ABDALLA MARO
 ?>