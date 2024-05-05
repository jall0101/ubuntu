<?php

namespace Controllers\Admin;
use Controllers\PublicController;
use Views\Renderer;


class Login extends PublicController {
    /*EJECUTAR EL CONTROLADOR DE INICIO DE SESIÓN*/
    public function run() :void
    {
        $viewData = array();        
        Renderer::render('Admin/login', $viewData);
    }
}
?>