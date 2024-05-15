<?php
ob_start();
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
            $errors = [];
            if(isset($_POST["btnRegister"])){
                $email = $_POST["email"];
                $password = $_POST["password"];
                $confirmpassword = $_POST['confirmpassword'];
                if ($password !== $confirmpassword) {
                    $errors['confirmpassword'] = "Password và Confirm Password không khớp nhau!";
                    $this->view("UserPage", ["Pages" => "SignUp", "Error" => $errors['confirmpassword']]);
                    return; // Dừng thực thi nếu có lỗi
                }
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $this->InsertUser->InsertNewUser($email, $hashedPassword);
                $_SESSION['email'] = $email;
                  // Không nên lưu mật khẩu vào phiên, ngay cả khi đã mã hóa
                //  $_SESSION['password'] = $hashedPassword;
                 // Chuyển hướng đến trang đăng nhập
                 header("Location: http://localhost/projectPTIT/User/SignIn?email=" . urlencode($email). "&password=" . urlencode($password));
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
                $users = $this->GetUser->GetUsers();
                while ($row = mysqli_fetch_assoc($users)){
                    if(password_verify($password, $row['password'])) {
                        $kq = $this->GetUser->GetUserDB($email);
                        if(mysqli_num_rows($kq)){
                            $r = mysqli_fetch_assoc($kq);
                            $id = $r['id'];
                            header("Location: http://localhost/projectPTIT/Home/Main/$id");
                            exit();         
                            ob_end_flush();
                        }                     
                    }
                    else {
                        $error_message = "Tên đăng nhập hoặc mật khẩu không chính xác!";
                        $this->view("UserPage",["Pages"=>"SignIn","Error"=>$error_message]);
                    }
                }
            }
        }
    }
?>