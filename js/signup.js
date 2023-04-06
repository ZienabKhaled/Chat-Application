// $(document).ready(function () {
//   $("#signupData").on("submit", function (e) {
//     e.preventDefault();
//     //first, get all form data when user signs up
//     let formData = new FormData(this);
//     formData.append("signup", "signup");
//     // console.log(formData);
//     // get $post request in jQuery
//     $.ajax({
//       type: "POST",
//       url: "php/signup.php",
//       data: formData,
//       contentType: false,
//       processData: false,
//       // get response
//     }).done((res) => {
//       console.log(res);
//       if (response == "success") {
//             location.href = "../users.php";
//           } else {
//             $("#errors").css("display", "block");
//             $("#errors").html(response);
//           }
//     });
//   //   success: function (response) {
//   //   console.log("done");
//   //   console.log(response);
//   //   if (response == "success") {
//   //     location.href = "users.php";
//   //   } else {
//   //     $("#errors").css("display", "block");
//   //     $("#errors").html(response);
//   //   }
//   // },
//   });
// });
// // });


$(document).ready(function(){
  $("#signupData").on("submit", function(e){
      e.preventDefault();
      // get all form data
      let formData = new FormData(this);
      formData.append("signup","signup");

      // get & post request in jquery
      $.ajax({
          // post or get => post
          type: "POST",
          // file name
          url: "php/signup.php",
          data: formData,
          contentType: false,
          processData: false,
          // get response
          success: function(response){
              if(response == "success"){
                location.href = "login.php";              
            }else{
                  $("#errors").css("display", "block");
                  $("#errors").html(response);
              }
          }
      });
  });
});


