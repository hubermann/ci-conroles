<?php defined('BASEPATH') OR exit('No direct script access allowed');  
 
class Migration_Create_Permisos extends CI_Migration
{
    public function up()
    {
        //TABLA 
        $this->dbforge->add_field(
            array(
                "id"        =>        array(
                    "type"                =>        "INT",
                    "constraint"        =>        11,
                    "unsigned"            =>        TRUE,
                    "auto_increment"    =>        TRUE,
 
                ),
	
					"role_id"    		=>        array(
                    "type"                =>        "INTEGER",
                    "constraint"        	=>        2,
                ),
	
					"modulo_id"    		=>        array(
                    "type"                =>        "INTEGER",
                    "constraint"        	=>        11,
                ),
	
					"view"    		=>        array(
                    "type"                =>        "INTEGER",
                    "constraint"        	=>        1,
                ),

	
					"build"    		=>        array(
                    "type"                =>        "INTEGER",
                    "constraint"        	=>        1,
                ),

	
					"modify"    		=>        array(
                    "type"                =>        "INTEGER",
                    "constraint"        	=>        1,
                ),
	
					"destroy"    		=>        array(
                    "type"                =>        "INTEGER",
                    "constraint"        	=>        1,
                ),
	
            )
        );
 
        $this->dbforge->add_key('id', TRUE); //ID como primary_key
        $this->dbforge->create_table('permisos');//crea la tabla
    }
 
    public function down()
    {
        //ELIMINAR TABLA
        $this->dbforge->drop_table('permisos');
 
    }
}
?>
