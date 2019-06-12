<?php

namespace App\Controllers\Users\Common;

use System\Controller as Controller;

class HeaderController extends Controller
{
    public function index()
    {
        $title =  $this->html->getTitle() ?: '';
        $styles =  $this->html->getCss() ?: '';
        $login = $this->load->model('Login')->isLogged();

        $data = [
            'title' => $title,
            'styles' => $styles,
            'login' => $login
        ];
        return $this->view->render('common\header', $data);
    }
}