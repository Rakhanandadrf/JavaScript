$( document ).ready(function() {
    console.log( "siap" );
})

$(function (params) {

    $("#isi").html("<h1>Belajar Jquery</h1>");

        $("button").click(function (e) { 
            e.preventDefault();
           alert("belajar Javascript"); 
        });

        $(selector).mouseleave(function () { 
            alert("mouse leave");
            console.log("mouse");
        });


})
