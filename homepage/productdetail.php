<?php
require_once '../connect.php';
require_once '../users.php';
$conn = new connect();
$conn->connect();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "select * from products where id=$id";
    $result = mysqli_query($conn->connect, $sql);

    // while ($row= mysqli_fetch_assoc($result)) {
    //     $name = $row['name_product'];
    //     $price=$row['price_products'];
    //    $image=$row['image_products'];
    //     $detail=$row['detail'];
    // }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ẨM THỰC</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
if (isset($_POST['dangxuat'])) {
    unset($_SESSION['user_name']);
    header("location:http://localhost/PROJECT_PHP_31_3/homepage/home1.php");

}
?>

<body>
    <div>
        <?php include_once 'header2.php'; ?>
    </div>


    <div class="card-header">
        <h2>CHI TIẾT SẢN PHẨM</h2>
    </div>
    <hr class="my">

    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main" style="width: 100%; margin-top: 25px;">
        <div class="container">
            <div class="row">
                <?php
                foreach ($result as $value) {
                ?>
                    <div class="col-md-6">
                        <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox" class="img_detail">
                                <div class="carousel-item active"> <img class="d-block w-100" src="<?php echo $value['image_products'] ?>" alt="First slide"> </div>
                                <div class="carousel-item"> <img class="d-block w-100" src="<?php echo $value['image_products'] ?>" alt="Second slide"> </div>
                                <div class="carousel-item"> <img class="d-block w-100" src="<?php echo $value['image_products'] ?>" alt="Third slide"> </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                            <!-- ảnh nhỏ -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                                    <img class="d-block w-100 img-fluid" src="<?php echo $value['image_products'] ?>" alt="" />
                                </li>
                                <li data-target="#carousel-example-1" data-slide-to="1">
                                    <img class="d-block w-100 img-fluid" src="<?php echo $value['image_products'] ?>" alt="" />
                                </li>
                                <li data-target="#carousel-example-1" data-slide-to="2">
                                    <img class="d-block w-100 img-fluid" src="<?php echo $value['image_products'] ?>" alt="" />
                                </li>
                            </ol>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="single-product-details">
                            <br>
                            <h4>TÊN MÓN ĂN:</h4>
                            <h2 style="color: red"><?php echo $value['name_product'] ?></h2>
                            <br>
                            <p>
                            <h5>
                                <h3>Giá :</h3><?php echo $value['price_products'] ?>VND
                            </h5>
                            </p>
                            <br>
                            <p>
                            <h4>CHI TIẾT SẢN PHẨM:</h4>
                            <p><?php echo $value['detail'] ?> </p>


                            <div class="form-group quantity-box">
                                <label class="control-label"><b>SỐ LƯỢNG MUA</b></label>
                                <input class="form-control" value="0" min="0" max="20" type="number">
                            </div>


                            <br>
                            <div class="price-box-bar">
                                <div class="cart-and-bay-btn">
                                    <a class="btn hvr-hover" id="button" data-fancybox-close="" href="#">Mua ngay</a>
                                    <a class="btn hvr-hover" id="button" data-fancybox-close="" href="#">Thêm vào giỏ hàng</a>
                                </div>
                                <br>
                                <style>
                                    #button {
                                        background-color: white;
                                        color: black;
                                        border: 2px solid #555555;
                                    }

                                    #button:hover {
                                        background-color: #e7e7e7;
                                    }
                                </style>
                            </div>

                            <div class="add-to-btn">
                                <div class="add-comp">
                                    <a class="btn hvr-hover" id="button" href="#"><i class="fas fa-heart"></i> Yêu thích</a>
                                    <a class="btn hvr-hover" id="button" href="#"><i class="fas fa-sync-alt"></i> So sánh</a>
                                </div>
                                <div class="share-bar">
                                    <a class="btn hvr-hover" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                    <a class="btn hvr-hover" href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
                                    <a class="btn hvr-hover" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                    <a class="btn hvr-hover" href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                                    <a class="btn hvr-hover" href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>




            </div>
            <div class="card card-outline-secondary my-4">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <div class="card-header">
                            <h2>Đánh giá sản phẩm</h2>
                            <div class="ratting">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>
                        <div class="reviews-submit">
                            <form method="post">
                                <div class="form-group">
                                    <label>Bình luận :</label>
                                    <textarea class="form-control" rows="3" name="comment"></textarea>
                                </div>


                                <div class="cart-and-bay-btn">
                                    <input type="submit" name="add_comment" value="Gửi ngay">

                                </div>
                            </form>
                        </div>



                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-1"> </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <?php
                        $sql_comment = " SELECT * from comment where id_products= $id ";

                        $comments = mysqli_query($conn->connect, $sql_comment);
                        foreach ($comments as $value) {

                            echo   $value['user_name'] . " : " . $value['content'] . "  " . $value['comment_day'];
                            echo "<br>";
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>
        <hr class="my">
</body>
<footer>
    <?php include_once 'footer.php' ?>
</footer>



</html>

<?php
if (!empty($_POST['add_comment'])) {
   $user_comment=$_POST['comment'];
   $user= $_SESSION['user_name'];
   if(!empty($user_comment)){
      $insert_comment="INSERT INTO comment values('$user','$id','$user_comment',now()) ";
      if(mysqli_query($conn->connect,$insert_comment)){
        // echo "<script>window.location.reload()</script>";
      }else{
          echo $conn->connect->error;
      }
   }

}


?>