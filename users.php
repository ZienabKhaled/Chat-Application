<?php
session_start();
include_once("php/config.php");
if(!isset($_SESSION['id'])){
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chatting App</title>
    <link rel="stylesheet" href="css/users.css" />

    <link
      rel="stylesheet"
      href="//use.fontawesome.com/releases/v5.0.7/css/all.css"
    />
  </head>
  <body>
    <div class="circle"></div>
    <div class="circle circle2"></div>
    <div id="container">
      <!--header-->
      <div id="header">
      <?php
        $headerQuery = "SELECT * FROM `users` WHERE id = '{$_SESSION["id"]}'";
        $runHeaderQuery = mysqli_query($conn, $headerQuery);

        if(!$runHeaderQuery){
            echo "connection failed";
        }else{
    $info = mysqli_fetch_assoc($runHeaderQuery);

        ?>

                <!-- profile image -->
                <div id="headerProfile">
            <img style="height: 70px; width: 70px;  overflow: hidden; border: 2px solid #e6336f; border-radius: 50%;" src="assets/<?php echo $info['image']; ?>" alt="">
            </div>
            <div id="details">
                <!-- full name -->
                <h3 id="headerName"><?php echo $info['firstname']." ".$info['lastname']; ?></h3>
                <!-- status => Onine or Offline -->
                <h3 id="headerStatus"><?php echo $info['status']; ?></h3>
            </div>
            <?php
            }
            ?>


        <!--profile image-->
        <!-- <div id="headerProfile">
          <img src="assets/ana chat.jpeg" alt="" />
        </div> -->
        <!--full name-->
        <!-- <div id="details">
          <h3 id="headerName ">Zienab Khaled</h3> -->
          <!--status-->
          <!-- <h3 id="headerStatus">Online</h3>
        </div> -->
        <!--logout button-->
        <button id="logout"><a href="php/logout.php">Logout</a></button>
      </div>
      <!--search box-->
      <div id="searchBox">
        <input
          type="text"
          name="search"
          id="search"
          placeholder="Find a Friend To Chat With"
          autocomplete="off"
        />
        <i class="fas fa-search searchButton"></i>
      </div>
      <!--Display online users-->
      <!--users list-->
      <div id="onlineUsers">

        <!--user one-->
        <!-- <a href="">
          <div class="profile">
            <div class="image"> -->
              <!--profile image  -->
              <!-- <img src="assets/hagar chat.jpeg" alt="" />
            </div> -->
            <!--name-->
            <!-- <h2 class="name">Hagar Ahmed</h2> -->
            <!--last msg-->
            <!-- <p class="lastMessage">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolores
              quisquam commodi odio officia accusantium eligendi provident
              maiores molestiae voluptatibus quod beatae est illo delectus
              similique porro, impedit qui? Excepturi, consequuntur.
            </p> -->
            <!--status-->
            <!-- <div class="status online"></div>
          </div>
        </a> -->         
      </div>
    </div>


        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
         crossorigin="anonymous"></script>
        <script src="js/users.js"></script>

  </body>
</html>
