<?php
include '../connect.php';
include '../users.php';
$conn = new connect();
$conn->connect();
$user = new users();

if(isset($_GET['action'])){
    $action=$_GET['action'];
}

if(isset($_GET['email'])){
   $emaildele=$_GET['email'];

    if($user->deleteUser($conn,$emaildele)==1){
        header('location:http://localhost/PROJECT_PHP_31_3/admin/admin.php');
       }else{
           echo "Xóa thất bại";
       }
}




if (isset($_GET['user_name']) && $action='update') {
    $user_name = $_GET['user_name'];
    $sql_update = "SELECT * from users where user_name= '$user_name' ";
    $result = mysqli_query($conn->connect, $sql_update);
?>
    <table class="table table-bordered table-hover">
        <thead class="thead-light text-center">
            <tr>
                <th>User_name</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa Chỉ</th>
                <th>Password</th>
                <th>Create day</th>
            </tr>
        </thead>
        <tbody class="text-center" id="user">
            <form method="post">
                <?php
                foreach ($result as $value) {
                ?> <tr>
                        <td><input type="text" name="update_username" value="<?php echo $value['user_name'] ?>"> </td>
                        <td><input type="email" name="update_email" value="<?php echo $value['email'] ?>"> </td>
                        <td><input type="text" name="update_phone" value=" <?php echo $value['phone'] ?> "> </td>
                        <td><input type="text" name="update_address" value=" <?php echo $value['address'] ?>"> </td>
                        <td><input type="text" name="update_pass" value="<?php echo $value['pass_word'] ?>"> </td>
                        <td><?php echo $value['created_day'] ?> </td>
                    </tr>

                <?php
                }
                ?>
                <tr> <input type="submit" name="update" class="btn btn-outline-success " value="Update User"> </tr>
                <tr><input type="submit" name="cancel" value="Hủy"> </tr>
            </form>
        </tbody>
    </table>
<?php
}


if (isset($_POST['update'])) {
    $user_namee = $_POST['update_username'];
    $email = $_POST['update_email'];
    $phone = $_POST['update_phone'];
    $address = $_POST['update_address'];
    $pass = $_POST['update_pass'];

   
    if ($user->checkUpdate($conn, $user_namee, $email) == 0) {
        echo "hihiihhi";
        $update = "UPDATE users SET user_name = '$user_namee', email ='$email',phone ='$phone',address='$address', pass_word='$pass' where user_name='$user_name' ";
        if (mysqli_query($conn->connect, $update)) {
            header('location:http://localhost/PROJECT_PHP_31_3/admin/admin.php');
        } else {
            $conn->connect->error;
        }
    } else {
        echo "Cập nhật thất bại";
        echo " TÊN TÀI KHOẢN hoặc EMAIL chưa được thay đổi";
    }
}

if (!empty($_POST['cancel'])) {
    header('location:http://localhost/PROJECT_PHP_31_3/admin/admin.php');
}
?>


