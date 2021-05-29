$(document).ready(function() {
    
    $.validator.addMethod(
        "regex",
        function(value, element, regexp)  {
            if (regexp.constructor != RegExp) regexp = new RegExp(regexp);
            else if (regexp.global) regexp.lastIndex = 0;
            return this.optional(element) || regexp.test(value);
        }
    );
        
    $('.basic-form').validate({
        rules: {
            name: { required: true,
                    minlength: 3
                  },           
            email: { required: true,
                     email: true,
                     regex: /\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i
                   },
            phone: { required: true,
                     phoneUS: true
                   },
            message: {required: true}
        },
                           
        messages: {
            name: { required: "Please enter your name",
                    minlength: "Your name must consist of at least 3 characters"
                            },
            email: { required: "Please enter your email",
                     email: "You must enter a valid email address",
                     regex: "You must enter a valid email address"
                   },
            phone: { required: "Please enter your phone number",
                     phoneUS: "Please specify a valid phone number"
                   },
            message: { required: "Please send us a message. We love your feedback!" }
        },
        
        submitHandler: 
            function (form) {
                $(".basic-form").submit();  
            }
    });
    
}); // end ready