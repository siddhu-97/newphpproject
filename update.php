<?php
include 'connection.php';

// if(($_SERVER['REQUEST_METHOD'] == 'POST'))
// {
if(isset($_POST['id'])){
    $id= $_POST['id'];
     $name= $_POST['sname'];
     $email= $_POST['semail'];
     $password= $_POST['spassword'];
     $contact= $_POST['scontact'];
     $comment= $_POST['scomment']; 
     $image=$_FILES['suploadfile']['name'];
     $tmp_name=$_FILES['suploadfile']['tmp_name'];
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