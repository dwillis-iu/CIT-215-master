$(document).ready(function() {
        
    $('.login-form').validate({
        rules: {
            username: { required: true,
                        minlength: 3
                      },           
            password: { required: true }
        },
                           
        messages: {
            username: { required: "Please enter your name",
                        minlength: "Your username is at least 3 characters long"
                      },
            password: { required: "Please enter your email" }
        },
        
        submitHandler: 
            function (form) {
                $(".login-form").submit();  
            }
    });
    
}); // end ready