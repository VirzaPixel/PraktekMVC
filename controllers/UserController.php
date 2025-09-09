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
            include "views/user_detail/detail.php";
        }
        else {
            $data = $this->user->getAllUsers();
            include "views/user_all/users.php";
        }
    }
}

?>