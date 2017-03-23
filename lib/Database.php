<?php
    
 class Database{
 	public $db;
 	protected	$resultado;
 	protected	$prep;
 	protected	$consulta;

    
 	function __construct ( $dbhost, $dbuser, $dbpass, $dbname){
        
 		$this->db= new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        
 		if($this->db->connect_errno ){
            trigger_error("Falto la conexion con MySQL,Tipo de Error -> ({$this->db->connect_error})", E_USER_ERROR);
 		}
 		
        // este metodo debe ir despues de hacer una creacion
        $this->db->set_charset(DB_CHARSET);
        
 	}
    
    public function getUsuarios(){
        $this->resultado = $this->db->query("SELECT * from usuario");
        return $this->resultado ->fetch_all(); //devuelve un array de todos los registross
 }
}


?>
