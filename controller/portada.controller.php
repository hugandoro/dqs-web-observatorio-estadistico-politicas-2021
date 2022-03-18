<?php
error_reporting(E_ALL ^ E_NOTICE);

class PortadaController
{

    // Metodo constructor
    public function __CONSTRUCT()
    {

    }

    // Metodo que estructura la pagina por defecto de la pantalla de logueo
    public function Index()
    {
        require_once 'view/header.view.php';
        require_once 'view/navbar.view.php';
        require_once 'view/portada/home.view.php';
        require_once 'view/footer.view.php';
    }

    // Metodo que estructura la pagina por defecto de politicas publicas
    public function Politicas()
    {
        require_once 'view/header.view.php';
        require_once 'view/navbar.view.php';
        require_once 'view/politicas/home.view.php';
        require_once 'view/footer.view.php';
    }

    // Metodo que estructura la pagina por defecto de BUENAS PRACTICAS
    public function buenasPracticas()
    {
        require_once 'view/header.view.php';
        require_once 'view/navbar.view.php';
        require_once 'view/politicas/buenaspracticas.view.php';
        require_once 'view/footer.view.php';
    }

}
