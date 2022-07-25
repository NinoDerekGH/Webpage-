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
    <h2>Login</h2>
    <form action=<?php $_SERVER['PHP_SELF']?> method="post">
      
      <div class="input-box">
        <input type="text" placeholder="Enter your username or email" name ="uname" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" name ="pass" required>
      </div>
      
      <div class="input-box button">
        <input type="Submit" value="Login">
      </div>
      <div class="text">
        <h3>Don't have account? <a href="Reg.php">Click Here!</a></h3>
      </div>
    </form>
  </div>
    <?php 
    $data=file('accs.txt');
    $str = $data[0];
    $exp1 = explode("\n",$str);
   
    unset($data);
    $data=array();
    ?>
</body>

</html>