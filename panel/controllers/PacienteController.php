<?php 

	/**
	* 
	*/
	class PacienteController extends Controller
	{		
		
		function __construct()
		{
			parent::__construct();
		}

		function indexAction()
		{
			$paciente = new Paciente();
			$all_pac=$paciente::all();

			
			/*echo "<pre>";
			print_r($all_pac);
			echo "</pre>";*/

			$valores=array();
			foreach ($all_pac as $key => $value) {
				$valores[$key]['pa_nombre']=$value->pa_nombre;
				$valores[$key]['pa_apellidos']=$value->pa_apellidos;
				$valores[$key]['pa_edad']=$value->pa_edad;
				$valores[$key]['pa_dni']=$value->pa_dni;
				$valores[$key]['pa_diagnostico']=$value->pa_diagnostico;
	
			}
			$pac_param=array("pacAll"=>$valores,
                                        "title"=>"Lista de Pacientes");
			/*echo "<pre>";
			print_r($valores);
			echo "</pre>";
			$array1=array(array("pa_nombre"=>"ivan","pa_nombre"=>"ivan"));
			echo "<pre>";
			print_r($array1);
			echo "</pre>";exit;*/
			
			$this->_view->display('index.twig',$pac_param);
		}

		function insertarAction()
		{
				

			if($this->isPost())
			{
				/*$paciente = new Paciente();
				$paciente->pa_nombre=$_POST['p_nombre'];
				$paciente->pa_apellidos=$_POST['p_apellidos'];
				$paciente->pa_dni=$_POST['p_dni'];
				$paciente->pa_edad=$_POST['p_edad'];
				$paciente->pa_telefono=$_POST['p_phone'];
				$paciente->pa_direccion=$_POST['p_dir'];
				$paciente->pa_diagnostico=$_POST['p_diag'];
				$paciente->pa_tra_id=1;
				$paciente::create();*/

				$paciente = new Paciente();
				$paciente->pa_nombre="eduardo";
				$paciente->pa_apellidos="huapaya romero";
				$paciente->pa_dni=47012803;
				$paciente->pa_edad=25;
				$paciente->pa_telefono=940157458;
				$paciente->pa_direccion="villa el salvador";
				$paciente->pa_diagnostico="heloma en los pies";
				$paciente->pa_tra_id=1;
				$paciente::create();
			}


			$param=array("titleform"=>"Form Paciente",
						"title"=>"Registro Paciente"
						);
			$this->_view->display("insertar.twig",$param);
		}

		function editAction()
		{

		}
	}




 ?>