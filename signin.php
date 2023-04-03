<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn Form</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="circle"></div>
    <div class="circle circle2"></div>
    <div id="container">
        <h2>Login</h2>
        <form action="" autocomplete="off" id="login">
            <div id="errors">Invalid Email Address</div>
            <input type="email" name="email" id="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" name="login" id="login" value="Login">
            <p>Don't have an account? <a href="#">Sign Up</a></p>

        </form>
    </div>
</body>
</html>