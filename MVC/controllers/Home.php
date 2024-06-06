<?php
    class Home extends controller{
        public $GetProduct;
        public $GetUser;
        public $UpdateUser;
        public $Orders;
        public function __construct(){
            $this->GetProduct = $this->model("GetProduct");
            $this->GetUser = $this->model("GetUser");
            $this->UpdateUser = $this->model("UpdateUser");
            $this->Orders = $this->model("Orders");
        }
        function Main() {
            if(isset($_COOKIE['user_id'])) {
                $user_id = $_COOKIE['user_id'];
                $user = $this->GetUser->GetUserValues($user_id);
                $r = mysqli_fetch_assoc($user);
                $_SESSION['id'] =  $r['id'];
                $_SESSION['role_id'] = $r['role_id'];
                $_SESSION['fullname'] = $r['fullname'];
                $_SESSION['email'] = $r['email'];
                $_SESSION['avatar'] = $r['avatar'];
                $_SESSION['phone_number'] = $r['phone_number'];
            }
            $products = $this->GetProduct->GetValuesProduct();
            $this->view("master1",["Pages"=>"Main","product"=> $products]);
        }
        function ProductDetail($id) {
            $products = $this->GetProduct->GetValuesProductID($id);
            $galery =  $this->GetProduct->GetGalery($id);
            $this->view("master1",["Pages"=>"ProductDetail","products"=> $products,"imgs" => $galery]);
        }
        function AddNewCard() {
            $id = $_SESSION['id'];
            $users = $this->GetUser->GetUserValues($id);
            $this->view("master1",["Pages"=>"AddNewCard","users"=>$users]);
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
            $id = $_SESSION['id'];
            $users = $this->GetUser->GetUserValues($id);
            $this->view("master1",["Pages"=>"PayMent","users"=>$users]);
        }
        function Profile() {
            $id = $_SESSION['id'];
            $users = $this->GetUser->GetUserValues($id);
            $this->view("master1",["Pages"=>"Profile","users"=>$users]);
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
            function GetIdCart() {
                if(isset($_POST["PayBtn"])) {
                $name = $_POST['Fullname'];
                $email = $_POST['email'];
                $phone = $_POST['PhoneNumber'];
                $address = $_POST['Address'];
                $id = $_SESSION['id'];
                    $prodIds = json_decode($_POST['prodIds']);
                    $total = 0;
                    foreach($prodIds as $prodId) {
                        $products = $this->GetProduct->GetValuesProductID($prodId);
                        $row = mysqli_fetch_assoc($products);
                        $discounted_price = $row["price"] - ($row["price"] * ($row["discount"] / 100));
                        $total += $discounted_price;

                    }
                    $Orders = $this->Orders->InsertOrder($id,$name,$email,$phone,$address,$total);
                    $OrdersValue = $this->Orders->GetOrders($id);
                    $orders = mysqli_fetch_assoc($OrdersValue);
                    $orderId = $orders["id"];
                    foreach($prodIds as $prodId) {
                        $products = $this->GetProduct->GetValuesProductID($prodId);
                        $row = mysqli_fetch_assoc($products);
                        $discounted_price = $row["price"] - ($row["price"] * ($row["discount"] / 100));
                        // Tạo một key duy nhất cho mỗi sản phẩm dựa trên ID sản phẩm
                        $productKey = 'prod_' . $prodId;
                        if(isset($productInfo[$productKey])) {
                            // Nếu sản phẩm đã tồn tại trong mảng $productInfo, cập nhật số lượng và tổng giá trị
                            $productInfo[$productKey]['quantity'] += 1;
                            $productInfo[$productKey]['totalProd'] += $discounted_price;
                        } else {
                            // Nếu sản phẩm chưa tồn tại trong mảng $productInfo, thêm mới sản phẩm vào mảng
                            $productInfo[$productKey] = array(
                                'quantity' => 1,
                                'totalProd' => $discounted_price
                            );
                        }
                        }
                        foreach ($productInfo as $prodKey => $product) {
                            $prodId = substr($prodKey, 5);
                            $products = $this->GetProduct->GetValuesProductID($prodId);
                            $row = mysqli_fetch_assoc($products);
                            $discounted_price = $row["price"] - ($row["price"] * ($row["discount"] / 100));
                            $this->Orders->InsertOrderDetail($orderId, $prodId, $discounted_price, $product['quantity'], $product['totalProd']);
                        }
                        
                }
            }
        }
?>