<?php

include ('connection.php');
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from `regd_form`where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "deleted successfully";
    }else{
        echo "deleted failed";
    }
}
?>