<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  <div class="wrapper">
    <h2>Registration</h2>


    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

      <div class="input-box">
        <input type="text" placeholder="Enter your name" name="uname" required>
      </div>
      <div class="input-box">
        <input type="email" placeholder="Enter your email" name="email" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" name="pass" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" required>
      </div>
      <div class="policy">
        <input type="checkbox" required>
        <h3>I accept all terms & condition. </h3>
        <a href="#" style="color:white;text-decoration:underline;">Read here!</a>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now" >
      </div>
      <div class="text"> 
        <h3>Already have an account? <a href="Log.php">Login now</a></h3>
      </div>
    </form>
  </div>

  <?php 
  if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $acc_arr= array($uname,$email,$pass);
    // print_r($acc_arr);
    $acc_line = implode(" | ",$acc_arr);
    $file = fopen("php/accs.txt","a");
    fwrite($file,$acc_line."\n");
    unset($acc_arr);
    $acc_arr= array();
    fclose($file);
  }
  ?>
  <script>
    function toLoginBalert(){
      if(confirm("Do you want to Login?")==true){
        // <?php //header('Location:Log.php');
        // exit; ?>
      }else{

      }
    }
  </script>

</body>

</html>