<?php
    class Home extends controller{
        function Main() {
            $this->view("master1",["Pages"=>"Main"]);
        }
        function ProductDetail() {
            $this->view("master1",["Pages"=>"ProductDetail"]);
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