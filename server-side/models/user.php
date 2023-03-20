<?php
namespace Models;

class User {

    public int $user_id;
    public string $firstname;
    public string $lastname;
    public string $password;
    public string $email;
    public string $role;

    // construct
    public function __construct($user_id, $firstname, $lastname, $password, $email, $role) {
        $this->user_id = $user_id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->password = $password;
        $this->email = $email;
        $this->role = $role;
    }

    // jsonserialize
    public function jsonSerialize() {
        return [
            'user_id' => $this->user_id,
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'password' => $this->password,
            'email' => $this->email,
            'role' => $this->role
        ];
    }

    // getters setters

    public function getUserId() {
        return $this->user_id;
    }

    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        return $this->password = $password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getRole() {
        return $this->role;
    }

    public function setRole($role){
        $this->role = $role;
    }
}

?>