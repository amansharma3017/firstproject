<?php
include "db_conn.php";
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql= "delete  from student_info where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
       header('location:display.php');
    }
    else{
        die(mysqli_error($conn));
    }


}