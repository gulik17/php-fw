<?php


namespace app\controllers;

use app\core\Controller;

class MainController extends Controller {

    public function indexAction() {
        $vars = [
            'name' => 'Vovan',
            'age' => '34',
        ];
        $this->view->render('Main Page', $vars);
    }

}
