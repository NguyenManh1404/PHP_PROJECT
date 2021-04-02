<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh Toán</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include 'header2.php'
    ?>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9">
                <div class="panel panel-info">
                    <div class="panel-body">
                        <table class="table table-bordered table-hover">


                            <tbody>
                                <?php
                                $sum = 0;
                                $cart = $_SESSION['cart'];
                                foreach ($cart as $key => $value) {
                                ?>
                                    <tr>
                                        <td >
                                            <img  src="<?php echo $value['img'] ?>" alt=""  width="100px" height="70px">
                                            &nbsp;
                                            <?php echo $value['name'] ?>
                                        </td>

                                        <td><?php echo $value['price'] ?> VND</td>
                                        <td>số lượng: <b> <?php echo $value['quantity'] ?> </b> </td>
                                        <td><?php echo $value['detail'] ?></td>
                                        <td><b><?php echo $value['quantity'] * $value['price'] ?></b> VND</td>
                                        <?php $sum += $value['quantity'] * $value['price'] ?>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr method="get">
                                    <td colspan="4">Tổng tiền cần phải trả</td>
                                    <td colspan="1"><span style="color:red"><?php echo $sum ?> VND</span></td>
                                </tr>
                                <tr>
                                <tr>
                                    <td>
                                        Phương thức thanh toán
                                    </td>
                                    <td>
                                        <input type="radio" id="tienmat" name="payment" >
                                        <label for="male">Tiền mặt</label><br>
                                    </td>
                                    <td>
                                        <input type="radio" id="tienonline" name="payment" >
                                        <label for="female">Thẻ</label><br>                                      
                                    </td>
                                </tr>
                                <td colspan="6">
                                    <form method="post">
                                        <a href="#" class="btn btn-danger" name="btn_cart" width="120%">Tiến Hành Thanh Toán</a>
                                    </form>
                                </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3" style="background:yellowgreen">
                Xác Thực thông tin cá nhân
                <div>
                    <p>hihihih</p>
                    <p>hihihih</p>
                    <p>hihihih</p>
                    <p>hihihih</p>
                    <p>hihihih</p>

                </div>
            </div>
        </div>
    </div>


</body>

<br>

<footer class="footerr">
    <?php include 'footer.php' ?>
</footer>
</html>