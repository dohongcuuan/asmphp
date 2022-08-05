<?php
include 'db.php';
$id_news=$_GET['id_news'];
$sql="delete from news where id_news=$id_news";
$kq=$conn->prepare($sql);
if($kq->execute())
header("location:tintuc.php");
else
echo "Erorr";
?>