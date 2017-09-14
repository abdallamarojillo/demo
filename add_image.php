<?php
function uploadImage(){
require_once("incs/connect.php");
$name=$_FILES['file']['name'];
$extension = strtolower(substr($name,strpos($name,'.')+1));

$size=$_FILES['file']['size'];
$type=$_FILES['file']['type'];
$error=$_FILES['file']['error'];
$tmp_name=$_FILES['file']['tmp_name'];
$extension=substr($name,strpos($name,'.')+1);

$max_size=2000000; //2mb

if(isset($name)){
    if(!empty($name)){
        if(($extension=='jpg' || $extension=='jpeg' || $extension='png') &&($type=='image/jpeg' ||$type=='image/png' ||$type=='image/jpg') &&($size<=$max_size)){
         $location = 'uploads/';
        if(move_uploaded_file($tmp_name,$location.$name)){
            $image = $_FILES['file']['name'];
            $insert = "INSERT INTO pictures (image_name,image_owner) VALUES ('$image','Abdalla Default')";
            if(mysqli_query($dbc,$insert)){
                echo "File uploaded successfully";
         
            }
            
        }else{
            echo "There was an error uploading the file. please try again";
        }   
        }else{
            echo "Wrong file format or the file exceeded the upload size";
        }
        
    }else{
        echo "Please choose a file";
    }
}
}
uploadImage();
?>