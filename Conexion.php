
<?php

class Conexion {

	public $server;
	public $user;
	public $pass;
	public $dataBase;
	public $con;

	public function Conexion($server,$user,$pass,$dataBase){
		$this->server = $server;
		$this->user=$user;
		$this->pass = $pass;
		$this->dataBase = $dataBase;
	}

	public function connect(){
		if(mysqli_error($this->con=mysqli_connect($this->server,$this->user,$this->pass,$this->dataBase))){
			// return echo "No se completado la conexion. " . mysqli_error();
			echo "No se ha podido establecer la conexion " . mysqli_error();
		}
		else
		{
			  echo "Conexion exitosa.";

		}
	}

	public function close(){
		if(mysql_close($this->con))
		{
			  echo "Conexion cerrada correctamente.";

		}
		else
		{
			  echo "No se ha podido finalizar la conexion.". mysqli_error();
		}
	}

	public function select($query)
	{
		$result = mysqli_query($query);
		if ($result)
		{
			return  $result;
		}
		else
		{
		 	echo "Ha ocurrido un error con su consulta". mysqli_error();
		}

	}

	public function insert($query){
		
		if (mysqli_query($query))
		{
		 	echo "Se insertaron corretamente los valoress";
		}
		else
		{
		 	echo "Ha ocurrido un error insertado los valores" . mysqli_error();
		}

	}

	public function delete($query)
	{
		if(mysqli_query($query))
		{
		 	echo "Fila eliminada con exito";
		}
		else
		{
		 	echo "Ha ocurrido un error al intentar eliminar esos datos";
		}
	}

	public function update($query)
	{
		if(mysqli_query($query))
		{
		 	echo "Actualizacion exitosa.";
		}
		else
		{
		 	echo "La actualizacion ha fallado. " . mysqli_error();
		}
	}
}

?>