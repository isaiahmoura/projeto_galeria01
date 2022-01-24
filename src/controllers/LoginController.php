<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Usuario;

class LoginController extends Controller {

    function __construct() {
        if(Usuario::verificarSessao() == true) {
            $this->redirect('/');
        }
    }

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
            $data = Usuario::select()->where('email', $email)->one();
            if($data) {
                $token = Usuario::select()->where('senha', $senha)->one();
                if($token) {
                    $_SESSION['usuario'] = $data['id'];
                    $this->redirect('/');
                }else {
                    $_SESSION['flash'] = 'Senha está incorreta';
                    $this->redirect('/login');
                }
            }else {
                $_SESSION['flash'] = 'E-mail não está cadastrado';
                $this->redirect('/login');
            }
        }else {
            $_SESSION['flash'] = 'Preencha os campos de e-mail e/ou senha';
            $this->redirect('/login');
        }
    }

}