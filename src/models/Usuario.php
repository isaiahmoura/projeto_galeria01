<?php
namespace src\models;
use \core\Model;

class Usuario extends Model {


    public function acessar($email) {
        $login = Usuario::select()->where('email', $email)->execute();
        
        if($login) {

        }else {

        }
    }

}