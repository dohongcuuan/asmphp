<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
        <p>Tên sản phẩm</p><input type="text" name="name_pro">       
        <p>Giá</p><input type="text" name="price">
        <p>Ảnh sản phẩm</p><input type="file" name="img">                              
        <input type="submit" value="Thêm sản phẩm" name ="btn_insert">

    </form>

    
    <?php
            include'db.php';
            if(isset($_POST['btn_insert'])){
                $name_book=$_POST['name_pro'];
                
                $price=$_POST['price'];
                              

                $img_pro=$_FILES['img']['name'];
                $tmp_img=$_FILES['img']['tmp_name'];
                move_uploaded_file($tmp_img,"img/".$img_pro);

                $sql_insert="insert into producd values(null,'$name_book',$price,'$img_pro')";
                echo $sql_insert;
                $kq=$conn->prepare($sql_insert);
                if($kq->execute())
                    // echo "Thêm thành công";
                    header("Location:admin.php");
                else 
                    echo "Không thêm được dữ liệu";
            }




        ?>
</body>
</html>