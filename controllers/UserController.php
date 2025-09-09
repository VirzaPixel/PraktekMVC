<?php 

include "models/User.php";

class UserController extends User{

    private $user;

    public function __construct($conn) {
        $this->user = new User($conn);
    }

    public function index() {
        if(isset($_GET['id'])) {
            $data = $this->user->getUserById($_GET['id']);
        }
        else {
            $data = $this->user->getAllUsers();
        }
    }
}

?>