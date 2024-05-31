<?php
if(isset($_SESSION['role_id']) && ($_SESSION['role_id'] == 1)){
    class Admin extends Controller{
        public $InsertProduct;
        public $GetProduct;
        public $DeleteProduct;
        public $UpdateProduct;
        public $GetUser;
        public $DeleteUser;       
        public $UpdateRole;
        public function __construct(){
            $this->InsertProduct = $this->model("InsertProduct");
            $this->GetProduct = $this->model("GetProduct");
            $this->DeleteProduct = $this->model("DeleteProduct");
            $this->UpdateProduct = $this->model("UpdateProduct");
            $this->GetUser = $this->model("GetUser");
            $this->DeleteUser = $this->model("DeleteUser");
            $this->UpdateRole = $this->model("UpdateRole");

        }
        function QLSP() {
            $products = $this->GetProduct->GetValuesProduct();
            $this->view("AdminPage",["Pages"=>"QLSP","products"=>$products]);
        }
        function QLND() {
            $users = $this->GetUser->GetUsers();
            $this->view("AdminPage",["Pages"=>"QLND","users"=>$users]);
        }

        function DeleteUser($param) {
            $result = $this->DeleteUser->DeleteUser($param);
            if($result){
                $this->QLND();
            }
        }
        function UpdateRole($userId) {
            $user = $this->GetUser->GetUserById($userId);
            if ($user) {
                $this->view("AdminPage", ["Pages" => "UpdateRole", "user" => $user]);
            }
        }

        function UpdateUserRole() {
            if (isset($_SERVER['CONTENT_TYPE']) && $_SERVER['CONTENT_TYPE'] === 'application/json') {
                $data = json_decode(file_get_contents('php://input'), true);
        
                // lay du lieu tu json
                $userId = $data['userId'];
                $newRoleId = $data['role_id'];
        
                // cap nhat vao csdl
                $result = $this->UpdateRole->UpdateUserRole($userId, $newRoleId);
                if ($result) {
                    
                    echo json_encode(array("success" => true));
                } else {
                    
                    echo json_encode(array("success" => false, "message" => "Update failed"));
                }
            } else {
                
                if (isset($_POST['btnUpdateRole'])) {
                    $userId = $_POST['userId'];
                    $newRoleId = $_POST['role_id'];
                    $result = $this->UpdateRole->UpdateUserRole($userId, $newRoleId);
                    if ($result) {
                        $this->QLND(); 
                    }
                }
            }
        }
        
        function Main() {
            $products = $this->GetProduct->GetValuesProduct();
            $this->view("AdminPage",["Pages"=>"Main","product"=> $products]);
        }
        function AddProduct() {
            $test = $this ->GetProduct->GetValuesProduct();
            $this->view("AdminPage",["Pages"=>"AddProduct","test"=> $test]);
        }
        function AddProductSuccess() {
            $this->view("AdminPage",["Pages"=>"AddProductSuccess"]);
        }
        function UpdateProductSuccess() {
            $this->view("AdminPage",["Pages"=>"UpdateProductSuccess"]);
        }
        function DeleteProduct($param) {
            $result = $this->DeleteProduct->DeleteValuesProduct($param);
            if($result){
                $this->QLSP();
            }
        }
        function UpdateProduct($param) {
            $products = $this->UpdateProduct->GetIdProduct($param);
            if($products){
                $this->view("AdminPage",["Pages"=>"UpdateProduct","product"=> $products]);
            }
        }

       
        
        function Product() {
            // UPDATE PRODUCT
            if(isset($_POST["btnUpdate"])) {
                $productName = $_POST["ProductName"];
                $id = $_POST["id"];
                $productPrice = $_POST['ProductPrice'];
                $productDesc = $_POST['ProductDesc'];
                $products = $this->UpdateProduct->GetIdProduct($id);
                $row = mysqli_fetch_assoc($products);
                if($_FILES['thumbnail']['name'] == ''){
                    $thumbnailpath = $row['thumbnail'];
                }
                else{
                    $thumbnailpath = basename($_FILES['thumbnail']['name']);    
                    $target_dir = "./assets/img/products/";
                    $target_file = $target_dir . $thumbnailpath;
                    $productImg = $_FILES['thumbnail']['tmp_name'];
                    move_uploaded_file($productImg, $target_file);
                }
                $kq = $this->UpdateProduct->UpdateValuesProduct($productName,$productPrice,$productDesc,$thumbnailpath,$id);
                if($kq){
                    $this->UpdateProductSuccess();
                }
            }
            // ADD PRODUCT
            if(isset($_POST["btnAdd"])) {
                $productName = $_POST["ProductName"];
                $productPrice = $_POST['ProductPrice'];
                $productDesc = $_POST['ProductDesc'];
                $thumbnailpath = basename($_FILES['thumbnail']['name']);    
                $target_dir = "./assets/img/products/";
                $target_file = $target_dir . $thumbnailpath;
                $productImg = $_FILES['thumbnail']['tmp_name'];
                
                if(move_uploaded_file($productImg, $target_file)){
                    $product_id = $this->InsertProduct->InsertNewProduct($productName, $productPrice, $productDesc, $thumbnailpath);
                        if($product_id){
                            $galeryid = $this->InsertProduct->InsertGalery($thumbnailpath, $product_id);            
                                if($galeryid){
                                    $this->AddProductSuccess();
                                }
                        }
                }
            }
        }

    }           
}  else{
    header("Location: http://localhost/projectPTIT/User/SignIn");
}
?>
