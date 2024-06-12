<?php
class DB{
    public $conn;
    protected $servername = 'datlethanh.id.vn';
    protected $username = 'lethanhdat';
    protected $password = 'Kckcnbcb89*';
    protected $dbname = 'coffeShop';
    function __construct()
    {
        $this->conn = mysqli_connect($this->servername,$this->username,$this->password);
        mysqli_select_db($this->conn,$this->dbname);
        mysqli_query($this->conn,"SET NAMES 'utf8'");
    }
}
?>