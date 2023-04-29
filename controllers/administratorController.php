<?php

class AdministratorController{
    function index(){
        require_once('views/all/header.php');
        require_once('views/all/nav.php');

        $administrator = new Administrator();;
        return $this->view(__DIR__ . '/../views/index/index.php', compact('administrator'));
    }

    function view($page, $variables=[]){
        if(count($variables)){
            extract($variables);
        }
        require($page);
        require_once('views/index/modals.php');
        require_once('views/all/footer.php');
    }

    function table_users(){
        
        
    }

    function deleteUser(){
        //parent::set_delete_user($_REQUEST['id']);
        $administrator = new Administrator();
        $administrator->set_delete_user($_REQUEST['id']);
    }

    function registerUser(){
        $data = array('name' => $_REQUEST['name'], 'last_name' => $_REQUEST['last_name'], 'email' => $_REQUEST['email']);
        //parent::set_register_user($data);
        $administrator = new Administrator();
        $administrator->set_register_user($data);
    }

    function updateUser(){
        $data = array('id' => $_REQUEST['id'], 'name' => $_REQUEST['name'], 'last_name' => $_REQUEST['last_name'], 'email' => $_REQUEST['email']);
        //parent::set_update_user($data);
        $administrator = new Administrator();
        $administrator->set_update_user($data);
    }
}