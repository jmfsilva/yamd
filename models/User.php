<?php
class User {
    private $email;
    private $name;
    private $picture;
    private $password;

    public function __construct($email, $name, $picture, $password)
    {
        $this->email = $email;
        $this->name = $name;
        $this->picture = $picture;
        $this->password = $password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function getPassword()
    {
        return $this->password;
    }

}
?>