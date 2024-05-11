<?php
class UpdateProduct extends DB{
    function GetIdProduct($id)
    {
        $qr = "SELECT * FROM product WHERE id=$id";
        return mysqli_query($this->conn, $qr);
    }
    function UpdateValuesProduct($productName,$productPrice,$productDesc,$thumbnailpath,$id)
    {
        $update = "UPDATE product SET name='$productName', price='$productPrice', description='$productDesc', thumbnail='$thumbnailpath' WHERE id=$id";
        return mysqli_query($this->conn, $update);
    }
    
}

?>