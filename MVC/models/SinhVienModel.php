<?php
    class SinhVienModel extends DB{
        public function GetSV() {
            return 'day la get SInh Vien';  
        }
        public function Tong($a, $b){
            return $a + $b;
        }
        public function sinhvien() {
            $qr = "SELECT * FROM products";
            return mysqli_query($this->conn,$qr);
        }
    }
?>