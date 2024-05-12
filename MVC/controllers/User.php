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
                $products = $this->GetProduct->GetValuesProduct();
                $this->view("master1",["Pages"=>"Main","product"=> $products]);

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
                    $_SESSION['email'] = $email;
                    $products = $this->GetProduct->GetValuesProduct();
                    $this->view("master1",["Pages"=>"Main","product"=> $products]);
                }else {
                    $error_message = "Tài khoản đăng nhập không đúng.";
                    echo $error_message;
                }
            
            }


            
        }
    }
?>