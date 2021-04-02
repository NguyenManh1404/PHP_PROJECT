<?php
session_start();
require_once '../connect.php';
require_once '../users.php';
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Đăng Kí</title>
	<script src="js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
			<h1 style="color:black;font-weight: bold;">Đăng Kí</h1>
			<div class="header-bottom">
				<div class="header-right w3agile">
					<div class="header-left-bottom agileinfo">
						<form action="#" method="post">
							<input style="color:black;font-weight: bold;" type="text" value="User name" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User name';}" />

							<input style="color:black;font-weight: bold;" type="email" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />

							<input style="color:black;font-weight: bold;" type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}" />

							<input style="color:black;font-weight: bold;" type="password" value="Password" name="password1" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}" />


							<div class="remember">
								<span class="checkbox1">
									<label class="checkbox" style="color:black;font-weight: bold;"><input type="checkbox" name="" checked=""><i> </i>Remember
										me</label>
								</span>

								<div class="clear">
								</div>
							</div>

							<input type="submit" name="signup" value="Sign Up">
						</form>
						<div class="header-left-top">
							<div class="sign-up">
								<h2>or</h2>
							</div>

						</div>
						<div class="header-social wthree">
							<a href="https://vi-vn.facebook.com/" class="face">
								<h5>Facebook</h5>
							</a>
							<a href="https://twitter.com/?lang=vi" class="twitt">
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


include '../sendemail/library.php';
require '../sendemail/vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$mail = new PHPMailer(true);



if (isset($_POST['signup'])) {
	//lấy dữ liệu từ form
	$username = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$passconfirm = $_POST['password1'];

	if ($pass == $passconfirm) {
		$conn = new connect();
		$conn->connect();
		$user = new users();

		echo "<br>";
		if ($user->checkSignup($conn, $username, $email, $pass) == 1) {
			echo '<script language="javascript">';
			echo 'alert("Đăng nhập không thành công! Username hoặc Email đã tồn tại!")';
			echo '</script>';
		} else {

			$mail->CharSet = "UTF-8";
                    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = SMTP_HOST;  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = SMTP_UNAME;                 // SMTP username
                    $mail->Password = SMTP_PWORD;                           // SMTP password
                    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = SMTP_PORT;                                    // TCP port to connect to
                    //Recipients
                    $mail->setFrom(SMTP_UNAME, "KikiZ.com");
                    $mail->addAddress($email, 'Tên người nhận');     // Add a recipient | name is option
                    $mail->addReplyTo(SMTP_UNAME, 'Tên người trả lời');                 
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = "Đăng kí tài khoản thành công";
                    $mail->Body = $username." ".$email." ".$pass;
                    $mail->AltBody = "Chào mừng bạn đến với chúng tôi! "; //None HTML
                    $result = $mail->send();

			$_SESSION['user_name'] = $username;
			header("location:http://localhost/PROJECT_PHP_31_3/homepage/home2.php");
		}
	} else {
		echo '<script language="javascript">';
		echo 'alert("Đăng nhập không thành công!Mật khẩu không khớp!")';
		echo '</script>';
	}
}
?>