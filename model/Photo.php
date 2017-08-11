<?php

require_once 'conexion/conexion.php';

class Photo {

    private $id;
    private $url;
    private $title;
    private $date;

    const TABLA = 'photo';

    function getId() {
        return $this->id;
    }

    function getUrl() {
        return $this->url;
    }

    function getTitle() {
        return $this->title;
    }

    function getDate() {
        return $this->date;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setDate($date) {
        $this->date = $date;
    }

    public function __construct($id = "", $url = "", $title = "", $date = "") {
        $this->id = $id;
        $this->url = $url;
        $this->title = $title;
        $this->date = $date;
    }

    public static function savePhoto($url,$title) {
        $conectar = new Conectar();
        $date = date("Y/m/d h:i:sa");
        $query = $conectar->prepare('INSERT INTO ' . self::TABLA . ' (url, title, date) VALUES(:url, :title, :date)');
        $query->bindParam(':url', $url);
        $query->bindParam(':title', $title);
        $query->bindParam(':date', $date);
        $query->execute();
        $data = $query->fetch();
        if ($data) {
            return new self($data['id'], $data['url'], $data['title'],$data['date']);
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

    /* public function register() {
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




      public static function selectAll() {
      $conectar = new Conectar();
      $query = $conectar->prepare('SELECT * FROM ' . self::TABLA);
      $query->execute();
      $data = $query->fetchAll();

      return $data;
      $conectar = null;
      }

      public function update($id, $email, $url_instagram, $url_facebook, $url_twitter, $phone1, $phone2, $phone3, $id_twitter, $token_instagram, $name_instagram, $id_instagram, $address ) {
      $conectar = new Conectar();

      $query = $conectar->prepare('UPDATE user SET email = :email, url_facebook = :url_facebook, url_twitter = :url_twitter, url_instagram = :url_instagram, phone1 = :phone1, phone2 = :phone2, phone3 = :phone3, id_twitter = :id_twitter, token_instagram = :token_instagram, name_instagram = :name_instagram, id_instagram = :id_instagram, address = :address WHERE id = :id');
      $query->bindParam(':email', $email);
      $query->bindParam(':url_facebook', $url_facebook);
      $query->bindParam(':url_twitter', $url_twitter);
      $query->bindParam(':url_instagram', $url_instagram);
      $query->bindParam(':phone1', $phone1);
      $query->bindParam(':phone2', $phone2);
      $query->bindParam(':phone3', $phone3);
      $query->bindParam(':id_twitter', $id_twitter);
      $query->bindParam(':token_instagram', $token_instagram);
      $query->bindParam(':name_instagram', $name_instagram);
      $query->bindParam(':id_instagram', $id_instagram);
      $query->bindParam(':address', $address);
      $query->bindParam(':id', $id);
      $query->execute();
      return TRUE;
      $conectar = null;
      }

      public static function selectForId($id) {
      $conectar = new Conectar();
      $query = $conectar->prepare('SELECT * FROM ' . self::TABLA . ' WHERE id = :id');
      $query->bindParam(':id', $id);
      $query->execute();
      $data = $query->fetch();

      if ($data) {
      return new self($data['id'], $data['username'], $data['password'], $data['email'], $data['url_instagram'], $data['url_facebook'], $data['url_twitter'], $data['phone1'], $data['phone2'], $data['phone3'], $data['id_twitter'],$data['token_instagram'], $data['name_instagram'], $data['id_instagram'], $data['address']);
      } else {
      return FALSE;
      }
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
      } */
}

