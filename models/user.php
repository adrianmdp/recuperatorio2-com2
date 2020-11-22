<?php namespace models;

class User {

    private $name;
    private $lastname;
    private $email;
    private $password;
    private $country;

    public function getName() {
        return $this->name;
    }
    public function setName($value) {
        $this->name = $value;
    }
    public function getLastname() {
        return $this->lastname;
    }
    public function setLastname($value) {
        $this->lastname = $value;
    }
    public function getEmail() {
        return $this->email;
    }
    public function setEmail($value) {
        $this->email = $value;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setPassword($value) {
        $this->password = $value;
    }
    public function getCountry() {
        return $this->country;
    }
    public function setCountry($value) {
        $this->country = $value;
    }

}