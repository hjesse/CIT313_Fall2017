<?php
class Controller {

    public $load;
    public $model;

    function __construct() {
        $this->model = new User();
        $this->load = new Load();
        $this->home();
    }

    function home() {

        $this->user->userID = 'hjesse';
        $this->user->firstname = 'Helen';
        $this->user->lastname = 'Jesse';
        $this->user->email = 'hjesse@umail.iu.edu';
        $this->user->role = 'admin';

        $data = $this->model->getName();

        $this->load->view('view.php',$data);

    }
    
}
?>