$(document).ready(function(){
    setInterval(function(){
        let incomingid = $("#incoming").val();
        $.ajax({
            type: "POST",
            url: "php/getChat.php",
            data: {incomingid: incomingid},
            success: function(response){
                $("#mainSection").html(response);
            }
        });
    }, 500);
});