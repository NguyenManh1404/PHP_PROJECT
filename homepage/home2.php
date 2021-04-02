<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ẨM THỰC</title>
</head>

<?php
if (isset($_POST['dangxuat'])) {
    unset($_SESSION['user_name']);
    header("location:http://localhost/PROJECT_PHP_31_3/homepage/home1.php");
}
?>

<body>
    <?php include_once 'header2.php'; ?>

    <?php include_once 'content.php'; ?>
</body>
<footer>
    <?php include_once 'footer.php' ?>
</footer>



</html>