<?php
    class Home extends controller{
        public $GetProduct;
        public $GetUser;
        public function __construct(){
            $this->GetProduct = $this->model("GetProduct");
            $this->GetUser = $this->model("GetUser");
        }
        function Main($id) {
            $products = $this->GetProduct->GetValuesProduct();
            $user = $this->GetUser->GetUserValues($id);
            $this->view("master1",["Pages"=>"Main","product"=> $products,"user"=>$user]);
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
        function Profile($id) {
            $user = $this->GetUser->GetUserValues($id);
            $this->view("master1",["Pages"=>"Profile","id"=>$id,"user"=>$user]);
        }
        function Shipping() {
            $this->view("master1",["Pages"=>"Shipping"]);
        }
        function Admin() {
            $this->view("master1",["Pages"=>"Admin"]);
        }
    }
?>