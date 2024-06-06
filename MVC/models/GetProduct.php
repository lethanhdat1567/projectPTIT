<?php
class GetProduct extends DB{
    function GetValuesProduct()
    {
        $qr = "SELECT * FROM product WHERE deleted = 0";
        return mysqli_query($this->conn, $qr);
    }
    function GetValuesProductID($id)
    {
        $qr = "SELECT * FROM product WHERE id=$id";
        return mysqli_query($this->conn, $qr);
    }
    function GetGalery($id) {
        $qr = "SELECT * FROM galery WHERE product_id = $id";
        return mysqli_query($this->conn, $qr);
    }
}

?>