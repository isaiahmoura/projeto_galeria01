<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $this->render('home', ['nome' => 'Bonieky']);
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