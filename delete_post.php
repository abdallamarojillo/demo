<?php
require_once("incs/connect.php");

if(isset($_POST['submit'])){
    //define the query
    
    $query = "DELETE FROM categories WHERE topic_id={$_POST['id']} LIMIT 1";
    $r = mysqli_query($dbc,$query);
    
    //report the result
    if(mysqli_affected_rows($dbc)==1){
        echo "Post deleted";
    }else{
        echo "Could not delete".mysqli_error();
    }
    
}
else { //display the entry form
    
    //check for a valid entry ID in the URL
    if(is_numeric($_GET['id'])){
        //define the query
        $query = "SELECT * FROM categories WHERE topic_id={$_GET['id']}";
        if($r = mysqli_query($dbc,$query)){
            
            $row = mysqli_fetch_array($r);
            echo
            '<form action="delete_post.php" method="post">
            <p>Are you sure you want to delete this post?</p>
            <p><h3>'.$row['topic_category'].'</h3>'.
            $row['topic_body'].'<br/>
            <input type="hidden" name="id" value="' . $_GET['id'] . '"/>
            <input type="submit" name="submit" value="Delete post"/></p>
            </form>';
        }else{
            echo "Could not fetch";
        }
    }else{
        echo "Wrong page";
    }
}





?>