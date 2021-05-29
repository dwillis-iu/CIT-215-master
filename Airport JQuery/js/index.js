// SETUP -- DO NOT EDIT
$(".ice").hide();
$(".wind").hide();
$(".high_wind").hide();

// ASSIGNMENT STARTS BELOW THIS POINT


// ADD THE .header_row CLASS TO ALL <TH> ELEMENTS
$("th").addClass("header_row");



// ADD THE .odd_row CLASS TO EVERY EVEN <TR> ELEMENT
$("tr:even").addClass("odd_row");




// IF AN AIRPORT'S temp_f IS GREATER THAN 100, ADD THE .high_temp CLASS TO THE temp_f <TD> ELEMENT

$("td.temp_f").each(function () {
    if ($(this).text() > 100) {
        $(this).addClass("high_temp");
    }
});


// IF AN AIRPORT'S conditions ARE BLANK, ADD THE .disabled_row CLASS TO THE >>>ENTIRE<<< <TR> ELEMENT


$("td.conditions").each(function () {
    if ($(this).text() == "") {
        $(this).closest("tr").addClass("disabled_row");
    }
});




// IF AN AIRPORT'S elevation IS GREATER THAN 1000 >>>AND<<< THE temp_f IS LESS THAN 32, SHOW THE "ice" DIV IN THE warnings COLUMN FOR THAT AIRPORT

// also

// IF AN AIRPORT'S temp_f IS LESS THAN 0, SHOW THE "ice" DIV IN THE warnings COLUMN FOR THAT AIRPORT


$("tr").each(function () {
    if ( $(this).find("td.elevation").text() > 1000 
        && $(this).find("td.temp_f").text() < 32 ) {
        $(this).find("div.ice").show();
    } else if ( $(this).find("td.temp_f").text() < 0 ) {
        $(this).find("div.ice").show();
    }
});



// IF AN AIRPORT'S wind_speed IS GREATER THAN 5 >>>AND<<< THE wind_gusts ARE GREATER THAN 10, SHOW THE "high_wind" DIV IN THE warnings COLUMN FOR THAT AIRPORT

// also

// IF AN AIRPORT'S wind_speed IS GREATER THAN 5, SHOW THE "wind" DIV IN THE warnings COLUMN FOR THAT AIRPORT


$("tr").each(function () {
    if ( $(this).find("td.wind_speed").text() > 5 &&
         $(this).find("td.wind_gusts").text() > 10 ) {
        
         $(this).find("div.high_wind").show();
    } else if ( $(this).find("td.wind_speed").text() > 5 ) {
         $(this).find("div.wind").show();
    }
});


// IF AN AIRPORT'S delays ARE GREATER THAN 20, ADD THE .medium_delays CLASS TO THE >>>ENTIRE<<< <TR> ELEMENT

// also

// IF AN AIRPORT'S delays ARE GREATER THAN 60, ADD THE .high_delays CLASS TO THE >>>ENTIRE<<< <TR> ELEMENT


$("td.delays").each(function () {
    if ( $(this).text() > 20 ) {
        $(this).closest("tr").addClass("medium_delays");
    } else if ( $(this).text() > 60 ) {
        $(this).closest("tr").addClass("high_delays")
    }
});


// BONUS: 
/*
http://robiupui.com/courses/cit21500/weather/snow.png

The part of the filename (NOT INCLUDING ".png") directly corresponds to the value of the "conditions_icon" <TD> element of each row.
*/


$("tr").each(function () {
    if ( $(this).find("td.conditions_icon").text() == "clear" ) {
         $(this).find("td.conditions_icon").replaceWith("<img src='http://robiupui.com/courses/cit21500/weather/clear.png' />");
    } else if ( $(this).find("td.conditions_icon").text() == "cloudy" ) {
         $(this).find("td.conditions_icon").replaceWith("<img src='http://robiupui.com/courses/cit21500/weather/cloudy.png' />");
    } else if ( $(this).find("td.conditions_icon").text() == "fog" ) {
         $(this).find("td.conditions_icon").replaceWith("<img src='http://robiupui.com/courses/cit21500/weather/fog.png' />");
    } else if ( $(this).find("td.conditions_icon").text() == "mostlycloudy" ) {
         $(this).find("td.conditions_icon").replaceWith("<img src='http://robiupui.com/courses/cit21500/weather/mostlycloudy.png' />");
    } else if ( $(this).find("td.conditions_icon").text() == "partlycloudy" ) {
         $(this).find("td.conditions_icon").replaceWith("<img src='http://robiupui.com/courses/cit21500/weather/partlycloudy.png' />");
    } else if ( $(this).find("td.conditions_icon").text() == "snow" ) {
         $(this).find("td.conditions_icon").replaceWith("<img src='http://robiupui.com/courses/cit21500/weather/snow.png' />");
    }
});