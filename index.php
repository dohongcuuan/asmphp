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
<style>
  body {
    font-family: 'Roboto Slab', serif;
  }
</style>

<body>
  <div id="animations-bg" class=" h-[699px]  bg-cover static " style="background-image:url(img/3.png);">

    <div class="flex space-x-9 justify-center items-center pt-4 xl:px-0 px-5">
      <div>
        <a href="index.php"> <img class="w-[60px] md:w-[90px]" src="img/31.png" alt=""></a>
      </div>
      <button id="btn" class="text-2xl text-white md:hidden block"><i class='bx bx-menu'></i></button>
      <ul id="menu" class="md:flex text-white md:space-x-4 font-bold  md:block hidden   ">
        <li class="p-4 hover:text-fuchsia-600"><a href="index.php">Trang chủ</a></li>
        <li class="p-4 hover:text-fuchsia-600"><a href="thongbao.php">Blog</a></li>
        <li class="p-4 hover:text-fuchsia-600"><a href="">Cửa hàng</a></li>
        <li class="p-4 hover:text-fuchsia-600"><a href="">Liên hệ</a></li>
        <li class="p-4 hover:text-fuchsia-600"><a href="dangnhap.php">Đăng nhập/Đăng ký </a></li>

      </ul>

    </div>

    <!-- end -->

    <div class="text-white text-center space-y-9 pt-16 ">
      <h2 class="text-4xl font-bold">SẢN PHẨM BẢN QUYỀN ĐƯỢC BÀY BÁN TẠI  </h2>
      <h1 class="text-8xl font-bold pt-16 text-zinc-600	"><a href="" class="text-red-800">Mixi</a> Gaming</h1>
      <h3 class="text-2xl font-bold"></h3>
      <!-- <button
        class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 duration-300  p-4 rounded-full px-10 text-4xl">Đặt
        Ngay</button> -->
    </div>
    <!-- end -->

  </div>

  <!-- end -->
  <div class="max-w-7xl m-auto  mt-44">
    <div class="grid grid-cols-2 gap-8">
      <div class="">
        <a href="">
          <img class="transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300"
            src="img/img13.png" alt="">
        </a>
      </div>
      <div>
        <a href="">
          <img class="transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300"
            src="img/img14.png" alt="">
        </a>
      </div>
    </div>
    <!-- end -->
    <div id="main" class="bg-white mt-8 shadow-2xl  ">
      <h5 class="text-center text-4xl font-bold"> Bán Chạy Nhất</h5>
      <div class="flex justify-around pt-4">
        <?php
				include 'db.php';
				$sql = "select * from producd";
				$result = $conn->query($sql);
				foreach ($result as $row){		
		?>
        
		<div class="text-center">
			<a href="chitietsanpham1.php"><img class="transition ease-in-out delay-150  hover:-translate-1 hover:scale-110 duration-700 h-[300px]  w-[235px] " src="img/<?php echo $row['img'] ?>"/></a>
			<a href="" class="hover:text-fuchsia-600"><?php echo $row['name_pro']   ?></a>
			<div class="text-rose-700" ><?php echo $row['price']  ?></a></div>
			
		</div>
		
		<?php  
				} 	
		?>

        

        
        
        

      </div>
    </div>
  </div>
  <div style="background-image: url(img/3.jpg);" class="bg-cover h-[800px] mt-8 static  ">
    <div class="space-y-18">
      <div class="space-y-4 text-white text-center py-4">
        <h4 class="text-2xl font-bold"></h4>
        <h3 class="text-6xl text-red-600	  font-bold">ĐANG GIẢM GIÁ</h3>
        <p class="font-bold"></p>
      </div>
      <!-- end -->
      <div class="space-y-8 ">
        <div class="flex justify-center space-x-3 absolute left-[660px] top-[1820px]  ">
          <style type="text/css">
            #clockdiv h2 {
              font-family: 'font-bold';
              font-weight: 100;
              color: #034688;
              text-align: center;
              font-size: 40px;
              margin: 0 0 16px
            }

            #clockdiv {
              font-family: sans-serif;
              color: #fff;
              ;
              display: inline-block;
              font-weight: 100;
              text-align: center;
              font-size: 30px;
              margin: -10px auto;
              padding: 20px;
              width: 100%
            }

            #clockdiv>div {
              padding: 10px 35px;
              border-radius: 3px;
              background: #034688;
              display: inline-block
            }

            #clockdiv div>span {
              padding: 0;
              border-radius: 3px;
              font-size: 58px;
              display: inline-block
            }

            #clockdiv .smalltext {
              padding-top: 5px;
              font-size: 16px
            }
            
          </style>

          <div id="clockdiv">
            <h2>Thời Gian giảm giá còn</h2>
            <div>
              <span class="days"></span>
              <div class="smalltext">Days</div>
            </div>
            <div>
              <span class="hours"></span>
              <div class="smalltext">Hours</div>
            </div>
            <div>
              <span class="minutes"></span>
              <div class="smalltext">Minutes</div>
            </div>
            <div>
              <span class="seconds"></span>
              <div class="smalltext">Seconds</div>
            </div>
          </div>

          <script type='text/javascript'>
            //<![CDATA[
            function getTimeRemaining(endtime) {
              var t = Date.parse(endtime) - Date.parse(new Date());
              var seconds = Math.floor((t / 1000) % 60);
              var minutes = Math.floor((t / 1000 / 60) % 60);
              var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
              var days = Math.floor(t / (1000 * 60 * 60 * 24));
              return {
                'total': t,
                'days': days,
                'hours': hours,
                'minutes': minutes,
                'seconds': seconds
              };
            }

            function initializeClock(id, endtime) {
              var clock = document.getElementById(id);
              var daysSpan = clock.querySelector('.days');
              var hoursSpan = clock.querySelector('.hours');
              var minutesSpan = clock.querySelector('.minutes');
              var secondsSpan = clock.querySelector('.seconds');

              function updateClock() {
                var t = getTimeRemaining(endtime);

                daysSpan.innerHTML = t.days;
                hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

                if (t.total <= 0) {
                  clearInterval(timeinterval);
                }
              }

              updateClock();
              var timeinterval = setInterval(updateClock, 1000);
            }

            var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
            initializeClock('clockdiv', deadline);
                //]]>
          </script>
        </div>
        <div class="w-[1243px] h-[481px]  m-auto">
          <div class="grid grid-cols-4 gap-8 pt-16 p-4">
            <div class="">
              <a href=""> <img
                  class="transition ease-in-out delay-150  hover:-translate-1 hover:scale-110 duration-700 "
                  src="img/7.jpg" alt=""></a>

              <div class="pt-4">
                <span class="hover:text-fuchsia-600 ">Áo Nỉ dài tay MXG-Đen</span>
                <p class="line-through"> 350.000đ  </p>
                <h class="text-[#8cc63f]">130,000đ</h>
              </div>

            </div>
            <div>
              <a href=""><img
                  class="transition ease-in-out delay-150  hover:-translate-1 hover:scale-110 duration-700 h-[363]"
                  src="img/26.jpg" alt=""></a>

              <div class="pt-4">
                <span class="hover:text-fuchsia-600">Bơ sáp 034 Lâm Đồng</span>
                <p class="line-through"> 350.000đ  </p>
                <p class="text-[#8cc63f]">135,000đ</p>
              </div>

            </div>
            <div>
              <a href=""><img
                  class="transition ease-in-out delay-150  hover:-translate-1 hover:scale-110 duration-700"
                  src="img/18.jpg" alt=""></a>

              <div class="pt-4">
                <span class="hover:text-fuchsia-600">Áo Mixi</span>
                <p class="line-through"> 250.000đ  </p>
                <p class="text-[#8cc63f]">220,000đ</p>
              </div>

            </div>
            <div class="">
              <a href=""> <img
                  class="transition ease-in-out delay-150  hover:-translate-1 hover:scale-110 duration-700"
                  src="img/24.jpg" alt=""></a>

              <div class="pt-4">
                <span class="hover:text-fuchsia-600">Áo phông Mixi-Đen</span>
                <p class="text-[#8cc63f]">65,000đ</p>
              </div>

            </div>


          </div>

        </div>

      </div>
    </div>
  </div>






  <div class="container pt-16">
    <footer class="py-5">
      <div class="row">
        <div class="col-6 col-md-2 mb-3">
          <h5>Thông tin</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="index.html" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Giới Thiệu</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Chính sách bảo mật</a></li>
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
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
        </ul>
      </div>
    </footer>
  </div>
  
  
      <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>   




</body>

</html>