<?php
require_once 'model/usuario.model.php';
require_once 'model/planilla.model.php';

error_reporting(E_ALL ^ E_NOTICE);

class PlanillasController{
    private $auth, $modelUsuario, $modelPlanilla;

    // Metodo constructor
    public function __CONSTRUCT()
    {
        $this->modelUsuario = new Usuario();
        $this->modelPlanilla = new Planilla();
        $this->auth  = FactoryAuth::getInstance();

        // Hace un llamado al metodo estaAutenticado para validar si es una sesion registrada
        try {
            $this->auth->estaAutenticado();
        } catch (Exception $e) {
            //header('Location: index.php');
        }
    }    

    // Metodo que estructura la pagina por defecto
    public function Index(){
        //Carga las vistas para presentar al usuario
        require_once 'view/planillas/header.view.php';
        require_once 'view/planillas/navbar.view.php';
        require_once 'view/planillas/listar.view.php';
        require_once 'view/planillas/footer.view.php';
    }

    // Metodo para cargar formulario de in greso nueva planilla
    public function nuevaPlanilla()
    {
        require_once 'view/planillas/header.view.php';
        require_once 'view/planillas/navbar.view.php';
        require_once 'view/planillas/nueva.view.php';
        require_once 'view/planillas/footer.view.php';
    }

    // Metodo para guardar una planilla
    public function guardarPlanilla()
    {
        $planilla = new Planilla();

        $planilla->planilla_fecha = $_REQUEST['fechaReunion'];
        $planilla->planilla_titulo = $_REQUEST['tituloReunion'];
        $planilla->planilla_descripcion = $_REQUEST['descripcionReunion'];
        $planilla->planilla_lugar = $_REQUEST['lugarReunion'];
        $planilla->planilla_politica = $_REQUEST['politicaImpactada'];
        $planilla->planilla_usuario_id = '10031210';

        $planilla->planilla_id = $this->modelPlanilla->Registrar($planilla); //Registra y recibe el ID del nuevo registro

        header('Location: index.php?c=Planillas&a=Index&token=' . @$_GET['token']);



    }
    
}