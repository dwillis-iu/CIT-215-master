$(document).ready(function() {   
    
    $.validator.addMethod(
        "regex",
        function(value, element, regexp)  {
            if (regexp.constructor != RegExp) regexp = new RegExp(regexp);
            else if (regexp.global) regexp.lastIndex = 0;
            return this.optional(element) || regexp.test(value);
        }
    );

    $('#newsletter').validate({
        rules: {
            emailAddr: { required: true,
                     email: true,
                     regex: /\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i
                   }         
        },
        
        messages: {
            emailAddr: { required: "Please enter your email address",
                     email: "Please enter a valid email address",
                     regex: "Please enter a valid email address"
                   }
        },
        
        submitHandler: 
            function (form) {
                $("#newsletter").submit();  
        }
    });
    
}); // end ready