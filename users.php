<?php
$conn = new connect();
$conn->connect();
class users
{

    public  $id;
    public $user_name;
    public  $email;
    public $pass;

    public function getId()
    {
        return $this->id;
    }
    public function getUser_name()
    {
        return $this->user_name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPass()
    {
        return $this->pass;
    }


    public function input($id,$user_name,$email,$pass){
        $this->id=$id;
        $this->user_name=$user_name;
        $this->email=$email;
        $this->pass=$pass;
    }

    

    //Kiểm tra login
    public function checkLogin($conn,$user, $pass)
    {     
        $query_one_user = " SELECT * FROM users where user_name like '$user' and pass_word like '$pass' ";
        $result = mysqli_query($conn->connect, $query_one_user);      
        //Đếm xem có tồn tại tên tài khoản này không
        $count = mysqli_num_rows($result);
        if ($count > 0) {
           
            return 1;
        } else {
            return 0;
        }
    }



    //Kiểm tra đăng kí
    public function checkSignup($conn,$user, $email, $pass)
    {
        $query_one_user = " SELECT * FROM users where user_name like '$user' and email like '$email' ";
        $result = mysqli_query($conn->connect, $query_one_user);

        $countuser = mysqli_num_rows($result);
       
        if ($countuser > 0) {
            return 1;
        } else {   
                
            $sql = " INSERT INTO users values( '$user','$email',' ','  ','$pass', now() ) "; 

            if (mysqli_query($conn->connect,$sql)) {
               
                return 0;
            }
            else
                echo $conn->connect->error;
        }
    }

    

    //Admin

    //Check update
    public function checkUpdate($conn,$user_name,$email){
        $query_one_user="SELECT * FROM users where user_name like '$user_name' and email like '$email' ";

        $result = mysqli_query($conn->connect,$query_one_user);

        $count=mysqli_num_rows($result);

        if($count>0){
            return 1;
        }else{           
            return 0;
        }
    }
    //Xóa user
    public function deleteUser($conn,$email_user){
        $sql=" DELETE FROM users where email = '$email_user' ";
        if(mysqli_query($conn->connect,$sql)){
            return 1;
        }else{
            echo $conn->connect->error;
            return 0;
        }
    }
    //Kiểm tra insert dữ liệu
    public function checkInsertUser($conn,$ten, $email,$sdt,$address,$pass)
    {
        $query_count = " SELECT * FROM users where user_name like '$ten'  and email like '$email' and phone like '$sdt' ";
        $result = mysqli_query($conn->connect, $query_count);
        $count = mysqli_num_rows($result);
        echo $count;
        if ($count > 0) {
            return 0;
        } else {
            return 1;
        }
    }
 
}
?>