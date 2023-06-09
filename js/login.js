$(document).ready(function () {
  $("#loginForm").on("submit", function (e) {
    e.preventDefault();
    //first, get all form data when user signs up
    let formData = new FormData(this);
    formData.append("login", "login");
    // console.log(formData);
    // get $post request in jQuery
    $.ajax({
      type: "POST",
      url: "php/login.php",
      data: formData,
      contentType: false,
      processData: false,
      // get response
      success: function (response) {
        // console.log("done");
        // console.log(response);
        if (response == "success") {
          location.href = "users.php";
        } else {
          $("#errors").css("display", "block");
          $("#errors").html(response);
        }
      },
    });
  });
});
