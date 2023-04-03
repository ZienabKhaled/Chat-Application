$(document).ready(function(){
    $("#signupData").on("submit",function(e){
        e.preventDefault();
        //first, get all form data when user signs up
        let formData = new FormData(this);
        formData.append("signup","signup");
        //get $post request in jQuery
        $.ajax({
            type:"POST",
            url:"php/signup.php",
            data:formData,
            contentType:false,
            processData:false,
            // get response
            success:function(response){
                console.log("done");
                if(response=="success"){
                    location.href="../users.php";
                }else{
                    $("#errors").css("display","block");
                    $("#errors").html(response);
                }
            }

        })
    })
})