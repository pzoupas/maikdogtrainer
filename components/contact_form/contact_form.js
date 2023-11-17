$(document).ready(function() // execute when the DOM is fully loaded
{
    $("#contact_form").submit(function(e)
    {
        e.preventDefault();
        $("#contact_form button").attr("disabled", true);
        $.ajax(
        {
            type: this.method, //By default, Ajax requests are sent using the GET HTTP method,  with this we use POST.
            url: "/backend-helper/contact.php", //A string containing the URL to which the request is sent. with this we use upload.php
            data: new FormData(this), // our form...
            processData: false, //By setting the processData option to false, the automatic conversion of data to strings is prevented.
            contentType: false, //Default is "application/x-www-form-urlencoded; charset=UTF-8", which is fine for most cases
            dataType: "JSON",
            success: function(data)
            {
                if(data.outcome)
                {
                    console.log("~~~~~~~~~~~~~~~~~~~~~~~~success~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~");
                    console.log(data.msg);
                    // window.location = "confirmation.php";
                    $("#contact_form button").attr("disabled", false);
                    $(".popup").removeClass("d-none");
                    // document.getElementById('send_button').disabled=false;
                }
                else
                {
                    console.log("~~~~~~~~~~~~~~~~~~~~~~~~error~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~");
                    console.log(data.msg);
                    $("#contact_form button").attr("disabled", false);
                }
            },
            error: function(jqxhr, status, exception) {
                $("#contact_form button").attr("disabled", false);
                // document.getElementById('send_button').disabled=false;
            }
        })
    });

});

console.log("yes");