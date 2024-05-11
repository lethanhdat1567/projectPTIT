<?php
    class Home extends controller{
        public $GetProduct;
        public function __construct(){
            $this->GetProduct = $this->model("GetProduct");
        }
        function Main() {
            $products = $this->GetProduct->GetValuesProduct();
            $this->view("master1",["Pages"=>"Main","product"=> $products]);
        }
        function ProductDetail($id) {
            $products = $this->GetProduct->GetValuesProductID($id);
            $this->view("master1",["Pages"=>"ProductDetail","product"=> $products]);
        }
        function AddNewCard() {
            $this->view("master1",["Pages"=>"AddNewCard"]);
        }
        function CheckOut() {
            $this->view("master1",["Pages"=>"CheckOut"]);
        }
        function EditPersonalInfo() {
            $this->view("master1",["Pages"=>"EditPersonalInfo"]);
        }
        function Favourite() {
            $this->view("master1",["Pages"=>"Favourite"]);
        }
        function PayMent() {
            $this->view("master1",["Pages"=>"PayMent"]);
        }
        function Profile() {
            $this->view("master1",["Pages"=>"Profile"]);
        }
        function Shipping() {
            $this->view("master1",["Pages"=>"Shipping"]);
        }
        function Admin() {
            $this->view("master1",["Pages"=>"Admin"]);
        }
    }
?>