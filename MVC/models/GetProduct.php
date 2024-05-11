<?php
class GetProduct extends DB{
    function GetValuesProduct()
    {
        $qr = "SELECT * FROM product";
        return mysqli_query($this->conn, $qr);
    }
    function GetValuesProductID($id)
    {
        $qr = "SELECT * FROM product WHERE id=$id";
        return mysqli_query($this->conn, $qr);
    }
}

?>