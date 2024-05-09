<?php
class InsertProduct extends DB{
    public function InsertNewProduct( $productName,$productPrice,$productDesc, $productImg){
        $qr = "INSERT INTO product VALUES (null,null, '$productName','$productPrice',null,'$productImg','$productDesc',null,null,null)";
         $result = false;
         if(mysqli_query($this->conn, $qr)){
            $result = true;
         }
         return json_encode($result);
    }
}
?>