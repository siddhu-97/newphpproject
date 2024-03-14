<?php
include 'connection.php';

// if(($_SERVER['REQUEST_METHOD'] == 'POST'))
// {
if(isset($_POST['id'])){
    $id= $_POST['id'];
     $name= $_POST['sname'];
     $email= $_POST['email'];
     $password= $_POST['password'];
     $contact= $_POST['contact'];
     $comment= $_POST['comment']; 
     $image=$_FILES['uploadfile']['name'];
     $tmp_name=$_FILES['uploadfile']['tmp_name'];
     print_r($tmp_name);
    if(move_uploaded_file($tmp_name,"upload/".$image))
      {
 
     $sql= "UPDATE `student_table` SET `name`='$name',`email`='$email',`password`='$password',`contact`='$contact',
     `comment`='$comment',`image`='$image' WHERE id = '$id'";
      if(mysqli_query($conn,$sql)){
        echo 1;
      }else{
         echo 0;
      }
     
    }
    else{
        echo "photo not uploaded";
    }
        }
        else{
            echo "something went wrong";
        }
// }
// else{
//     echo "something much went wrong again";
// }

?>