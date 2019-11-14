<?php
require_once 'User.php';
require 'IUserService.php';

class DbUserService implements IUserService {

    public function getUser($email) {
        
    }
    
    public function postUser($email, $name, $picture, $password) {
        
    }

    public function validatePassword($email, $password) {
    }
}
?>