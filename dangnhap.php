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
<div class="login-page">
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  <div class="form">
    <!-- <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form> -->
    <form class="login-form" action=""method="POST">
      <input type="text" placeholder="username" name="user"/>
      <input type="password" placeholder="password" name="pass"/>
      <input  type="submit" value="Đăng Nhập" name="btn_signup">
      <p class="message"><a href="sing_up.php">Create an account</a></p>
    </form>
  </div>
  
</div>
<?php 
  include "db.php" ; 
   if(isset($_POST['btn_signup'])){

    $name = $_POST['user'];
    $pass = $_POST['pass']; 

 
    $sql_insert="select * from taikhoan where user ='$name' and pass ='$pass'" ; 
    $kq = $conn->prepare($sql_insert) ; 

    if($kq -> execute()){
        header("LOCATION:admin.php") ;
      } else {
          echo "thêm không  thành công ";
      }
   }
   
  
  ?>

</body>
</html>