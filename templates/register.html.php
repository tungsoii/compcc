<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="container-body">

  <div class="container">
    <h1>Registration</h1>
    <br><br>
    <form action="register.php" method="post" class="container-detail">
      <label for="email">Email:</label>
      <input type="email" id="email" name="username" required>
      <br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      <input type="checkbox" onclick="showPassword()">Show Password
      <br>
      <input type="submit" value="Register" name="register">
      <a style="color: black" href="Login.html.php">Already have an account?</a>
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