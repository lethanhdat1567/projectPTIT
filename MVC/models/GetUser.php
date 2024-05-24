<?php
class GetUser extends DB{
    public function GetUserDB($email){
            $email = mysqli_real_escape_string($this->conn, $email);
            $email = trim($email);
        $qr = "SELECT * FROM user WHERE email='$email'";
        return mysqli_query($this->conn, $qr);
    }
    public function GetUserValues($id) {
        $qr = "SELECT * FROM user WHERE id=$id";
        return mysqli_query($this->conn, $qr);
    }
    public function GetUsers() {
        $qr = "SELECT * FROM user";
        return mysqli_query($this->conn, $qr);
    }
    public function GetUserById($userId) {
        $query = "SELECT * FROM user WHERE id = $userId";
        $result = mysqli_query($this->conn, $query);
        return mysqli_fetch_assoc($result);
    }
}
?>