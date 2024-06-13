<?php
class DeleteGalery extends DB{
    function DeleteGaleryValues($id) {
        $qr = "DELETE FROM galery WHERE id=$id";
        return mysqli_query($this->conn, $qr);
    }
    
}

?>