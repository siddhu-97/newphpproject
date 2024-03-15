<?php
include 'connection.php';
if(isset($_POST['id']))
  $id= $_POST['id'];
 $sql=  "SELECT * FROM `student_table` WHERE id = '$id'" ;
 $siddhu= mysqli_query($conn,$sql);
 $sid= mysqli_num_rows($siddhu);
 
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>my form</title>
  <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <style>
      .error{
        color: red;
      }
    </style>
  </head>
  <body>
   <!-- Button trigger modal -->
     
   <?php
   if($sid>0)
   {
    foreach($siddhu as $key=> $value){
      ?>
      <input type="hidden" name="id" id="my_id" value="<?php echo $value['id'];?>"
           <div class="row">
               <div class="col">
                 <label for="name" class="form-label">Name</label>
                 <input type="text" name="sname"  value="<?php echo $value['name'];?>" class="form-control" id="sname">
                </div>
                 <div class="col">
                    <label for="image"> Select image to upload:</label>
                    <input type="file" name="suploadfile" id="suploadfile">
                    <img width="50px" height="50px" src="upload/<?php echo $value['image'];?>"
                 </div>
            </div>

           <div class="mb-3">
                 <label for="email" class="form-label">Email address</label>
                 <input type="email" class="form-control"  value="<?php echo $value['email'];?>" name="semail" id="semail" aria-describedby="emailHelp">
           </div>
           <div class="mb-3">
               <label for="Password" class="form-label">Password</label>
               <input type="password" name="spassword"  value="<?php echo $value['password'];?>" class="form-control" id="sPassword">
           </div>
           <div class="mb-3">
             <label for="contact" class="form-label">Contact</label>
             <input type="text" name="scontact"  value="<?php echo $value['contact'];?>" class="form-control" id="scontact">
           </div>
         <div class="mb-3">
           <label for="comment" class="form-label">Comment</label>
           <input type="text"  name="scomment"  value="<?php echo $value['comment'];?>" class="form-control" id="scomment">
         </div>
         <?php 
       } 
      }
   ?>
         

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
 <script src="editvalidation.js"></script>
</body>

</html>


