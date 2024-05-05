<?php

namespace Utilities;

class Nav {

    public static function setNavContext(){
        $tmpNAVIGATION = array();
        $tmpNAVIGATION2 = array();
        $tmpNAVIGATION3 = array();
        $userID = \Utilities\Security::getUserId();


        //NAVEGACIÓN TIPO 2
        if (\Utilities\Security::isAuthorized($userID, "Menu_MntUsuarios")) {
            $tmpNAVIGATION2[] = array(
                "nav_url" => "index.php?page=mnt_usuarios",
                "nav_label" => "Usuarios"
            );
        }
        

        if (\Utilities\Security::isAuthorized($userID, "Menu_MntRoles")) {
            $tmpNAVIGATION2[] = array(
                "nav_url" => "index.php?page=mnt_roles",
                "nav_label" => "Roles"
            );
        }

        if (\Utilities\Security::isAuthorized($userID, "Menu_MntFunciones")) {
            $tmpNAVIGATION2[] = array(
                "nav_url" => "index.php?page=mnt_funciones",
                "nav_label" => "Funciones"
            );
        }

        if (\Utilities\Security::isAuthorized($userID, "Menu_MntRolesUsuarios")) {
            $tmpNAVIGATION2[] = array(
                "nav_url" => "index.php?page=mnt_rolesUsuarios",
                "nav_label" => "Roles para Usuarios"
            );
        }

        if (\Utilities\Security::isAuthorized($userID, "Menu_MntFuncionesRoles")) {
            $tmpNAVIGATION2[] = array(
                "nav_url" => "index.php?page=mnt_funcionesroles",
                "nav_label" => "Funciones para roles"
            );
        }

    


        //NAVEGACIÓN TIPO 3

        //NAVEGACIÓN DE INVENTARIOS
        if (\Utilities\Security::isAuthorized($userID, "Menu_MntInventarios")) {
            $tmpNAVIGATION3[] = array(
                "nav_url" => "index.php?page=mnt_inventarios",
                "nav_label" => "Inventarios"
            );
        }

        //NAVEGACIÓN DE GESTIONES O ENTRADAS Y SALIDAS
        if (\Utilities\Security::isAuthorized($userID, "Menu_MntGestiones")) {
            $tmpNAVIGATION3[] = array(
                "nav_url" => "index.php?page=mnt_gestiones",
                "nav_label" => "Entradas y Salidas"
            );
        }


        //NAVEGACIÓN DE MARCAS
        if (\Utilities\Security::isAuthorized($userID, "Menu_MntMarcas")) {
            $tmpNAVIGATION3[] = array(
                "nav_url" => "index.php?page=mnt_marcas",
                "nav_label" => "Marcas"
            );
        }


        //NAVEGACIÓN DE USUARIOS ASIGNADOS
        if (\Utilities\Security::isAuthorized($userID, "Menu_MntAsignados")) {
            $tmpNAVIGATION3[] = array(
                "nav_url" => "index.php?page=mnt_asignados",
                "nav_label" => "Asignados"
            );
        }


        //NAVEGACIÓN DE FILIALES
        if (\Utilities\Security::isAuthorized($userID, "Menu_MntFiliales")) {
            $tmpNAVIGATION3[] = array(
                "nav_url" => "index.php?page=mnt_filiales",
                "nav_label" => "Filiales"
            );
        }


        //NAVEGACIÓN DE DEPARTAMENTOS
        if (\Utilities\Security::isAuthorized($userID, "Menu_MntDepartamentos")) {
            $tmpNAVIGATION3[] = array(
                "nav_url" => "index.php?page=mnt_departamentos",
                "nav_label" => "Departamentos"
            );
        }
        //NAVEGACINES DEL SISTEMA
        \Utilities\Context::setContext("NAVIGATION", $tmpNAVIGATION);
        \Utilities\Context::setContext("NAVIGATION2", $tmpNAVIGATION2);
        \Utilities\Context::setContext("NAVIGATION3", $tmpNAVIGATION3);
    }


    private function __construct()
    {
        
    }
    private function __clone()
    {
        
    }
}
?>
