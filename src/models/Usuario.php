<?php
namespace src\models;
use \core\Model;

class Usuario extends Model {


    public function verificarSessao() {
        if(isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])) {
            return true;
        }else {
            return false;
        }
    }
}