<?php
class InsertUser extends DB{
    public function InsertNewUser($username,$email,$password,$role_id){
     $qr= "INSERT INTO user VALUES(null,'$username','$email',null,null,'$password','$role_id',NOW(),null,null)";
    $result = false;
    if(mysqli_query($this->conn,$qr)){
        $result =true;
    }
    return json_encode($result);
    }
}
?>