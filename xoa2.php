<?php
include 'db.php';
$id_acc=$_GET['id_acc'];
$sql="delete from taikhoan where id_acc=$id_acc";
$kq=$conn->prepare($sql);
if($kq->execute())
header("location:user.php");
else
echo "Erorr";
?>