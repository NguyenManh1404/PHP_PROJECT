<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa Hàng</title>

    <style>
        .slide img{
            height: 450px;
            border-radius: 20px;
        }
    
    </style>
</head>

<body>
    <?php include_once 'header2.php' ?>
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" class='slide'>
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/anhchinh1.jfif" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/anhchinh2.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/anhchinh4.jfif" alt="Third slide">
                </div>
            </div>
          <h3>Quán Nhậu</h3>
        </div>
    </div>















    
</body>

<footer>    
<?php include_once 'footer.php' ?>
</footer>
</html>