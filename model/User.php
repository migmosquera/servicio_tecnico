<?php

require_once 'conexion/conexion.php';

class User {

    private $id;
    private $name;
    private $password;
    private $email;
    private $url_instagram;
    private $url_facebook;
    private $url_twitter;
    private $phone1;
    private $phone2;
    private $phone3;
    private $username;
    private $id_twitter;
    private $token_instagram;
    private $name_instagram;
    private $id_instagram;
    private $address;

    const TABLA = 'user';

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getId() {
        return $this -> id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getUrl_instagram() {
        return $this->url_instagram;
    }

    public function getUrl_facebook() {
        return $this->url_facebook;
    }

    public function getUrl_twitter() {
        return $this->url_twitter;
    }

    public function getPhone1() {
        return $this->phone1;
    }

    public function getPhone2() {
        return $this->phone2;
    }

    public function getPhone3() {
        return $this->phone3;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getId_twitter() {
        return $this->id_twitter;
    }

    public function getToken_instagram() {
        return $this->token_instagram;
    }

    public function getName_instagram() {
        return $this->name_instagram;
    }

    public function getId_instagram() {
        return $this->id_instagram;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setUrl_instagram($url_instagram) {
        $this->url_instagram = $url_instagram;
    }

    public function setUrl_facebook($url_facebook) {
        $this->url_facebook = $url_facebook;
    }

    public function setUrl_twitter($url_twitter) {
        $this->url_twitter = $url_twitter;
    }

    public function setPhone1($phone1) {
        $this->phone1 = $phone1;
    }

    public function setPhone2($phone2) {
        $this->phone2 = $phone2;
    }

    public function setPhone3($phone3) {
        $this->phone3 = $phone3;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setId_twitter($id_twitter) {
        $this->id_twitter = $id_twitter;
    }

    public function setToken_instagram($token_instagram) {
        $this->token_instagram = $token_instagram;
    }

    public function setName_instagram($name_instagram) {
        $this->name_instagram = $name_instagram;
    }

    public function setId_instagram($id_instagram) {
        $this->id_instagram = $id_instagram;
    }
    
    public function __construct($id="",$username="", $password="" ,$name="", $email="", $url_instagram="", $url_facebook="", $url_twitter="", $phone1="", $phone2="", $phone3="", $id_twitter="", $token_instagram="", $name_instagram="", $id_instagram="", $address="" ) {
        $this -> id = $id;
        $this -> name = $name ;
        $this -> password = $password;
        $this -> email = $email;
        $this -> url_instagram = $url_instagram;
        $this -> url_facebook = $url_facebook;
        $this -> url_twitter = $url_twitter;
        $this -> phone1 = $phone1;
        $this -> phone2 = $phone2;
        $this -> phone3 = $phone3;
        $this -> username = $username;
        $this -> id_twitter = $id_twitter;
        $this -> token_instagram = $token_instagram;
        $this -> name_instagram = $name_instagram;
        $this -> id_instagram = $id_instagram;
        $this -> address = $address;
    }

    public function register() {
        $conectar = new Conectar();

        $query = $conectar->prepare('INSERT INTO ' . self::TABLA . ' (name, email, password, url_instagram, url_facebook, ) VALUES(:name, :email, :password, :url_instagram, :url_facebook, :phone)');
        $query->bindParam(':name', $this->name);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':password', $this->password);
        $query->bindParam(':url_instagram', $this->url_instagram);
        $query->bindParam(':url_facebook', $this->url_facebook);
        $query->bindParam(':phone', $this->phone);
        $query->execute();
        $this->id = $conectar->lastInsertId();

        $conectar = null;
    }

    public function update($id, $name, $email, $photo, $facebook, $instagram, $username) {
        $conectar = new Conectar();

        $query = $conectar->prepare('UPDATE users SET name = :name, email = :email, url_instagram = :url_instagram, url_facebook = :url_facebook, phone = :phone, username = :username WHERE id = :id');
        $query->bindParam(':name', $name);
        $query->bindParam(':email', $email);
        $query->bindParam(':url_instagram', $instagram);
        $query->bindParam(':url_facebook', $facebook);
        $query->bindParam(':phone', $photo);
        $query->bindParam(':username', $username);
        $query->bindParam(':id', $id);
        $query->execute();
        return 'el usuario se a modificado';
        $conectar = null;
    }

    public static function selectForId($id) {
        $conectar = new Conectar();
        $query = $conectar->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();
        $data = $query->fetch();

        if ($data) {
            return new self($data['name'], $data['email'], $data['password'], $data['url_instagram'], $data['url_facebook'], $data['phone'], $data['username'], $id);
        } else {
            return FALSE;
        }
        $conectar = null;
    }

    public static function selectAll() {
        $conectar = new Conectar();
        $query = $conectar->prepare('SELECT * FROM ' . self::TABLA);
        $query->execute();
        $data = $query->fetchAll();

        return $data;
        $conectar = null;
    }

    public static function loginUser($username,$pass) {
        $conectar = new Conectar();
        $query = $conectar->prepare('SELECT * FROM ' . self::TABLA . ' WHERE username = :username AND password = md5(:pass)');
        $query->bindParam(':username', $username);
        $query->bindParam(':pass', $pass);
        $query->execute();
        $data = $query->fetch();

        if ($data) {
            return new self($data["id"],$data["username"],$data["password"]);
        } else {
            return FALSE;
        }
        $conectar = null;
    }

}

?>