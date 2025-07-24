<?php 

namespace App\Controller;

class ControllerHome {

    public function index() {
        echo 'Método padrão';
    }

    public function teste() {
        echo 'Método chamado pela url';
    }
}

?>