<?php
class Router {

    private $smarty;

    public function __construct($smarty) {
        $this->smarty = $smarty;
    }

    public function handleRequest() {

        $page = $_GET['page'] ?? 'Accueil';

        $pages = [
            'categorie' => 'CategoryController',
            'site' => 'SiteController',
            'utilisateur' => 'UserController',
            'Accueil' => 'HomeController',
            '' => 'HomeController'
        ];

        $action = $_GET['action'] ?? 'list';

        if (array_key_exists($page, $pages)) {

            require_once __DIR__ . '/../Controllers/' . $pages[$page] . '.php';

            $controllerName = $pages[$page];
            $ctrl = new $controllerName();

            if (method_exists($ctrl, $action)) {

                $this->smarty->assign('tpl', $page . '/' . $action . '.tpl');
                $this->smarty->assign('vue', $ctrl->$action());
                $this->smarty->display('index.tpl');

            } else {
                http_response_code(404);
                echo "Action introuvable";
            }

        } else {
            http_response_code(404);
            echo "Page introuvable";
        }
    }
}