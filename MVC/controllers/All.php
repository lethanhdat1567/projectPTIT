<?php
    class All extends controller {
        function Main() {
            $this->view("PublicPage",["Pages"=>"Main-public"]);
        }
    }
?>