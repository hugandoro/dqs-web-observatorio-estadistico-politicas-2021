<?php

class PoliticasController{
        
    // Metodo que estructura la pagina por defecto
    public function Index(){
        //Carga las vistas para presentar al usuario
        require_once 'view/header.view.php';
        require_once 'view/navbar.view.php';
        require_once 'view/footer.view.php';
    }

    // Metodo que estructura la pagina por defecto - EQUIDAD DE GENERO
    public function Genero(){
        //Carga las vistas para presentar al usuario
        require_once 'view/header.view.php';
        require_once 'view/navbar.view.php';
        require_once 'view/politicas/genero/home.view.php';
        require_once 'view/footer.view.php';
    }

    // Metodo que estructura la pagina por defecto - DISCAPACIDAD
    public function Discapacidad(){
        //Carga las vistas para presentar al usuario
        require_once 'view/header.view.php';
        require_once 'view/navbar.view.php';
        require_once 'view/politicas/discapacidad/home.view.php';
        require_once 'view/footer.view.php';
    }

        // Metodo que estructura la pagina por defecto - SEGURIDAD Y CONVIVENCIA
    public function Seguridad(){
        //Carga las vistas para presentar al usuario
        require_once 'view/header.view.php';
        require_once 'view/navbar.view.php';
        require_once 'view/politicas/seguridad/home.view.php';
        require_once 'view/footer.view.php';
    }

    // Metodo que estructura la pagina por defecto - INFANCIA
    public function Infancia(){
        //Carga las vistas para presentar al usuario
        require_once 'view/header.view.php';
        require_once 'view/navbar.view.php';
        require_once 'view/politicas/infancia/home.view.php';
        require_once 'view/footer.view.php';
    }

        // Metodo que estructura la pagina por defecto - JUVENTUDES
    public function Juventudes(){
        //Carga las vistas para presentar al usuario
        require_once 'view/header.view.php';
        require_once 'view/navbar.view.php';
        require_once 'view/politicas/juventudes/home.view.php';
        require_once 'view/footer.view.php';
    }

    // Metodo que estructura la pagina por defecto - PRESUPUESTO PARTICIPATIVO
    public function Presupuesto(){
        //Carga las vistas para presentar al usuario
        require_once 'view/header.view.php';
        require_once 'view/navbar.view.php';
        require_once 'view/politicas/presupuesto/home.view.php';
        require_once 'view/footer.view.php';
    }

        // Metodo que estructura la pagina por defecto - MIGRACIONES
    public function Migraciones(){
        //Carga las vistas para presentar al usuario
        require_once 'view/header.view.php';
        require_once 'view/navbar.view.php';
        require_once 'view/politicas/migraciones/home.view.php';
        require_once 'view/footer.view.php';
    }

    // Metodo que estructura la pagina por defecto - ADULTO MAYOR
    public function Adulto(){
        //Carga las vistas para presentar al usuario
        require_once 'view/header.view.php';
        require_once 'view/navbar.view.php';
        require_once 'view/politicas/adulto/home.view.php';
        require_once 'view/footer.view.php';
    }
    
}