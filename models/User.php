<?php 

class User {

    private $db;

    public function __construct($conn) {
        $this->db = $conn;
    }

    public function getAllUsers() {
        $sql = "SELECT * FROM daftar_perangkat_lunak";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getUserById() {
        $sql = "SELECT * FROM daftar_perangkat_lunak";
        $result = $this->db->query($sql);
        return $result->fetch_assoc();
    }
}

?>