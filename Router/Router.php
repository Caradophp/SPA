<?php 

namespace Router;

class Router {

    public function __construct() {
        $this->rotas();
    }

    private function rotas() {

        $uri = $_SERVER['REQUEST_URI'];

        $url = explode('/', $uri, PHP_INT_MAX);

        if (empty($url[2])) {
            readfile('../App/SPA/index.html');
            exit();
        }

        $controller =  "\\App\\Controller\\Controller" . ucfirst($url[2]);

        if (class_exists($controller)) {
            $InstaciaController = new $controller;

            if (!empty($url[3])) {
                $metodo = $url[3];
                if (method_exists($InstaciaController, $metodo)) {
                    $InstaciaController->$metodo();
                } else {
                    echo "falha na chamada do método";
                }
            } else {
                $InstaciaController->index();
            }
        } else {
            echo "404 - Not Found";
        }
    }
}

?>