<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MixiShop - Đồ hiệu Mixi, áo PUBG, áo CSGO ship toàn quốc</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,100&family=Oswald:wght@500&family=Roboto+Slab:wght@100;300&display=swap"
        rel="stylesheet">

</head>

<body>
    <div class="shadow-xl">
        <div class="flex space-x-9 justify-center items-center pt-4">
            <div>
                <a href="index.html"> <img src="img/31.png" alt="" class="w-[60px] md:w-[90px]"></a>
            </div>
            <ul class="flex space-x-4 font-bold">
                <li class="p-4 hover:text-fuchsia-600"><a href="index.php">Trang chủ</a>
                </li>
                <li class="p-4 hover:text-fuchsia-600"><a href="">Thông báo</a></li>
                <li class="p-4 hover:text-fuchsia-600"><a href="">Cửa hàng</a></li>
                <!-- <li class="p-4 hover:text-fuchsia-600"><a href=""></a></li> -->
                <li class="p-4 hover:text-fuchsia-600"><a href="">Liên hệ</a></li>
            </ul>

        </div>
    </div>
    <div class=" max-w-7xl mx-auto px-5 md:px-0 ">
        <h2 class="pt-8 text-2xl"> Tin Tức</h2>

        <?php
				include 'db.php';
				$sql = "select * from news";
				$result = $conn->query($sql);
				foreach ($result as $row){		
		?>

        <div class="grid md:grid-cols-3 gap-8 pt-8">
            <div class="col-span-1  ">
                <a href="chitiettintuc.php"><img class="  w-full" src="img/<?php echo $row['img_new'] ?>" /></a>
            </div>
            <div class="md:col-span-2 ">
            <div class="text-4xl font-bold "><a href="chitiettintuc.php"><?php echo $row['title']   ?></a></div>
            <br>
			<span class="px-4 bg-blue-900	rounded-full  text-white ">2022 </span>
			<div class="pt-8 text-2xl"><?php echo $row['intro']  ?></a></div>
            </div>

        </div>

        <?php  
				} 	
		?>

        <hr class="mt-6">
        




    </div>
    <div class="container pt-16">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Thông tin</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="index.html" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Giới Thiệu</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Chính sách bảo mật</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Điều Khoản</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sitemap</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5 class="font-bold">Danh mục sản phẩm</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Áo CSGO</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Áo Mixi</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Áo PUBG</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Áo Refund Gaming</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Đồ lưu niệm</a></li>
                    </ul>
                </div>



                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5>Theo dõi bản tin của chúng tôi</h5>
                        <p>Thông báo hàng tháng về những gì mới và thú vị từ chúng tôi.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="rounded-lg text-1xl bg-sky-400" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>&copy;by:2022 quandhph21475, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#twitter" />
                            </svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram" />
                            </svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#facebook" />
                            </svg></a></li>
                </ul>
            </div>
        </footer>
    </div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>



</body>