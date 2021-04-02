<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
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

        #adminPage {
            display: none;
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
    </style>

</head>

<body>

   

        <div style="background-image:url(images/admin.jpg)" class="container-fluid">        
            <div class="row">

                <div class="col-sm-2 col-md-3 col-lg-4">
                </div>

                <div class="login col-sm-8 col-md-6 col-lg-4">
                    <h1 id='loginadmin'> Login Admin</h1>
                    <div class="login-form">
                        <form method="post">
                        <div class="form-group">
                            <input class="form-control" value="" placeholder="Name" name="username" type="text">
                        </div>

                        <div class="form-group"> 
                            <input class="form-control" value="" placeholder="Password"
                                name="password" type="password">
                        </div>

                        <div class="form-group">
                            <input type="submit" name="login_admin" class="btn btn-info" value="Đăng Nhập"/>                           
                        </div>
                    
                        </form>
                       
                    </div>

                     <div class="col-sm-2 col-md-3 col-lg-4">
                    </div>
                </div>
            </div>
        </div>
        <?php 
            if(isset($_POST['login_admin'])){
                $nameAdmin=$_POST['username'];
                $passAdmin=$_POST['password'];

                if($nameAdmin=="admin"&&$passAdmin==123){
                    header("location:http://localhost/MySQL-PHP/admin/admin.php");
                }else{
                    echo '<script language="javascript">';
                    echo 'alert("Đăng nhập thất bại!")';
                    echo '</script>';
                }
            }      
        ?>
</body>
</html>