<?php
require_once 'User.php';
require 'IUserService.php';

function OpenCon() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "YAMD";
    $conn = new mysqli($servername, $username, $password, $db);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

function CloseCon($conn) {
    $conn -> close();
}

class DbUserService implements IUserService {

    public function getUser($email) {
        $conn = OpenCon();
        $stmt = $conn->prepare("SELECT email, name, picture, password FROM User where email = ?");
        $stmt->bind_param('s', $email);
        $result = $stmt->execute();
        $user = null;
        if (!$stmt->errno) {
            $stmt->bind_result($dbEmail, $name, $picture, $password);
            $stmt->fetch();
            if($dbEmail != null) { 
                $user = new User($dbEmail, $name, $picture, $password);
            }
        }
        $stmt->close();
        CloseCon($conn);
        return $user;
    }
    
    public function postUser($email, $name, $picture, $password) {
        return $this->getUser($email) != null ? null : $this->insertUser($email, $name, $picture, password_hash($password, PASSWORD_DEFAULT));
    }

    public function validatePassword($email, $password) {
        $user = $this->getUser($email);
        if($user == null) {
            return false;
        }
        return password_verify($password, $user->getPassword());
    }

    private function insertUser($email, $name, $picture, $password) {
        $conn = OpenCon();
        $stmt = $conn->prepare("INSERT INTO User (email, name, picture, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('ssss', $email, $name, $picture, $password);
        $result = $stmt->execute();
        $user = null;
        if ($result) {
            $user = new User($email, $name, $picture, $password);
        }
        $stmt->close();
        CloseCon($conn);
        return $user;
    }
}
?>