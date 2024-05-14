<?php
    class User extends Controller{
        public $GetProduct;
         public $InsertUser;
         public $GetUser;
    
    public function __construct(){
        $this->GetProduct = $this->model("GetProduct");
        $this->InsertUser = $this->model("InsertUser");
        $this->GetUser = $this->model("GetUser");
    }
         function SignUp() {
        $this->view("UserPage",["Pages"=>"SignUp"]);
         }
        function DangKyUser(){
            if(isset($_POST["btnRegister"])){
                $email = $_POST["email"];
                $password = $_POST["password"];
                // echo $password;

                $kq = $this->InsertUser->InsertNewUser($email,$password);
                // echo $kq;
                header("Location: http://localhost/projectPTIT/User/SignIn");
                exit();  
            }
        }
        function SignIn() {
            $this->view("UserPage",["Pages"=>"SignIn"]);
        }
        function GetUser(){
            if(isset($_POST["btnLogin"])){
                $email = $_POST["email"];
                $password = $_POST["password"];

                $kq = $this->GetUser->GetUserDB($email,$password);
                if(mysqli_num_rows($kq)){
                    $r = mysqli_fetch_assoc($kq);
                    $id = $r['id'];
                    $_SESSION['email'] = $email;
                    header("Location: http://localhost/projectPTIT/Home/Main/$id");
                    exit();         
                }else {
                    $error_message = "Tên đăng nhập hoặc mật khẩu không chính xác!";
                    $this->view("UserPage",["Pages"=>"SignIn","Error"=>$error_message]);
                }
            
            }
        }
    }
?>