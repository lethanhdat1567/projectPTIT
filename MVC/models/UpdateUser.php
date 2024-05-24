<?php
class UpdateUser extends DB{
    public function UpdateNewUser($id,$username,$email,$phone,$address,$avatar){
     $qr= "UPDATE user SET fullname = '$username', email = '$email', phone_number = $phone, address = '$address', avatar = '$avatar'
            WHERE id=$id;
     ";
    $result = false;
    if(mysqli_query($this->conn,$qr)){
        $result =true;
    }
    return json_encode($result);
    }

    public function UpdateNewPass($pass,$email){
        $sql = "UPDATE user SET password ='$pass' WHERE email = '$email' ";       
     $result = false;
    if(mysqli_query($this->conn,$sql)){
        $result =true;
    }
    return json_encode($result);
    }
}
?>