<?php
class InsertProduct extends DB{
    public function InsertNewProduct( $productName,$productPrice,$productDesc, $productImg){
        $qr = "INSERT INTO product VALUES (null,null, '$productName','$productPrice',null,'$productImg','$productDesc',null,NOW(),null)";
         $result = false;
         if(mysqli_query($this->conn, $qr)){
            $result = true;
         }
         return json_encode($result);
    }
}
?>