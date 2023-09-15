<?php
include_once 'clases.php';

//con abstract estamos indicando que no podemos crer objetos a partir de esta clase.
abstract class Usuario {
    private $id;
    private $login;
    private $password;
    private $nombre;
    private $mail;

    public function  __construct($id, $login, $password, $nombre, $mail)
        {
            $this->id = $id;
            $this->login = $login;
            $this->password = $password;
            $this->nombre = $nombre;
            $this->mail = $mail;
        }
    
    public function getId() {
        return $this->id;
    }
    public function getLogin() {
        return $this->login;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getMail() {
        return $this->mail;
    }

    public function saludar() {
        echo "Hola, mi nombre es " . $this->getNombre() . " y soy usuario del Sistema <br>";
    }

    public function mostrarCorreo() {
        echo "Mi nombre es " . $this->nombre . " y mi correo es " . $this->mail . "<br>";
    }
}
?>