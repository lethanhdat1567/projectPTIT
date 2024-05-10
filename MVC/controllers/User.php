<?php
    class User extends controller{
        function SignIn() {
            $this->view("UserPage",["Pages"=>"SignIn"]);
        }
        function SignUp() {
            $this->view("UserPage",["Pages"=>"SignUp"]);
        }
    }
?>