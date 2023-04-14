<?php
include "db_conn.php";

$id=$_GET['updateid'];
$sql= "select * from student_info where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result); 
$name=$row['student_Name'];
$email=$row['email_id'];
$contact=$row['contact_number'];
$branch=$row['branch'];
$address=$row['student_address'];




    if(isset($_POST['save']))
{   

    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $branch=$_POST['branch'];
    $address=$_POST['address'];

    $sql= "update student_info set  student_name='$name',email_id='$email',contact_number='$contact',branch='$branch',student_address='$address' where id=$id";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        die(mysqli_error($conn));

    }
    
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>   
<h1>REGISTRATION FORM</h1>
    <form method="POST" >
        <label>Name</label><br>
        <input type="text"  id="name" name="name" value=<?php echo $name ?> ><br>
        <label>Email</label><br>
        <input type="email" id="email" name="email" value=<?php echo $email ?>><br>
        <label>contact number</label><br>
        <input type="number" id="contact" name="contact" value=<?php echo $contact ?>><br>
        <label for="branch">branch</label>
        <select name="branch" value=<?php echo $branch ?>>
            <option value="MCA" id="branch" name="branch"  >MCA</option>
            <option value="BCA" id="branch" name="branch" >BCA</option>
            <option value="MBA" id="branch" name="branch" >MBA</option>
</select>
        
        
<br>
<label>Address</label><br>
<input type="text" id="address" name="address" value=<?php echo $address ?>><br> 
<button type="submit" name="save" >  UPDATE</button></form>
    </div> 

    
    
</body>
</html>