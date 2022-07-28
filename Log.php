<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/Register.css">
</head>

<body>
  <div class="wrapper">
    <h2>Login</h2>
    <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
      
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
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $data=file('php/accs.txt');
        $str = $data[0];
        $name = $_POST['uname'];
        $pass = $_POST['pass'];
        $exp1 = explode("\n",$str);
        echo $name." ".$pass;
        $i = 0;
        foreach ($exp1 as $s){
          echo $s;
          if(str_contains($s,$name) && str_contains($s,$pass)){
            header('Location: index.php');
          }else{} 
            $i++;
        }
       
        unset($data);
        $data=array();
    }

    
    ?>
</body>

</html>