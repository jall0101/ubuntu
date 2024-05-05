<?php
//BORRAR
namespace Controllers;
class Index extends PublicController
{
    /**
     * Index run method
     *
     * @return void
     */
    public function run() :void
    {
        $viewData = array();
        $viewData["Página Principal"] = \Dao\Mnt\Inventarios::findByInventario(1);
        \Views\Renderer::render("index", $viewData);

    }
}
?>
