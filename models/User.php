<?php 

class User {

    private $db;

    public function __construct($conn) {
        $this->db = $conn;
    }

    public function getAllUsers() {
        $sql = "SELECT * FROM users";
        $result = $this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}

?>