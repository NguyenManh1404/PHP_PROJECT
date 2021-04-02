<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <title>Trang cá nhân</title>
    <link href="trangCaNhan.css" rel="stylesheet" type="text/css">
</head>

<body>

    <?php include 'header2.php' ?>
    <div class="">
        <div class="col-md-12">
            <p class="text-uppercase fs-3 fw-bolder">TRANG CÁ NHÂN CỦA TÔI</p>
            <p class="fw-normal">Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
        </div>

        <hr class="my">
    </div>
    <div class="row" style="margin-right: 10px;">

        <div class="col-sm-10 col-md-2">
   
            <span>  <img class="card-img-center rounded-circle " ; src="images/leky.JPG" width="70px" height="70px"> </span>
            <b><?php echo $_SESSION['user_name'] ?></b>

            <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="dashboard-nav" data-toggle="pill" href="#dashboard-tab" role="tab"><i class="bi bi-person-circle"></i> Trang cá nhân</a>
                <a class="nav-link" id="orders-nav" data-toggle="pill" href="#orders-tab" role="tab"><i class="bi bi-book-half"></i> Đơn hàng</a>
                <a class="nav-link" id="payment-nav" data-toggle="pill" href="#payment-tab" role="tab"><i class="fa fa-credit-card"></i> Thanh toán</a>
                <a class="nav-link" id="address-nav" data-toggle="pill" href="#address-tab" role="tab"><i class="bi bi-geo-alt"></i></i> Địa chỉ</a>
                <a class="nav-link" id="account-nav" data-toggle="pill" href="#account-tab" role="tab"><i class="fa fa-user"></i> Thay đổi mật khẩu</a>
                            
             </div>

        </div>

<div class="col-sm-10 col-md-8 border-end border-start">

    <div class="tab-content">

        <div class="tab-pane fade show active" id="dashboard-tab" role="tabpanel" aria-labelledby="dashboard-nav">
                                <h4>CẬP NHẬT THÔNG TIN CÁ NHÂN</h4>
                                <p>
                                <div id="list-item-1">
                
                <p>Tên đăng nhập: <?php echo $_SESSION['user_name'] ?> </p> <br>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">TÊN</label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="Tên của bạn" id="example-text-input">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">TÊN SHOP </label>
                        <div class="col-10">
                            <input class="form-control" type="text" value="Đặt tên shop" id="example-text-input">
                        </div>
                    </div>
                    <br>
                    <!-- rado -->
                    <label for="example-text-input" class="col-2 col-form-label">GIỚI TÍNH </label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Nam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Nữ</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                        <label class="form-check-label" for="inlineRadio3">Khác</label>
                    </div>
                    <br>
                    <br>
                    <div class="form-group row">
                        <label for="example-date-input" class="col-2 col-form-label">NGÀY SINH</label>
                        <div class="col-10">
                            <input class="form-control" type="date" value="2021-03-19" id="example-date-input">
                        </div>
                    </div>
                    <br>
                    <br>
                    <button type="button" class="btn btn-danger">LƯU</button>

                    <hr class="my">

                
                </div>
        
            </div>
                            <div class="tab-pane fade" id="orders-tab" role="tabpanel" aria-labelledby="orders-nav">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Product</th>
                                                <th>Date</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Product Name</td>
                                                <td>01 Jan 2020</td>
                                                <td>$99</td>
                                                <td>Approved</td>
                                                <td><button class="btn">View</button></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Product Name</td>
                                                <td>01 Jan 2020</td>
                                                <td>$99</td>
                                                <td>Approved</td>
                                                <td><button class="btn">View</button></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Product Name</td>
                                                <td>01 Jan 2020</td>
                                                <td>$99</td>
                                                <td>Approved</td>
                                                <td><button class="btn">View</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <hr class="my">

                            </div>

                            <div class="tab-pane fade" id="payment-tab" role="tabpanel" aria-labelledby="payment-nav">
                                <h4>Payment Method</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. In condimentum quam ac mi viverra dictum. In efficitur ipsum diam, at dignissim lorem tempor in. Vivamus tempor hendrerit finibus. Nulla tristique viverra nisl, sit amet bibendum ante suscipit non. Praesent in faucibus tellus, sed gravida lacus. Vivamus eu diam eros. Aliquam et sapien eget arcu rhoncus scelerisque.
                                </p> 

                                <hr class="my">

                            </div>

                            <div class="tab-pane fade" id="address-tab" role="tabpanel" aria-labelledby="address-nav">
                                <h4>Address</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Payment Address</h5>
                                        <p>123 Payment Street, Los Angeles, CA</p>
                                        <p>Mobile: 012-345-6789</p>
                                        <button class="btn">Edit Address</button>
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Shipping Address</h5>
                                        <p>123 Shipping Street, Los Angeles, CA</p>
                                        <p>Mobile: 012-345-6789</p>
                                        <button class="btn">Edit Address</button>
                                    </div>
                                </div>
                                <hr class="my">

                            </div>
                            <div class="tab-pane fade" id="account-tab" role="tabpanel" aria-labelledby="account-nav">
                                <h4>Account Details</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Last Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Mobile">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Email">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" placeholder="Address">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn">Update Account</button>
                                        <br><br>
                                    </div>
                                </div>
                                <h4>Password change</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="password" placeholder="Current Password">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="New Password">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Confirm Password">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn">Save Changes</button>
                                    </div>
                                </div>
                                <hr class="my">

                            </div>
        </div>
                    

            </div>

        




        <div class="col-sm-10 col-md-2 position-relative ">
            <div class="position-absolute start-50 translate-middle-x">
                <img class="card-img-center rounded-circle " ; src="images/products/small/products-09.png" width="100" height="100">
                <input type="file" id="anhdaidien" class="form-control" style="width:6rem">
            </div>

        </div>
    </div> 
    
    
</body>

<footer>
    <?php include 'footer.php'  ?>
</footer>

</html>