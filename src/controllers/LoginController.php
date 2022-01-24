<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class LoginController extends Controller {

    public function index() {
        $flash = '';
        if(!empty($_SESSION['flash'])) {
            $flash = $_SESSION['flash'];
            unset($_SESSION['flash']);
        }
        $this->render('login', [
            'flash' => $flash
        ]);
    }

    public function cadastro() {
        $this->render('cadastro');
    }

    public function acessar() {
        $email = filter_input(INPUT_POST, 'email');
        $senha = md5($_POST['senha']);
        if($email && $senha) {
            $data = Usuario::select()->where('email', $email)->execute();
            if(count($data) === 0) {
                var_dump($data);exit;
            }
        }else {
            $_SESSION['flash'] = 'Preencha os campos de e-mail e/ou senha';
            $this->redirect('/login');
        }
    }

}