<?php
class DeleteProduct extends DB{
    function DeleteValuesProduct($id)
    {
        $qr = "DELETE  FROM product WHERE id=$id";
        return mysqli_query($this->conn, $qr);
    }
}

?>