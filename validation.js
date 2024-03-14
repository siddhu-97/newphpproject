
$(document).ready(function(){
//  alert("hiiiiii");
$.validator.addMethod(
    "emailAddress",
    function (value, element) {
        // Regular expression for validating email addresses
        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return this.optional(element) || emailPattern.test(value);
    },
    "Please enter a valid email address."
);
$.validator.addMethod(
    "alphaOnly",
    function (value, element) {
      var alphaPattern = /^[A-Za-z\s]+$/;
      return this.optional(element) ||(value.length > 4 && alphaPattern.test(value));
    },
    
    "Please enter a valid name."
  );
  $.validator.addMethod(
    "passwordValidation",
    function (value, element) {
      // Password pattern: at least 8 characters, at least one uppercase letter, one lowercase letter, and one digit.
      var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{6,}$/;
      return this.optional(element) || passwordPattern.test(value);
    },
    "Please enter a password with at least 6 characters, including at least one uppercase & lowercase letter, and one special characters."
);
$.validator.addMethod(
  "numericOnly",
  function (value, element) {
      var numericPattern = /^\d+$/; // Pattern to match only numeric characters
      return this.optional(element) || numericPattern.test(value);
  },
  "Please enter a contact number with numeric characters only."
);


   $("#myform").validate({
       rules:{
        name:{
            alphaOnly:true,
            required: true
        },
        uploadfile:{
            required: true,
            
        },
        email:{
            emailAddress:true,
            required: true,
            
        },
        password:{
            required: true,
            minlength: true,
             passwordValidation:true
        },
        contact:{
            required: true,
            maxlength: 10,
            minlength: 10,
            numericOnly: true
        },
       
         
       },
       messages:{
        name:{
            required: "*name is must"
        },
        uploadfile:{
            required: "*image is must"
           
        },
        email:{
            required: "*please enter the email"
            
        },
        password:{
            required: "*password is must",
            minlength: "*password must be greater than 6 characters"
        },
        contact:{
            required: "*contact is must",
            maxlength:"*number should only in 10 digits",
            minlength:"*number should only in 10 digits"
           
        },
        comment:{
            required:"this field is optional"
        },
        
       }
   });
   
   $("#submitId").click(function (e) { 
    // To take all the form data to the variable formData...
      var form = $('#myform')[0];

    var formData = new FormData(form);
     e.preventDefault();
     
   // Append image files to the formData object
   // formData.append('uploadfile', $('#uploadfile')[0].files[0]);
    var name = $("#name").val();
    var image = $("#uploadfile").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var contact = $("#contact").val();

  if ($('#myform').valid()) 
   {
      if(name == "" || image == "" || email == "" || password == "" || contact == "")
      {
        alert("all fields are required");
      }
   else
   {
     $.ajax({
        url: 'insert.php',
        type: 'POST', 
        processData: false,
        contentType: false, 
         data: formData,
         success: function(response){
              if(response) {
                Swal.fire("Data Submitted Successfully");
                  $('#submitId').text("data submitted");
                       $('form')[0].reset();      
              }

              
            else
             {
                alert("please check, your response is not working");
             }
         },
        });
      }
      }
      else 
      {
        alert("please check the form is not valid");
      }
    
});




});



    //   var form = $(this);
    //   var actionUrl = form.attr('action');

    

    //   if ($("#myform").valid()) {
    //     $.ajax({
    //       url: 'insert.php',
    //       type: 'POST',
    //       data: form.serialize(),
    //       success: function(res) {
    //         $('.btn').text("submitted");
    //         $('form')[0].reset();
    //         console.log('form submitted successfully');
    //       }
    //     });
    //   }
    // })
 
  // });
//   $("#myform").submit(function(e) {
//     e.preventDefault();
//     var form = $(this);
// var actionUrl = form.attr('action');

//                 $.ajax({
//                     type: "POST",
//                     url: "insert.php",
//                     data: form.serialize(),
//                     success: function(data) {
//                        alert("sucess");
//                     }
//                 });


            


  
