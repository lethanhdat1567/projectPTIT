<?php
    class Admin extends Controller{
        function QLSP() {
            $this->view("AdminPage",["Pages"=>"QLSP"]);
        }
        function AddProduct() {
            $this->view("AdminPage",["Pages"=>"AddProduct"]);
        }
    }
?>