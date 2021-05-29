$(document).ready(function() {
    $( '.dropdown' ).hover(
        function(){
            $(this).children('.sub-menu').slideDown(200);
        },
        function(){
            $(this).children('.sub-menu').slideUp(200);
        }
    );
    
    
    $('.cmxform').validate({
        rules: {
            registrantname: { required: true,
                              minlength: 5
                            },           
            email: { required: true,
                     email: true
                   },
            url: { url: true },
            arrDate: { required: true },
            depDate: { required: true }
        },
                           
        messages: {
            registrantname: { required: "Please enter your first name",
                              minlength: "Your name must consist of at least 5 characters"
                            },
            email: { required: "Please provide an email address",
                     email: "Please enter a valid email address"
                   },
            url: { url: "Please enter a valid URL (i.e. https://www.google.com)" },
            arrDate: { required: "Please enter an arrival date",
                       dpDate: "Please enter a valid date (yyyy-mm-dd)" 
                     },
            depDate: { required: "Please enter a departure date" }
        },
        
        submitHandler: 
        
            function() {
                event.preventDefault();

                $("#table").before("<h2>Values Posted</h2>");       

                var name = $("#registrantname").val();
                var email = $("#email").val();
                var url = $("#url").val();
                var comment = $("#comment").val();
                var arrDate = $("#arrDate").val();
                var depDate = $("#depDate").val();

                $('.cmxform').hide();
                $("h1").hide();
                $("#table").show();

                $("#table table").append('<tr><td>Name: </td><td>' + name + '</td></tr>');
                $("#table table").append('<tr><td>Email: </td><td>' + email + '</td></tr>');
                $("#table table").append('<tr><td>URL: </td><td>' + url + '</td></tr>');
                $("#table table").append('<tr><td>Comment: </td><td>' + comment + '</td></tr>');
                $("#table table").append('<tr><td>arrDate: </td><td>' + arrDate + '</td></tr>');
                $("#table table").append('<tr><td>depDate: </td><td>' + depDate + '</td></tr>');

                $("#table").append("<h2>Values as JSON</h2>");   

                $("#table").append('{"name":"' + name + '", "email":"' + email + '", "url":"' + url + '", "comment":"' + comment + '", "arrDate":"' + arrDate +  '", "depDate":"' + depDate + '"}');

                $("#response").html("<br>Registration successful");             
            }
    });
    
    $("#arrDate").datepicker({
        dateFormat: 'mm-dd-yy'
    });
    
    $("#depDate").datepicker({
        dateFormat: 'mm-dd-yy'
    });    
    
    $.validator.addMethod("cus_url", function(value, element) { 
        if(value.substr(0,7) != 'http://'){
            value = 'http://' + value;
        }
        if(value.substr(value.length-1, 1) != '/'){
            value = value + '/';
        }
        return this.optional(element) || /^(http|https|ftp):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i.test(value); 
    }, "Not valid url.");  
    
}); // end ready


