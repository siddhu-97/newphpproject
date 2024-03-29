<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <title>my form</title>

  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    .error{
      color: red;
    }
    .form-label{
      color: gold;
    }
    .form-control{
        background-color: antiquewhite;
    }
    #error_message{
      color: red;
    }
 
  </style>
   
</head>

<body>
  <div class="container"  style= "border:2px solid blue; margin-top:40px; width:1000px; background-color: #8f1453e6;" >
    <form action="#" id="myform"  enctype="multipart/form-data" >
   
     <div class="row">
         <div class="col">
           <label for="name" class="form-label">Name</label>
           <input type="text" name="name" class="form-control" id="name" placeholder="enter your name">
           <span id="error_message"></span>
          </div>
          <div class="col">  
                <label for="uploadfile" class="form-label">Select image to upload:</label>
                <input type="file" name="uploadfile" id="uploadfile">
                <span id="error2_message"></span>
           </div>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="enter your Email" aria-describedby="emailHelp">
        <span id="error3_message"></span>

      </div>
      <div class="mb-3">
         <label for="Password" class="form-label">Password</label>
         <input type="password" name="password" class="form-control" id="Password" placeholder="enter your password">
         <span id="error4_message"></span>
        </div>
      <div class="mb-3">
        <label for="contact" class="form-label">Contact</label>
        <input type="text" name="contact" class="form-control" id="contact" placeholder="enter your number">
        <span id="error5_message"></span>
      </div>
      <div class="mb-3">
        <label for="comment" class="form-label">Comment</label>
        <input type="text"  name="comment" class="form-control" id="comment" placeholder="write your message">
        <span id="error6_message"></span>
      </div>
      <div class="d-flex justify-content-center">
      <button type="submit" name="submit" id="submitId" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div> 
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js" integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
 <script src="validation.js"></script>

<div class="container" style="margin-top:40px;">
  <button type="button" class="btn btn-primary" id="response">show my data</button>
 <table id="table" style="margin-top:40px;">
   <thead>
    <tr>

    </tr>
  </thead>
  <tbody>

  </tbody>
  </table>
</div>

  <!-- Modal for edit the form-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">your form is ready to update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="modal">
         <div class="container"  style= "border:2px solid blue;" >
           <form  method="post" id="modal_page"  enctype="multipart/form-data" > 
               
           </form>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close_modal">Close</button>
        <button type="submit" name="update" id="updateit" class="btn btn-primary">Save Changes</button>
      </div>
    </div>
  </div>
</div>
   <!-- modal for insert the new record of student -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">your form is ready to update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> 
        <div class="modal-body" id="modal">
          <div class="container"  style= "border:2px solid blue;" >
            <form  method="post" id="modal_page"  enctype="multipart/form-data" > 
                
            </form>
            </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="update" id="updateit" class="btn btn-primary">Save Changes</button>
      </div>
    </div>
  </div>
</div> -->




 
<script>
  // fetching the data from database 
 $(document).ready(function(){  
   $("#response").click(function(){
            if($(this).val() == '0'){
                $(this).val('1');
                $.ajax({
                    url:"list.php",
                    type:"GET",
                    data:$("#myform").serialize(),
                    success:function(data){
                        $("#table tbody").html(data)

                    }
                })
            }
            else{
                $("#table tbody").html('')
                $(this).val('0');
            }
        })

});
// deteting the data from data base 
$(document).ready(function() {
$("#table").on("click","#delete",function(e){
  e.preventDefault();
    if(confirm("your data is deleting, please confirm!")){
        var id=$(this).data("id");
        // alert(id);
        $.ajax({
            url:"delete.php",
            type:"GET",
            data:{
                id:id
            },
            success:function(data){
              if(data)
              {
                Swal.fire("deleted successfully");
                $("#table tbody").html(data)
              
              }
              else{
                alert("not deleted");
              }
            }
        })
    }
    else{
      Swal.fire("deletion cancelled");
        
    }

});
});
// open the modal box to edit the student data
$(document).ready(function() {
 //Show Modal Box
 $(document).on("click","#edit_page", function(e){
 
    // alert("hiii siddhu");
    // if(confirm("Are You Sure, you want to edit!")){
       e.preventDefault();
      $("#modal").show();
      var studentId = $(this).data("eid");
      $.ajax({
        url: "edit.php",
        type: "POST",
        data: {id: studentId },
        success: function(data) {
          $("#modal_page").html(data);
        
        }
      })
    // }
    // else{
    //   Swal.fire("edition cancelled");
    // }
    });

    //Hide Modal Box
    $("#close-btn").on("click",function(){
      $("#modal").hide();
    });
  
});

// updating the data 
$(document).on("click","#updateit", function(e){
 
  e.preventDefault();
  var form = $('#modal_page')[0];
  var formData = new FormData(form);

    var sname = $("#sname").val();
    var simage = $("#suploadfile").val();
    var semail = $("#semail").val();
    var spassword = $("#spassword").val();
    var scontact = $("#scontact").val();

      if ($('#modal_page').valid()) 
      {
                if(sname == "" || simage == "" || semail == "" || spassword == "" || scontact == "")
                {
                  alert("all fields are required");
                }
            else
            {
    
                $.ajax({
                  url: "update.php",
                  type : "POST",
                  processData: false,
                  contentType: false,
                  data: formData,
                  success: function(response)
                  {
                    if(response)
                        {
                          alert("data updated");
                          // location.reload();
                            // $("#exampleModal").hide();
                          $('#close_modal').click();

                          // loadTable();
                        }
                      
                      else{
                        alert("response is not working");
                      }      
                  }

                })
          }
       }
     
      });


</script>

</body>
    
  </html>
