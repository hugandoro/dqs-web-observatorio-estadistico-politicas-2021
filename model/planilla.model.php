<?php
class Planilla
{
	private $pdo;

	// Inicializa variables para campos que conforman la planilla
	public $planilla_id;
	public $planilla_fecha;
	public $planilla_titulo;
	public $planilla_descripcion;
	public $planilla_lugar;
	public $planilla_politica;
	public $planila_usuario_id;

	// Metodo para iniciar el constructor
	public function __CONSTRUCT()
	{
		try {
			$this->pdo = Database::StartUp();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}


	// Metodo para crear un nuevo registro
	public function Registrar(Planilla $data)
	{
		try {

			$sql = "INSERT INTO planillas (fecha, titulo, descripcion, lugar, politica, usuario_id) 
		        VALUES (?, ?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->planilla_fecha,
						$data->planilla_titulo,
						$data->planilla_descripcion,
						$data->planilla_lugar,
						$data->planilla_politica,
						$data->planilla_usuario_id
					)
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}

		return $this->pdo->lastInsertId(); //Retorna el ID (Autoincremental) del registro que se acaba de crear
	}

	// Metodo para listar todas las planillas de determinado USUARIO
	public function Listar($usuario)
	{
		try {
			$result = array();
			$stm = $this->pdo->prepare("SELECT * FROM planillas WHERE usuario_id = '$usuario' ORDER BY fecha DESC");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);

		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}
