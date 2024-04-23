<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>

<body class="container-body">

    <div class="container">
        <h1>Login</h1>
        <br><br>
        <form action="Login-check.php" method="post" class="container-detail">
            <label for="email">Email:</label>
            <input type="email" id="email" name="username" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <input type="checkbox" onclick="showPassword()">Show Password
            <br>
            <input type="submit" value="Login" name="login">
            <a style="color: black" href="register.html.php">Don't have an account?</a>
        </form>
    </div>

</body>
<script>
      function showPassword() {
         var x = document.getElementById("password");
         if (x.type === "password") {
            x.type = "text";
         } else {
            x.type = "password";
         }
      }
   </script>

</html>