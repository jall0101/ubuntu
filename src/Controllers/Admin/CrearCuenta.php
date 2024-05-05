<?php

namespace Controllers\Admin;
use Controllers\PublicController;
use Views\Renderer;


class CrearCuenta extends PublicController {
    /*EJECUTAR EL CONTROLADOR DE CREAR CUENTA*/
    public function run() :void
    {
        $viewData = array();        
        Renderer::render('Admin/crearcuenta', $viewData);
    }
}
?>