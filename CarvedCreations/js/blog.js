$(document).ready(function() {   

    $('.blog-form').validate({
        rules: {
            title: { required: true,
                     minlength: 5
                   },
            postbody: { required: true,
                        minlength: 20
                      },
            postimage: { required: true }
        },
        
        messages: {
            title: { required: "Please enter a title for your post",
                     minlength: "Your title must consist of at least 5 characters"
                   },
            postbody: { required: "Please enter the body of your post",
                        minlength: "Your post body must consist of at least 20 characters"
                      },
            postimage: { required: "You must add an image to your post" }
        },
        
        submitHandler: 
            function (form) {
                $(".blog-form").submit();  
        }
    });
    
}); // end ready