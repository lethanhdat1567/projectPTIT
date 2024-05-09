<?php


    class Admin extends Controller{
        public $InsertProduct;
        public $GetProduct;
        public function __construct(){
            $this->InsertProduct = $this->model("InsertProduct");
            $this->GetProduct = $this->model("GetProduct");
        }
        function QLSP() {
            $this->view("AdminPage",["Pages"=>"QLSP"]);
        }
        function AddProduct() {
            $test = $this ->GetProduct->GetValuesProduct();
            $this->view("AdminPage",["Pages"=>"AddProduct","test"=> $test]);
        }
       
            function Product() {
                if(isset($_POST["btnAdd"])) {
                    $productName = $_POST["ProductName"];
                    $productPrice = $_POST['ProductPrice'];
                    $productDesc = $_POST['ProductDesc'];
        
                    // Upload ảnh sản phẩm
                    $thumbnailpath = basename($_FILES['thumbnail']['name']);    
                    $target_dir = "./assets/img/products/";
                    $target_file = $target_dir . $thumbnailpath;
                    $productImg = $_FILES['thumbnail']['tmp_name'];
                    move_uploaded_file($productImg, $target_file);
        
                    // Gọi phương thức để thêm sản phẩm vào cơ sở dữ liệu
                    $kq = $this->InsertProduct->InsertNewProduct($productName,$productPrice,$productDesc,$thumbnailpath);
                }
            }
        }
        
             
    
?>