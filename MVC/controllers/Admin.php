<?php
if(isset($_SESSION['role_id']) && ($_SESSION['role_id'] == 1)){
    class Admin extends Controller{
        public $InsertProduct;
        public $GetProduct;
        public $DeleteProduct;
        public $UpdateProduct;
        public $GetUser;
        public function __construct(){
            $this->InsertProduct = $this->model("InsertProduct");
            $this->GetProduct = $this->model("GetProduct");
            $this->DeleteProduct = $this->model("DeleteProduct");
            $this->UpdateProduct = $this->model("UpdateProduct");
            $this->GetUser = $this->model("GetUser");
        }
        function QLSP() {
            $products = $this->GetProduct->GetValuesProduct();
            $this->view("AdminPage",["Pages"=>"QLSP","products"=>$products]);
        }
        function QLND() {
            $users = $this->GetUser->GetUsers();
            $this->view("AdminPage",["Pages"=>"QLND","users"=>$users]);
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
                    $target_dir = "<?php echo ASSETS; ?>img/products/";
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
                move_uploaded_file($productImg, $target_file);
                $kq = $this->InsertProduct->InsertNewProduct($productName,$productPrice,$productDesc,$thumbnailpath);
                if($kq){
                    $this->AddProductSuccess();
                }
            }
        }

    }           
}  else{
    header("Location: http://localhost/projectPTIT/User/SignIn");
}
?>