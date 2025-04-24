/* import "../js/jquery.min.js"; */
/* import "./default/jquery.scrollex.min.js";
import "./default/jquery.scrolly.min.js";
import "./default/browser.min.js";
import "./default/breakpoints.min.js";
import "./default/util.js";
import "./default/main.js";
 */

let myData = {
    user1: "This is user1 data",
    user2: "This is user2 data"
}


$("#request_btn").on("click", function(){
    jQuery.ajax({
        type: "post",
        url: `${window.location.origin}/wp-admin/admin-ajax.php`,
        data: {
            action: "semmson_request",
            ajax_data: myData
        }, 
        complete: function(response) {
            console.log(response.responseJSON);
        }                      
    })
})

/* add click listener on filter_buttons */
$(function(){
    $('li .filter_button').each(function(){
        let button = $(this);
        button.on("click", function(){
            let datafilter = button.attr('data-filter');
            
            if(datafilter!=undefined) {
                $('.transcriptions > section').each(function(){
                    let transcription = $(this);
                    if(transcription.hasClass(datafilter) || datafilter === "all") {
                        transcription.removeClass("hidden");
                    } else {
                        transcription.addClass("hidden");
                    }
                })
            }            
        });
    });
 });




