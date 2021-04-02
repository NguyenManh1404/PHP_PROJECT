<?php
include '../connect.php';
$conn = new connect();
$conn->connect();
$sql = "SELECT * FROM products";
$result = mysqli_query($conn->connect, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nội Dung</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    if (isset($_POST['search'])) {
        echo "<br>";
        echo "<h3>Danh sách sản phẩm tìm kiếm</h3>";
        echo "<br>";
        $search = $_POST['input_Search'];


        $sql = "SELECT * from products where name_product like '%$search%'";

        $sql_tangdan = "  SELECT * FROM products WHERE name_product like '%$search%' ORDER BY price_products ASC";


        $result_search = mysqli_query($conn->connect, $sql_tangdan);
        //kiem tra xem co hang ko
        if ($result_search->num_rows > 0) {
    ?> <div class="container">
                <span><b>Giá tăng dần</b></span>
                <div class="row" class="container">
                    <?php
                    foreach ($result_search as $value) {
                    ?>
                        <div class='col-lg-3 col-md-3 col-sm-4'>
                            <div class="card">
                                <img class="imgmonannoibat" class="card-img-top" src="<?php echo $value['image_products'] ?>" alt="">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $value['name_product'] ?> </h5>
                                    <h5><?php echo $value['price_products'] ?> VND</h5>
                                    <h6> vị trí km</h6>
                                    <a href="cartview.php?id=<?php echo $value['id'] ?>" class="btn btn-primary">Mua</a>
                                    <a href="productdetail.php?id=<?php echo $value['id'] ?>" class="btn btn-secondary">Xem chi tiết</a>
                                </div>

                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

    <?php


        } else {
            echo '<script language="javascript">';
            echo 'alert("KHÔNG TÌM THẤY")';
            echo '</script>';
        }
    }
    ?>




<style>
.row .card{
    margin-top: 20px;
}

.row .card:hover{
-webkit-transform:scale(1.1,1.1); /*Webkit: Tăng kích cỡ ảnh lên 1.1 lần*/
-moz-transform:scale(1.1);
-o-transform:scale(1.1);
box-shadow:0px 0px 30px gray; /*Đổ bóng bằng CSS3*/
-webkit-box-shadow:0px 0px 30px gray;
-moz-box-shadow:0px 0px 30px gray;
opacity: 2; /*Độ mờ của hình ảnh*/
}
</style>






    <!-- Trường hợp đăng nhập thành công -->
    <?php
    if (isset($_SESSION['user_name'])) {
        if ($_SESSION['user_name'] != null) {
    ?>
    <div class="container">
            <nav class="navbar-expand-xl navbar-expand-lg">
                <div class="collapse navbar-collapse" id="collapsibleMenu">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a href="#khuyenmai" data-toggle="tab" class="nav-link active">Khuyến Mãi</a>
                        </li>
                        <li class="nav-item">
                            <a href="#doan" data-toggle="tab" class="nav-link">Ăn Vặt</a>
                        </li>
                        <li class="nav-item">
                            <a href="#douong" data-toggle="tab" class="nav-link">Đồ Uống</a>
                        </li>
                    </ul>
                </div>


                <div class="tab-content" id="sanphammenu">
                    <div class="tab-pane container active" id="khuyenmai">
                        <div class="container">
                            <div class="row" id="sanphamkhuyenmai">
                                <p>KHUYẾN MÃI NÈ</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane container fade" id="doan">
                        <div class="container">
                            <div class="row" id="anvat">
                                <p>sssssssrưetwrwessssssssssssss</p>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane container fade" id="douong">
                        <div class="container">
                            <div class="row" id="drink">
                                <p>ss123123sssssssssssssssssss</p>
                            </div>
                        </div>
                    </div>


                </div>

            </nav>

        </div>






            <div class="container">
                <div class='row'>
                    <h3>Món ăn bán chạy</h3>
                </div>

                <div class="row" method="post">
                    <?php
                    foreach ($result as $value) {
                    ?>
                        <div class='col-lg-3 col-md-3 col-sm-4'>
                            <div class="card">
                                <img class="imgmonannoibat" class="card-img-top" src="<?php echo $value['image_products'] ?>" alt="">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $value['name_product'] ?> </h5>
                                    <h5><?php echo $value['price_products'] ?> VND</h5>
                                    <h6> vị trí km</h6>
                                    <a href="cartview.php?id=<?php echo $value['id'] ?>" class="btn btn-primary">Mua</a>
                                    <a href="productdetail.php?id=<?php echo $value['id'] ?>" class="btn btn-secondary">Xem chi tiết</a>
                                </div>

                            </div>
                        </div>
                <?php
                    }
                }
                ?>
                </div>

            </div>

        <?php
    }
        ?>


        <br>
        <hr>
        <br>















































        <!-- Trường hợp chưa đăng nhập -->
        <?php
        if (!isset($_SESSION['user_name'])) {
        ?>
            <div class="container" style="background:red">
                <div class='row'>
                    <h3>Món ăn bán chạy</h3>
                </div>

                <div class="row" style="background:yellow" method="post">
                    <?php
                    foreach ($result as $value) {
                    ?>
                        <div class='col-lg-3 col-md-3 col-sm-4'>
                            <form method="post">
                                <div class="card">
                                    <img class="imgmonannoibat" class="card-img-top" src="<?php echo $value['image_products'] ?>" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $value['name_product'] ?> </h5>
                                        <h5><?php echo $value['price_products'] ?> VND</h5>
                                        <h6> vị trí km</h6>
                                        <input type="submit" name="btn" class="btn btn-primary" value="Mua"></input>
                                        <a href="productdetail.php?id=<?php echo $value['id'] ?>&cart=action" class="btn btn-secondary">Xem chi tiết</a>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Footer của Card
                                    </div>
                                </div>
                            </form>

                        </div>
                    <?php
                    }
                    ?>
                </div>

            </div>

        <?php
        }
        ?>

</body>

</html>

<!-- Thông báo chưa đăng nhập -->
<?php
if (isset($_POST['btn'])) {
    echo '<script language="javascript">';
    echo 'alert("Bạn chưa đăng nhập")';
    echo '</script>';
}
?>