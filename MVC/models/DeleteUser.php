<?php
class DeleteUser extends DB{
    function __construct() {
        parent::__construct();
    }

    function deleteUser($id) {
        $qr = "DELETE FROM user WHERE id=$id";
        return mysqli_query($this->conn, $qr);
    }

    public function deleteAvatar($id) {
        $qr = "UPDATE user SET avatar = NULL WHERE id = $id";
        return mysqli_query($this->conn, $qr);
    }
}
?>
