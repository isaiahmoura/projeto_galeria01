<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class HomeController extends Controller {

    public $usuario;

    public function __construct() {
        $this->usuario = new Usuario();
        if(Usuario::verificarSessao() == false) {
            $_SESSION['flash'] = 'Sessão não encontrada';
            $this->redirect('/login');
        }else {
            var_dump($this->usuario);exit;
            $this->usuario = Usuario::select()->where('id', $_SESSION['usuario']);
        }
    }

    public function index() {
        var_dump($this->usuario);exit;
        $this->render('home', [
            'usuario' => $this->usuario
        ]);
    }

    public function ver_img() {
        $this->render('ver_img');
    }

    public function perfil() {
        $this->render('perfil');
    }

    public function sair() {
        session_destroy();
        $this->redirect('/login');
    }

}