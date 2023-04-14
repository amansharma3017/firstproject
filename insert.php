<?php 
      include 'db_conn.php';
      
      

if(isset($_POST['save']))
{   

   
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $branch=$_POST['branch'];
    $address=$_POST['address'];
    
    $filename=$_FILES['student_image']['name'];
    $tempname=$_FILES['student_image']['tmp_name'];
   
    $folder= "images/".$filename;
    move_uploaded_file($tempname,$folder);
    
   
    
    

    $sql_query= "INSERT INTO student_info (`id`,`student_Name`,`email_id`,`contact_number`,`branch`,`student_address`,`student_image`)VALUES (' ','$name','$email','$contact','$branch','$address','$folder') ";
    if(mysqli_query($conn, $sql_query)){
       
      
        echo   "data inserted successfully";
        
       
        
    }
    else{
        echo "Error: " . $sql . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>