<?php

class AdministratorController{
    private $administrator;

    public function __construct(){
        $this->administrator = new Administrator();
    }

    public function index(){
        require_once('views/all/header.php');
        require_once('views/all/nav.php');

        $administrator = $this->administrator;
        return $this->view(__DIR__ . '/../views/index/index.php', compact('administrator'));
    }

    public function view($page, $variables=[]){
        if(count($variables)){
            extract($variables);
        }
        require($page);
        require_once('views/index/modals.php');
        require_once('views/all/footer.php');
    }

    public function deleteUser(){
        //parent::set_delete_user($_REQUEST['id']);
        $this->administrator->set_delete_user($_REQUEST['id']);
    }

    public function registerUser(){
        $data = array('name' => $_REQUEST['name'], 'last_name' => $_REQUEST['last_name'], 'email' => $_REQUEST['email']);
        //parent::set_register_user($data);
        $this->administrator->set_register_user($data);
    }

    public function updateUser(){
        $data = array('id' => $_REQUEST['id'], 'name' => $_REQUEST['name'], 'last_name' => $_REQUEST['last_name'], 'email' => $_REQUEST['email']);
        //parent::set_update_user($data);
        $this->administrator->set_update_user($data);
    }
}