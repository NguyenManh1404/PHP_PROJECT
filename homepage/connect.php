<?php
class connect{

    //chứa thông tin localhost
     private $host ='localhost';
    //Tài khoản truy cập mysql
    private $username='root';
    //Password truy cập mysql
    private $password='';
    //Database mình muốn sử dụng
    private $database='project_php';
    //Biến kết nối với mysql
    public $connect;
    //Dạng kí tự
    private $charset = 'utf8';


    //Function kết nối
   public function connect()
    {
        //Nếu chưa kết nối thì kết nối
       if(!$this->connect){
           //Tiến hành kết nối với mysql
           $this->connect = mysqli_connect($this->host,$this->username,$this->password,$this->database);
           if (mysqli_connect_errno()) {
               echo 'Failed: '. mysqli_connect_error();
               die();
           }
           //Đặt kí tự 
           mysqli_set_charset($this->connect,$this->charset);
       }    
    }


   //Function hủy kết nối
   public function disConnect()
    {
       if($this->connect)
           mysqli_close($this->connect);
    }
}
?>