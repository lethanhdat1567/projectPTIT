<?php
class DeleteProduct extends DB{
    public function DeleteValuesProduct($product_id) {       
        $product_id = mysqli_real_escape_string($this->conn, $product_id);
        
       
        $deleteGalleryQuery = "DELETE FROM galery WHERE product_id = '$product_id'";
        $resultGallery = mysqli_query($this->conn, $deleteGalleryQuery);
        
        
        if (!$resultGallery) {
            throw new Exception('Delete gallery query failed: ' . mysqli_error($this->conn));
        }
        
        
        $deleteProductQuery = "DELETE FROM product WHERE id = '$product_id'";
        $resultProduct = mysqli_query($this->conn, $deleteProductQuery);
        
      
        if (!$resultProduct) {
            throw new Exception('Delete product query failed: ' . mysqli_error($this->conn));
        }
        
        return true;
    }
    
}

?>