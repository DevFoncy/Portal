<? php
 class database {
 	public $db;
 	protected	$resultado;
 	protected	$prep;
 	protected	$consulta;

 	public function __construct ( $dbhost, $dbuser, $dbpass, $dbname){
 		$this->db= new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 		if($this->db->maxdb_connect_errno ){
 			trigger_error("Falto la conexion con MySQL");
 		}
 		$this 
 	}
 }

 