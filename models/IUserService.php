<?php
interface IUserService {
    public function getUser($email);
    
    public function postUser($email, $name, $picture, $password);

    public function validatePassword($email, $password);
}
?>