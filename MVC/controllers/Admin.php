<?php


    class Admin extends Controller{
        public $InsertProduct;
        public $GetProduct;
        public $DeleteProduct;
        public function __construct(){
            $this->InsertProduct = $this->model("InsertProduct");
            $this->GetProduct = $this->model("GetProduct");
            $this->DeleteProduct = $this->model("DeleteProduct");
        }
        function QLSP() {
            $products = $this->GetProduct->GetValuesProduct();
            $this->view("AdminPage",["Pages"=>"QLSP","products"=>$products]);
        }
        function AddProduct() {
            $test = $this ->GetProduct->GetValuesProduct();
            $this->view("AdminPage",["Pages"=>"AddProduct","test"=> $test]);
        }
        function Success() {
            $this->view("AdminPage",["Pages"=>"Success"]);
        }
        function DeleteProduct($param) {
            $result = $this->DeleteProduct->DeleteValuesProduct($param);
            if($result){
                $this->QLSP();
            }
        }
        function Product() {
            if(isset($_POST["btnAdd"])) {
                $productName = $_POST["ProductName"];
                $productPrice = $_POST['ProductPrice'];
                $productDesc = $_POST['ProductDesc'];
                // $UpdateTime =  date('Y-m-d H:i:s', time()); 
                
                // Upload ảnh sản phẩm
                $thumbnailpath = basename($_FILES['thumbnail']['name']);    
                $target_dir = "./assets/img/products/";
                $target_file = $target_dir . $thumbnailpath;
                $productImg = $_FILES['thumbnail']['tmp_name'];
                move_uploaded_file($productImg, $target_file);
                // Gọi phương thức để thêm sản phẩm vào cơ sở dữ liệu
                $kq = $this->InsertProduct->InsertNewProduct($productName,$productPrice,$productDesc,$thumbnailpath);
                if($kq){
                    $this->Success();
                }
            }
        }

    }           
    
?>