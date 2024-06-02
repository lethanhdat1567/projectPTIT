<?php
class DeleteUser extends DB{
    function DeleteUser($id)
    {
        $qr = "DELETE FROM user WHERE id=$id";
        return mysqli_query($this->conn, $qr);
    }

    public function deleteAvatar($id) {
        $qr = "UPDATE user SET avatar = NULL WHERE id = $id";
        return mysqli_query($this->conn, $qr);
    }
    
}

?>