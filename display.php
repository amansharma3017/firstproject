<?php 
      include 'db_conn.php';
      
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
  <button class primary><a href=registration.php target="_blank">ADD NEW USER</a></button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
     
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">contact</th>
      <th scope="col">branch</th>
      <th scope="col">address</th>
      <th scope="col">image</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="select  * from student_info";
    $result=mysqli_query($conn,$sql);
    if($result){
        
        while($row=mysqli_fetch_assoc($result)){
          $id=$row['id'];  
          $name=$row['student_Name'];
            $email=$row['email_id'];
            $contact=$row['contact_number'];
            $branch=$row['branch'];
            $address=$row['student_address'];
            $filename=$row['student_image'];
            echo '<tr>
            <th scope= "row">'.$id.'</td>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$contact.'</td>
            <td>'.$branch.'</td>
            <td>'.$address.'</td>
            <td><img src='.$filename.' height="100px" width="100px" /></td>
            
            <td>
        <button class="btn btn-primary "><a href="update.php? updateid='.$id.'"class= "text-light">update</a></button>
        <button  class="btn btn-danger"><a href="delete.php? deleteid='.$id.'"class= "text-light">delete</a></button>
    </td>
            </tr>';

            
            
        }
        
    
        }
    
    ?>
   
  </tbody>
</table>
    
</body>
</html>