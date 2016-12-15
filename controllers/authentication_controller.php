<?php
  class AuthenticationController{

    public function login() {
       if(!empty($_POST)){
           var_dump($_POST); die;
           $user = User::register($_POST['name'], $_POST['email'], $_POST['password']);
       } else {
           require_once('views/auth/login.php');
       }
    }

    public function logout() {
      //require_once('views/auth/logout.php');
    }

    public function registration(){
        if(!empty($_POST)){
            var_dump($_POST); die;
            $user = User::register($_POST['name'], $_POST['email'], $_POST['password']);
        } else {
            require_once('views/auth/signup.php');
        }
    }
    public function forget_password(){

    }
    
  }
?>