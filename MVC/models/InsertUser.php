<?php
class InsertUser extends DB{
    public function InsertNewUser($email,$password){
     $qr= "INSERT INTO user VALUES(null,null,'$email',null,null,'$password',null,NOW(),null,null)";
    $result = false;
    if(mysqli_query($this->conn,$qr)){
        $result =true;
    }
    return json_encode($result);
    }
}
?>