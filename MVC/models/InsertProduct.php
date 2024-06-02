<?php
class InsertProduct extends DB{
   public function InsertNewProduct( $productName,$productPrice,$productDesc, $productImg){
      $qr = "INSERT INTO product VALUES (null,'$productName','$productPrice',null,'$productImg','$productDesc',NOW(),NOW(),null)";
       $result = mysqli_query($this->conn, $qr);
       if($result){
         return mysqli_insert_id($this->conn);
       }
       return json_encode($result);
      }
      public function InsertGalery($thumbnail, $product_id) {
        
         $thumbnail = mysqli_real_escape_string($this->conn, $thumbnail);
         $product_id = mysqli_real_escape_string($this->conn, $product_id);
         
        
         $query = "INSERT INTO galery (thumbnail, product_id) VALUES ('$thumbnail', '$product_id')";
         
     
         $result = mysqli_query($this->conn, $query);
         
        
         if ($result) {             
             return mysqli_insert_id($this->conn);
         } else {
             return false;
         }

     }

     public function insertImgs($product_id, $thumbnail) {
        $qr = "INSERT INTO galery (id, product_id, thumbnail) VALUES (null, '$product_id', '$thumbnail')";
        $result = mysqli_query($this->conn, $qr);
        if ($result) {
            return mysqli_insert_id($this->conn);
        }
        return json_encode($result);
    }
}


     
   
     
    

?>