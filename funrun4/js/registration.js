$(document).ready(function() {
    
    $('.basic-form').validate({
        
        rules: {
            firstname: { required: true,
                         minlength: 2 
                       },
            lastname: { required: true,
                        minlength: 2 
                      },
            username: { required: true,
                        minlength: 3
                      }, 
            email: { required: true,
                     email: true 
                   },
            password: { required: true,
                         minlength: 3
                       },
            password2: { required: true,
                         minlength: 3,
                         equalTo: "#id_password"
                       }
        },
                           
        messages: {
            firstname: { required: "Please enter your first name",
                         minlength: "Your first name must consist of at least 2 characters"
                       },
            lastname: { required: "Please enter your last name", 
                        minlength: "Your last name must consist of at least 2 characters"
                      },
            username: { required: "Please enter your username",
                        minlength: "Your name must consist of at least 3 characters"
                      },
            email: { required: "Please enter your email address", 
                     email: "Please enter a valid email address" 
                   },
            password: { required: "Please create a password",
                         minlength: "Your password must consist of at least 3 characters"
                       },
            password2: { required: "Please confirm your password",
                         minlength: "Your password must consist of at least 3 characters",
                         equalTo: "Your passwords must match"
                       }
        },
        
        submitHandler: 
            function (form) {
                $(".basic-form").submit();  
            }
    });
    
}); // end ready