<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id= $_GET['deleteid'];

    $sql = "delete from `crud` where id=$id";
    $reqult = mysqli_query($conn,$sql);
    if($reqult){
        header("location:render.php");
    }else{
        die(mysqli_error($conn));
    }
}
?>