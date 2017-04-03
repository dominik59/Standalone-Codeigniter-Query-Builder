<?
/**
* This sample is made based on codethics https://gist.github.com/codethics/cbdbf163c0f82142a812 repository, I just changed it for my needs
*/
define( 'BASEPATH', realpath( dirname( __FILE__ ) ) . '/../system/' ); // Define BASEPATH and APPPATH to make database initialize properly
define( 'APPPATH', realpath( dirname( __FILE__ ) ) . '/../' ); //BASEPATH should point at Codeigniter's system folder and APPPATH on the root of Your project
include_once('system/database/DB.php'); // this should point to place where Codeigniter DB.php is available

function log_message(){} // copy that definition to Codeigniter system/database/DB.php just before "function &DB($params = '', $query_builder_override = NULL)"

function loadDatabase() {// function which allows to initialize Database Query Builder 
    $database = DB( '', true );
    return $database;
}

$db = loadDatabase();
$query = $db->get('table');
foreach($query->result_array() as $data){
	print_r($data);
}
$query->free_result();
