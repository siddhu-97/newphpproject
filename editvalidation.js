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
    
       $("#modal_page").validate({
           rules:{
            sname:{
                alphaOnly:true,
                required: true
            },
             suploadfile:{
               required: true,
                
             },
            semail:{
                emailAddress:true,
                required: true,
                
            },
            spassword:{
                required: true,
                minlength: true,
                 passwordValidation:true
            },
            scontact:{
                required: true,
                maxlength: 10,
                minlength: 10,
                numericOnly: true
            },
           
             
           },
           messages:{
            sname:{
                required: "*name is must"
            },
            suploadfile:{
                 required: "*image is must"
               
            },
            semail:{
                required: "*please enter the email"
                
            },
            spassword:{
                required: "*password is must",
                minlength: "*password must be greater than 6 characters"
            },
            scontact:{
                required: "*contact is must",
                maxlength:"*number should only in 10 digits",
                minlength:"*number should only in 10 digits"
               
            },
            scomment:{
                required:"this field is optional"
            },
            
           }
       });
    });    