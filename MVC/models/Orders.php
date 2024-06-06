<?php
class Orders extends DB{
    public function InsertOrder($userId,$name,$email,$phone,$address,$total){
        // Sử dụng mysqli_real_escape_string để tránh lỗ hổng SQL injection
        $userId = mysqli_real_escape_string($this->conn, $userId);
        $name = mysqli_real_escape_string($this->conn, $name);
        $email = mysqli_real_escape_string($this->conn, $email);
        $phone = mysqli_real_escape_string($this->conn, $phone);
        $address = mysqli_real_escape_string($this->conn, $address);
        $total = mysqli_real_escape_string($this->conn, $total);
        
        // Định dạng các giá trị chuỗi trong câu lệnh SQL bằng cách bọc chúng trong dấu ngoặc đơn
        $qr= "INSERT INTO orders VALUES(null,'$userId','$name','$email','$phone','$address',NOW(),'$total')";
        
        $result = false;
        if(mysqli_query($this->conn,$qr)){
            $result = true;
        }
        return json_encode($result);
    }
    public function InsertOrderDetail($orderid,$productid,$price,$number,$totalmoney){
        $qr= "INSERT INTO order_details VALUES(null,'$orderid','$productid','$price','$number','$totalmoney')";
       $result = false;
       if(mysqli_query($this->conn,$qr)){
           $result =true;
       }
       return json_encode($result);
    }
    public function GetOrders($user_id) {
        $qr= "SELECT * FROM orders WHERE user_id=$user_id";
        return mysqli_query($this->conn, $qr);
    }
       
}
?>
