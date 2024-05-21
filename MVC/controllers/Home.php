<?php
    class Home extends controller{
        public $GetProduct;
        public $GetUser;
        public $UpdateUser;
        public function __construct(){
            $this->GetProduct = $this->model("GetProduct");
            $this->GetUser = $this->model("GetUser");
            $this->UpdateUser = $this->model("UpdateUser");
        }
        function Main() {
            $products = $this->GetProduct->GetValuesProduct();
            $this->view("master1",["Pages"=>"Main","product"=> $products]);
        }
        function ProductDetail($id) {
            $products = $this->GetProduct->GetValuesProductID($id);
            $this->view("master1",["Pages"=>"ProductDetail","products"=> $products]);
        }
        function AddNewCard() {
            $this->view("master1",["Pages"=>"AddNewCard"]);
        }
        function CheckOut() {
            $this->view("master1",["Pages"=>"CheckOut"]);
        }
        function EditPersonalInfo() {
            $id = $_SESSION['id'];
            $users = $this->GetUser->GetUserValues($id);
            $this->view("master1",["Pages"=>"EditPersonalInfo","users"=>$users]);
        }
        function Favourite() {
            $this->view("master1",["Pages"=>"Favourite"]);
        }
        function PayMent() {
            $this->view("master1",["Pages"=>"PayMent"]);
        }
        function Profile() {
            $id = $_SESSION['id'];
            $users = $this->GetUser->GetUserValues($id);
            $this->view("master1",["Pages"=>"Profile","users"=>$users]);
        }
        function Shipping() {
            $this->view("master1",["Pages"=>"Shipping"]);
        }
        function Admin() {
            $this->view("master1",["Pages"=>"Admin"]);
        }
        // GET FORM
        function UpdateUser() {
            if(isset($_POST["UpdateUserBtn"])) {
                $name = $_POST['fullname'];
                $email = $_POST['email'];
                $phone = $_POST['phone_number'];
                $address = $_POST['address'];
                $avatar ='';
                $id = $_SESSION['id'];
                $user = $this->GetUser->GetUserValues($id);
                $row = mysqli_fetch_assoc($user);
                if($_FILES['avatar']['name'] == ''){
                    $avatarpath = $row['avatar'];
                }
                else{
                    $avatarpath = basename($_FILES['avatar']['name']);    
                    $target_dir = "./assets/img/avatar/";
                    $target_file = $target_dir . $avatarpath;
                    $avatar = $_FILES['avatar']['tmp_name'];
                    move_uploaded_file($avatar, $target_file);
                }
                $kq = $this->UpdateUser->UpdateNewUser($id,$name,$email,$phone,$address,$avatarpath);
                if($kq) {
                    $_SESSION['id'] = $id;
                    $_SESSION['fullname'] = $name;  
                    $_SESSION['phone_number'] = $phone;
                    $_SESSION['email'] = $email;
                    if($_SESSION['avatar'] == null || $_SESSION['avatar'] != '') {
                        $_SESSION['avatar'] = $avatarpath;
                    }
                    else{
                        $_SESSION['avatar'] = $row['avatar'];
                    }
                    header("Location: http://localhost/projectPTIT/Home/Profile");
                }
                }
                else{
                    echo "Ket qua khong chinh xac";
                }
            }
        }
?>