<!-- Gọi file connect -->
<?php
session_start();
require_once '../connect.php';
require_once '../users.php';

?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Đăng Nhập</title>
	<script src="js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- //for-mobile-apps -->
	<!--Google Fonts-->
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
	<!-- Link jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Link css -->
	<link rel="stylesheet" href="signin.css">
</head>

<body>

	<!--header start here-->
	<div class="header">
		<div class="header-main">
			<h1 style="color:black;font-weight: bold;">Đăng Nhập</h1>
			<div class="header-bottom">
				<div class="header-right w3agile">
					<div class="header-left-bottom agileinfo">
						<form action="#" method="post">

							<input style="color:black;font-weight: bold;" type="text" name="name" placeholder=" Enter Your User_name" />
							<input style="color:black;font-weight: bold;" type="password" name="password" placeholder="Enter Your Password" />
							<div class="remember">
								<span class="checkbox1">
									<label class="checkbox" style="color:black;font-weight: bold;"><input type="checkbox" name="" checked=""><i> </i>Remember
										me</label>
								</span>
								<div class="forgot">
									<h6><a href="#" style="font-weight: bold;">Forgot Password?</a></h6>
								</div>
								<div class="clear"> </div>
							</div>

							<input type="submit" name="login" value="Login">
						</form>
						<div class="header-left-top">
							<div class="sign-up">
								<h2>or</h2>
							</div>

						</div>
						<div class="header-social wthree">
							<a href="#" class="face">
								<h5>Facebook</h5>
							</a>
							<a href="#" class="twitt">
								<h5>Twitter</h5>
							</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>

<?php
if (isset($_POST['login'])) {
	
	//Khởi tạo đối tượng class connect
	$conn = new connect();
	$conn->connect();
	
	//Lấy dữ liệu từ form đăng nhập
	$username = $_POST['name'];
	$password = $_POST['password'];

	$user=new users();

	if ($user->checklogin($conn,$username, $password) == 1) {			
		$_SESSION['user_name']=$username;
		header("location:http://localhost/PROJECT_PHP_31_3/homepage/home2.php");

	} else {
		echo '<script language="javascript">';
		echo 'alert("Đăng nhập không thành công!")';
		echo '</script>';
	}



	// //Kiểm tra xem dữ liệu nhập vào có trống hay không
	// if(empty($username) && empty($password)){
	// 		echo '<script language="javascript">';
	// 		echo 'alert("Đăng nhập không thành công! Dữ liệu trống")';
	// 		echo '</script>';
	// 	exit;
	// }else{

	// 	//lấy dữ liệu tất cả của user có tên trùng với tên nhập vào
	// 	$query_one_user=" SELECT * FROM users where user_name like '$username' and pass_word like '$pass' ";
	// 	$result = mysqli_query($data->connect(),$query_one_user);
	// 	//Đếm xem có tồn tại tên tài khoản này không
	// 	$count = mysqli_num_rows($result);

	// 	if($count>0){

	// 		foreach($result as $object){
	// 			if($username==$object['user_name'] && $password==$object['pass_word']){
	// 				$_SESSION['user_name']=$username;						
	// 				header("location:http://localhost/MySQL-PHP/homepage/home2.php");		

	// 			}
	// 		}
	// 	}else{
	// 				echo '<script language="javascript">';
	// 				echo 'alert("Đăng nhập không thành công!")';
	// 				echo '</script>';
	// 	}
	// }
}
?>