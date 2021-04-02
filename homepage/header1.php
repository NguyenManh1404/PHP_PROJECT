

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-xl navbar-expand-lg" style='background:white;'>
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#" style="font-weight: bold;">Ẩm Thực Vùng Miền</a>
        <button id="bars" style="background-color: cornflowerblue;border: none;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <i class="fa fa-bars"></i>
        </button>
      </div>


      <div class="collapse navbar-collapse" id="collapsibleNavbar" method="post">
        <ul class="nav navbar-nav" id="trangchu">
          <li class="nav-item active mr-sm-3">
            <a class="btn" href="#">Trang Chủ</a>
          </li>
          <li class="nav-item mr-sm-3">
            <div class="dropdown ">
              <a class="btn dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown">Ẩm thực</a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Ẩm thực 3 miền</a>
                <a class="dropdown-item" href="#">Văn hóa ẩm thực</a>
                <a class="dropdown-item" href="#">Cẩm nang ẩm thực</a>
              </div>
            </div>
          </li>

          <li class="nav-item mr-sm-3">
            <div class="dropdown show">
              <a class="btn dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown"> Địa Điểm </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#"><option>Hà Nội</option></a>
                <a class="dropdown-item" href="#"><option>Hồ Chí Minh</option></a>
                <a class="dropdown-item" href="#"><option>Đà Nẵng</option></a>
              </div>
            </div>
          </li>
        </ul>

        <!-- Tìm kiếm và giỏ hàng -->
        <ul class="navbar-nav ml-auto">
          <form class="form-inline mr-sm-4">
            <input class="form-control mr-sm-3" id="inputsearch" type="search" placeholder="Hôm Nay Ăn Gì?" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>

        </ul>

        <!-- Đăng kí đăng nhập -->
        <ul class="navbar-nav ml-auto">
          <form class="form-inline" method="post">
            <li class="nav-link mr-sm-2">
              <a href="giohang" class="fas fa-shopping-cart" style="color: black;"></a>
            </li>
            <li class="nav-link mr-sm-3">
              <a href="http://localhost/PROJECT_PHP_31_3/homepage/signup.php" class="btn btn-primary">Đăng Kí </a>
            </li>
            <li class="nav-link mr-sm-3">
              <a href="http://localhost/PROJECT_PHP_31_3/homepage/signin.php" class="btn btn-primary">Đăng Nhập </a>
            </li>
          </form>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <br>
</body>

</html>