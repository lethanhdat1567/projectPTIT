<?php
class UpdateProduct extends DB{
    function GetIdProduct($id)
    {
        $qr = "SELECT * FROM product WHERE id=$id";
        return mysqli_query($this->conn, $qr);
    }
    function UpdateValuesProduct($productName,$productPrice,$productDesc,$thumbnailpath,$id,$productDiscount)
    {
        $update = "UPDATE product SET name='$productName', price='$productPrice',discount='$productDiscount', description='$productDesc',thumbnail='$thumbnailpath', updated_at= NOW() WHERE id=$id";
        return mysqli_query($this->conn, $update);
    }
    
}

?>