<?php
include 'connection.php';
 $data   ="SELECT `id`, `name`, `email`, `password`, `contact`, `comment`, `image`, `status` FROM `student_table`";
 $rahul= mysqli_query($conn , $data);
 $new= $rahul->fetch_all(MYSQLI_ASSOC);


// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {

//    echo  "hellooooo" . $row["id"];
//   }
//  }
 
//   die();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <style>

   #tableid {
  width: 50%;
  max-width: 60%;
  margin-bottom: 1rem;
  background-color: red;
}
#table_cont {
    max-width: 1440px;
  }

    </style>
  </head>
  <body>
   



    <div id="table_cont" class="container">  
      <div class="row">
         <div class="justify-content-right" style="margin-left: 781px;">
              <button type="button" name="add_stud" id="add_student" class="btn btn-primary">Add new student</button>
         </div>
     </div>                                                        
    <table class=" table table-hover" border="4">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NAME</th>
          <th scope="col">EMAIL</th>
          <th scope="col">CONTACT</th>
          <th scope="col">DATE</th>
          <th scope="col">COMMENT</th>
          <th scope="col">IMAGE</th>
          <th scope="col">ACTIONS</th>
          <th scope="col">STATUS</th>  
        </tr>
      </thead>
            <tbody>
                
            <?php
            $id=1;
              foreach($new as $value)
                {
                ?>
              <tr>
              
                <td><?php echo $id;?></td>
                <td><?php echo $value['name'];?></td>
                <td><?=$value['email'];?></td>
                <td><?=$value['contact'];?></td>

              
                <td><?php echo "Today is<br>".date("l");?></td>
                <td><?=$value['comment'];?></td>
          
                  <td><img width="50px" height="50px" src="upload/<?=$value['image'];?>"></td>
                <td>
                  <a data-eid="<?=$value['id']?>" id="edit_page" data-bs-toggle="modal" data-bs-target="#exampleModal" class="edit">
                  <i class='far fa-edit' style='font-size:24px'> </i></a>

                  <a data-id="<?=$value['id']?>" id="delete"  class="delete"><i class="fas fa-trash-alt" style="font-size:28px;color:red"></i></a>
                  </td>
                  <td><?php echo $value['status'];?></td>
          
              </tr>   
              <?php 
              $id++;
            } 
            ?>
            
            </tbody>

</table>
  </body>
</html>