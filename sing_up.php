<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="dangnhap.css">
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<div class="form">
    
    <form class="login-form" action=""method="POST">
      <input type="text" placeholder="username" name="user"/>
      <input type="password" placeholder="password" name="pass"/>
      <input type="text" placeholder="email" name="email"/>
      <input  type="submit" value="Đăng ký" name="btn_signup">
      <!-- <p class="message"><a href="sing_up.php">Create an account</a></p> -->
    </form>
  </div>
  
</div>


<?php
            include 'db.php';
            if(isset($_POST["btn_signup"])){
              $user=$_POST["user"];
              $pass=sha1($_POST["pass"]);
              $email=$_POST["email"];
              $sql_insert="insert into taikhoan values (null,'$user','$pass','$email')" ; 
            $kq = $conn->prepare($sql_insert) ;
              if($kq->execute()){
                header("location:dangnhap.php") ;
            //    echo " Đăng kí thành công";
               } else 
              echo "Đăng kí không thành công";
            }
?>
</body>
</html>