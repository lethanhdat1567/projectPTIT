<?php
class API extends controller {
    public $GetProduct;
    
    public function __construct(){
        $this->GetProduct = $this->model("GetProduct");
    }
    
    function Read() {
        // Bổ sung tiêu đề CORS vào phản hồi HTTP
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");

        $products = $this->GetProduct->GetValuesProduct();
        $product_array = [];

        while($row = mysqli_fetch_assoc($products)) {
            extract($row);
            $product_item = array(
                'id' => $row['id'],
                'name' => $row['name'],
                'price' => $row['price'],
                'discount' => $row['discount'],
                'thumbnail' => $row['thumbnail'],
                'description' => $row['description'],
                'created_at' => $row['created_at'],
                'updated_at' => $row['updated_at'],
                'deleted' => $row['deleted'],
                'isFavor' => false
            );
            array_push($product_array, $product_item);
        }

        echo json_encode($product_array);
    }

    function AddImgs() {
       echo "Đây là phương thức AddImgs";
    }
}
?>
