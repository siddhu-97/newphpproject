<?php
include 'connection.php';
if(isset($_POST['name']))
   {
    
        $name= trim($_POST['name']);
        $email= $_POST['email'];
        $password= $_POST['password'];
         $password_hash=password_hash($password, PASSWORD_DEFAULT);



        $contact= $_POST['contact'];
        $comment= $_POST['comment']; 
        
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
    

        $folder = "./upload/". $filename;
    
        if (move_uploaded_file($tempname, $folder))
        {
                $query= "INSERT INTO `student_table`( `name`, `email`, `password`, `contact`, `comment`,`image`)
                VALUES ('$name','$email','$password_hash','$contact','$comment','$filename')";

                 $value= mysqli_query($conn,$query);     
                 if($value)
                 {
                  header("location:list.php");
                 } 
                 
    
        }

   }
?>
