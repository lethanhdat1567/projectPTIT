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
        $qr = "SELECT * FROM orders WHERE user_id=$user_id ORDER BY order_date DESC LIMIT 1";
        return mysqli_query($this->conn, $qr);
    }
    public function GetOrdersId($user_id) {
        $qr= "SELECT id,order_date,total_money FROM orders WHERE user_id=$user_id";    
        return mysqli_query($this->conn, $qr);
    }
    
    public function GetHistoryOrder($id){
        $query = "SELECT 
    orders.order_date AS orders_order_date,
    orders.id as orders_id,
    product.*,
    orders.user_id AS orders_user_id,
    orders.total_money AS orders_total,
    order_details.price AS order_detail_price,
    order_details.product_id AS order_detail_prodId,
    order_details.quantity AS order_detail_quantity,
    order_details.total_money AS order_detail_total_money,
    product.name AS product_name
FROM 
    orders
JOIN 
    order_details ON orders.id = order_details.order_id
JOIN 
    product ON order_details.product_id = product.id
WHERE 
    orders.user_id = $id;";
         return mysqli_query($this->conn, $query);
    }
    public function GetOrderAdmin(){
        $query = "SELECT 
            o.fullname AS fullname, 
            u.phone_number AS phone_number , 
            u.address AS address, 
            o.order_date AS order_date, 
            o.total_money AS order_total_money, 
            od.total_money AS order_details_total_money, 
            od.quantity AS quantity,
            p.name AS product_name,     
            p.thumbnail AS thumbnail
        FROM 
            user u
        JOIN 
            orders o ON u.id = o.user_id
        JOIN 
            order_details od ON o.id = od.order_id
        JOIN 
            product p ON p.id = od.product_id
        WHERE 
            u.role_id = 0";
            return mysqli_query($this->conn, $query);
    }
}
?>
