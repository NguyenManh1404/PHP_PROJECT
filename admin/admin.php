<?php
include '../connect.php';
$conn = new connect();
$conn->connect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .container-fluid {
            height: 1000px;
        }

        .login {
            margin-top: 10%;
        }


        #loginadmin {
            color: wheat;
            font-family: fantasy;
            text-align: center;
            color: white;
        }

        button :hover {
            background-color: white;

        }


        nav {
            background-color: rgb(165, 160, 218);
        }

        .nav-link {
            color: white;
        }

        #cssapiIMG {
            height: 100px;
            width: 100px;
        }

        th {
            text-align: center;
        }
    </style>
</head>
<?php 
    //Thêm user
    if(isset($_POST['add']))
        {
           
        }


?>







<body>
    <div id="adminPage">

        <div class="navbar fixed-top navbar-expand-xl navbar-expand-lg navbar-expand-md navbar-expand-sm">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#users">Quản lý người dùng</a></li>
                <li><a data-toggle="tab" href="#products">Quản lý sản phẩm</a></li>
                <li><a data-toggle="tab" href="#order">Quản lý đơn hàng</a></li>
            </ul>
        </div>

        <footer>
            <!--Nội dung chuyển đổi của các tab-->
            <div class="tab-content">
                <!--Quản lí người dùng-->
                <div id="users" class="container tab-pane fade in active">
                    <div class="title">
                        <h3>QUẢN LÝ NGƯỜI DÙNG </h3>
                    </div>
                    <form method="post">
                        <input type="submit" name="add" value="Thêm" class="btn btn-outline-success ">
                    </form>
                    <div class="panel panel-info">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light text-center">
                                <tr>

                                    <th>User_name</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa Chỉ</th>
                                    <th>Password</th>
                                    <th>Create day</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>

                            <tbody class="text-center" id="user">
                                <form method="get">
                                    <?php
                                    $sql = "SELECT * FROM users";

                                    $result = mysqli_query($conn->connect, $sql);
                                    foreach ($result as $value) {
                                    ?> <tr>
                                            <td><?php echo $value['user_name'] ?> </td>
                                            <td><?php echo $value['email'] ?> </td>
                                            <td><?php echo $value['phone'] ?> </td>
                                            <td><?php echo $value['address'] ?> </td>
                                            <td><?php echo $value['pass_word'] ?> </td>
                                            <td><?php echo $value['created_day'] ?> </td>
                                            <td><a href="xuli.php?user_name=<?php echo $value['user_name'] ?>&action=update" class="fas fa-user-edit"></a></td>
                                            <td><a href="xuli.php?email=<?php echo $value['email'] ?>" class="fas fa-trash"></a></td>
                                        </tr>

                                    <?php
                                    }
                                    ?>
                                </form>

                            </tbody>
                        </table>
                    </div>

                </div>


                <!-- Quản lí sản phẩm-->
                <div id="products" class="tab-pane fade">
                    <div>
                        <div class="title">
                            <h1>QUẢN LÝ SẢN PHẨM </h1>
                        </div>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
                            <i class="fas fa-plus mr-2"></i> Create</button>

                        <table class="table">
                            <thead class="thead-light text-center" style="position: relative; left: 100px;">
                                <tr>
                                    <th>Mã món</th>
                                    <th>Tên món</th>
                                    <th>Giá VNĐ</th>
                                    <th>Hình ảnh </th>
                                    <th>Chi tiết</th>
                                    <th>Cập nhật</th>

                                </tr>
                            </thead>

                            <tbody class="text-center" id="product">

                            <form method="get">
                            <?php
                           
                           
                            $sql = "SELECT * FROM products";

                            $result = mysqli_query($conn->connect, $sql);
                            foreach ($result as $value) {
                            ?> <tr>
                                    <td><?php echo $value['id'] ?> </td>
                                    <td><?php echo $value['name_product'] ?> </td>
                                    <td><?php echo $value['price_products'] ?> </td>

                                    <td><img src="../homepage/<?php echo $value['image_products'] ?>" alt=""></td>


                                    <td><?php echo $value['detail'] ?> </td>
                                    
                                    
                                    <td><a href="xuli.php?id=<?php echo $value['id'] ?>&action=update" class="fas fa-user-edit"></a></td>
                                    <td><a href="xuli.php?id=<?php echo $value['id'] ?>" class="fas fa-trash"></a></td>
                                </tr>

                            <?php
                            }
                            ?>
                            <style>
                                img{
                                    width: 50px;
                                }
                            </style>
                        </form>
            
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Quản lí đơn hàng -->
                <div id="order" class=" tab-pane fade in ">
                    <div class="title">
                        <h3>QUẢN LÝ ĐƠN HÀNG </h3>
                    </div>

                    <div class="panel panel-info">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light text-center">
                                <tr>

                                    <th>User_name</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá tiền</th>
                                    <th>Địa Chỉ</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody class="text-center">
                                <?php

                                $sql_query = "SELECT products.name_product,orders.user_name 
                                    FROM (((detailorder 
                                    INNER JOIN products ON detailorder.id_Product = products.id)
                                    INNER JOIN orders ON detailorder.id_Order = orders.id)    
                                    inner join users on orders.user_name=users.user_name) 
                                    ";

                                if (mysqli_query($conn->connect, $sql_query)) {
                                    echo "hihihihhi";
                                } else {
                                    echo $conn->connect->error;
                                }
                                $result = mysqli_query($conn->connect, $sql_query);
                                foreach ($result as $value) {
                                ?>
                                    <tr>
                                        <td><?php echo $value['user_name'] ?> </td>
                                        <td><?php echo $value['email'] ?> </td>

                                    </tr>
                                <?php
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </footer>
    </div>
</body>

</html>