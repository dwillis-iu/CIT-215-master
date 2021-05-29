$(document).ready(function() {
    
    $('.basic-form').validate({
        rules: {
            username: { required: true,
                        minlength: 3
                      },           
            password: { required: true,
                        minlength: 3
                      }
        },
                           
        messages: {
            username: { required: "Please enter your username",
                              minlength: "Your name must consist of at least 3 characters"
                            },
            password: { required: "Please enter your password",
                     minlength: "Your password must consist of at least 3 characters"
                   }
        },
        
        submitHandler: 
            function (form) {
                $(".basic-form").submit();  
            }
    });
    
}); // end ready