<?php
class GetProduct extends DB{
    function GetValuesProduct()
    {
        $qr = "SELECT * FROM product";
        return mysqli_query($this->conn, $qr);
    }
}

?>