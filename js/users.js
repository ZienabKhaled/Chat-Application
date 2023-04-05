$(document).ready(function () {
  setInterval(function () {
    if (!$("search").val()) {
      $.ajax({
        url: "php/users.php",
        type: "POST",
        success: function (data) {
          $("#onlineUsers").html(data);
          // $("#errors").css("display", "block");
        },
      });
    } else {
      $("#search").on("keyup", function () {
        console.log($("#search"));
        let search = $(this).val();
        console.log(search);
        $.ajax({
          url: "php/search.php",
          type: "POST",
          data: { search: search },
          success: function (data) {
            console.log(data);
            console.log("here");
            $("#onlineUsers").html(data);
          },
        });
      });
    }
  }, 500);
});
