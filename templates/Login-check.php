<?php
//1st: display login form for user to input
if (!isset($_POST['login'])) {
   include 'Login.html.php';
}
//2nd: retrieve login data to check login
else {
   try {
      //connect to database
      include '../includes/DatabaseConnection.php';

      //get login data from Login form
      $username = $_POST['username'];
      $password = $_POST['password'];
      //encrypt password with md5 method
      $hash = md5($password);

      //1st way
      $sql = "SELECT COUNT(*) FROM users
       WHERE username = :username
       AND password = :password";
      $stm = $pdo->prepare($sql);
      $stm->bindValue(':username', $username);
      $stm->bindValue(':password', $hash);
      $stm->execute();
      $check = $stm->fetch();
      //get the result (total match record). Note: "0" is "first column"
      $result = $check[0];
      if ($result >= 1)  //at least 1 record in table matched
      {
        //start session
         session_start();
        //create global session variable if login succeed
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;
        // echo "Login succeed !";
        // redirect to homepage if success
        header ("Location: index.php");
      } else {
         echo "Login failed ! <br>";
         //allow user to login again if failure
         echo "<a href='Login.html.php';>Try again</a>";
      }
   } catch (PDOException $error) {
      echo "Connect to DB failed ! <br>";
      echo $error;
   }
}