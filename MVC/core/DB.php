<?php
class DB{
    public $conn;
    protected $servername = 'coffeedp.id.vn';
    protected $username = 'daphuoc';
    protected $password = 'Daphuoc15678*';
    protected $dbname = 'CoffeeDP';
    function __construct()
    {
        $this->conn = mysqli_connect($this->servername,$this->username,$this->password);
        mysqli_select_db($this->conn,$this->dbname);
        mysqli_query($this->conn,"SET NAMES 'utf8'");
    }
}
?>