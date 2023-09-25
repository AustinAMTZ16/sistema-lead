<?php
    class LoginController{
        public function login(){
            include ('./views/viewLogin/login.php');
        }
        public function accountBusiness(){
            include ('./views/viewLogin/accountBusiness.php');
        }
        public function accountUser(){
            include ('./views/viewLogin/accountUser.php');
        }
        public function recoverPassword(){
            include ('./views/viewLogin/recoverPassword.php');
        }
    }