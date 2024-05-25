<?php
ob_start();
class User extends Controller
{
    public $GetProduct;
    public $InsertUser;
    public $GetUser;
    public $UpdateUser;

    public function __construct()
    {
        $this->GetProduct = $this->model("GetProduct");
        $this->InsertUser = $this->model("InsertUser");
        $this->GetUser = $this->model("GetUser");
        $this->UpdateUser = $this->model("UpdateUser");

    }
     function GetPagesForgetPass(){
        $this->view("UserPage", ["Pages" => "ForgetPass"]);
}
    function GetEmail(){
        $error = [];
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $result = $this->GetUser->GetUserDB($email);
            if($result ->num_rows == 0){  
                $error['emailfail'] = "Email này không tồn tại";
                }else{
                    $code = substr(rand(0,999999),0,6);
                    $title = "Quên mật khẩu";
                    $content = "Mã xác nhận của bạn là: <span style='color:green'>$code</span>";
                    require_once __DIR__ . '/../libraries/index.php';
                    $mail = new Mailer();
                    $mail->sendMail($title, $content, $email);
        
                    $_SESSION['mail'] = $email;
                    $_SESSION['code'] = $code;
                    // Chỉ chuyển hướng khi biến flag là true
                    header('location: http://localhost/projectPTIT/User/GetPagesVerification');
                    exit();
    }
    $this->view("UserPage", ["Pages" => "ForgetPass", "error" =>$error['emailfail'] ]);
}
    }
    function GetPagesVerification(){
        $this->view("UserPage", ["Pages" => "Verification"]);
    }
    function GetOTP(){
        if(isset($_POST['submit'])){
            $error = [];
            if($_POST['text'] != $_SESSION['code']){
                $error['fail'] = "Mã xác nhận không hợp lệ !";
            }else{
                header('location: http://localhost/projectPTIT/User/GetPagesResetPass');
            }
            $this->view("UserPage", ["Pages" => "Verification", "error" =>$error['fail'] ]);
        }
    }
    function GetPagesResetPass(){
        $this->view("UserPage", ["Pages" => "ResetPass"]);
    }
    function UpdatePassWord(){
        if(isset($_POST['submit'])){
            $error = [];
            $password =  $_POST['newpassword'];
            if($_POST['confirmpassword'] != $password){
                $error['confirmfail']= 'Nhập lại mật khẩu không khớp !';
            }else{
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $error['success'] = 'Đổi mật khẩu thành công ! Hãy trở về trang Sign In để đăng nhập';
                $result = $this->UpdateUser->UpdateNewPass($hashedPassword, $_SESSION['mail']);
            }
            $this->view("UserPage", ["Pages" => "ResetPass", "errorfail" => $error['confirmfail'] ?? null  ,"errorsuccess" => $error['success'] ?? null]);
        }
    }
   
    function SignUp()
    {
        $this->view("UserPage", ["Pages" => "SignUp"]);
    }
    function Logout()
    {
        unset($_SESSION["role_id"]);
        header("Location: http://localhost/projectPTIT/User/SignIn");
        exit(); // Add exit() to ensure the script stops executing after the redirect
    }

    function DangKyUser()
    {
        $errors = [];
        if (isset($_POST["btnRegister"])) {
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $role_id = 0;
            $confirmpassword = $_POST['confirmpassword'];
            if ($password !== $confirmpassword) {
                $errors['confirmpassword'] = "Password và Confirm Password không khớp nhau!";
                $this->view("UserPage", ["Pages" => "SignUp", "Error" => $errors['confirmpassword']]);
                return; // Dừng thực thi nếu có lỗi
            }
            $resultname = $this->GetUser->GetNameUser($username);
            if (mysqli_num_rows($resultname) > 0) {
                $errors['username'] = "Tên này đã tồn tại hãy đặt tên khác !";
                $this->view("UserPage", ["Pages" => "SignUp", "Errorname" => $errors['username']]);
                return; // Dừng thực thi nếu có lỗi
            }
            $result = $this->GetUser->GetUserDB($email);
            if (mysqli_num_rows($result) > 0) {
                $errors['email'] = "Email này đã tồn tại!";
                $this->view("UserPage", ["Pages" => "SignUp", "Erroremail" => $errors['email']]);
                return; // Dừng thực thi nếu có lỗi
            }
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $this->InsertUser->InsertNewUser($username, $email, $hashedPassword, $role_id);
            $_SESSION['email'] = $email;
            // Không nên lưu mật khẩu vào phiên, ngay cả khi đã mã hóa
            //  $_SESSION['password'] = $hashedPassword;
            // Chuyển hướng đến trang đăng nhập
            header("Location: http://localhost/projectPTIT/User/SignIn");
            exit();
        }
    }
    function SignIn()
    {
        $this->view("UserPage", ["Pages" => "SignIn"]);
    }
    function GetUser()
    {
        if (isset($_POST["btnLogin"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $users = $this->GetUser->GetUsers();
            while ($row = mysqli_fetch_assoc($users)) {
                if (password_verify($password, $row['password'])) {
                    $kq = $this->GetUser->GetUserDB($email);
                    if (mysqli_num_rows($kq)) {
                        $r = mysqli_fetch_assoc($kq);
                        $id = $r['id'];
                        $_SESSION['id'] = $id;
                        $_SESSION['role_id'] = $r['role_id'];
                        $_SESSION['fullname'] = $r['fullname'];
                        $_SESSION['email'] = $r['email'];
                        $_SESSION['avatar'] = $r['avatar'];
                        $this->checkRoleID();
                        // header("Location: http://localhost/projectPTIT/Home/Main");                               
                        ob_end_flush();
                        exit();
                    }
                } else {
                    $error_message = "Tên đăng nhập hoặc mật khẩu không chính xác!";
                    $this->view("UserPage", ["Pages" => "SignIn", "Error" => $error_message]);
                }
            }



        }
    }

    function checkRoleID()
    {
        if (isset($_SESSION['role_id'])) {
            if ($_SESSION['role_id'] == 0) {
                header("Location: http://localhost/projectPTIT/Home/Main");
                exit();
            } else if ($_SESSION['role_id'] == 1) {
                header("Location: http://localhost/projectPTIT/Admin/QLSP");
                exit();
            }
        }
    }

    function LogoutUser() {
        if (isset($_POST['logoutBtn'])) {
            session_unset();
            session_destroy();
            header("Location: " . ROOT . "User/SignIn"); 
            exit();
        }
    }
}
?>