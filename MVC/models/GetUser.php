<?php
class GetUser extends DB{
    public function GetUserDB($email,$password){
            $email = mysqli_real_escape_string($this->conn, $email);
            $password = mysqli_real_escape_string($this->conn, $password);
            $email = trim($email);
            $password = trim($password);
        $qr = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        return mysqli_query($this->conn, $qr);
    }
}
?>