<?php
include 'insert.php';
include 'display.php';


   


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
    <form method="POST" enctype="multipart/form-data"  >
        <label>Name</label><br>
        <input type="text"  id="name" name="name" /><br>
        <label>Email</label><br>
        <input type="email" id="email" name="email"/><br>
        <label>contact number</label><br>
        <input type="number" id="contact" name="contact"/><br>
        <label for="branch">branch</label>
        <select name="branch">
            <option value="MCA" id="MCA" name="branch">MCA</option>
            <option value="BCA" id="BCA" name="branch">BCA</option>
            <option value="MBA" id="MBA" name="branch">MBA</option>
</select>
        
        
<br>
<label>Address</label><br>
<input type="text" id="address" name="address"/><br> 
<input type="submit" name="save" id="submit" value="Submit">

Select File:  
    <button><input type="file" name="student_image"/></button>  
    
</form>
    </div> 

    
    
</body>
</html>