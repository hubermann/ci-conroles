<?php defined('BASEPATH') OR exit('No direct script access allowed');  
 
class Migration_Create_Citas extends CI_Migration
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
					"evento_id"    		=>        array(
                    "type"                =>        "TEXT",
                    "constraint"        	=>        100,
                ),
	
					"usuario_id"    		=>        array(
                    "type"                =>        "TEXT",
                    "constraint"        	=>        100,
                ),
	
					"cita"    		=>        array(
                    "type"                =>        "TEXT",
                    "constraint"        	=>        100,
                ),
	
					"clasificacion_id"    		=>        array(
                    "type"                =>        "TEXT",
                    "constraint"        	=>        100,
                ),
	
            )
        );
 
        $this->dbforge->add_key('id', TRUE); //ID como primary_key
        $this->dbforge->create_table('citas');//crea la tabla
    }
 
    public function down()
    {
        //ELIMINAR TABLA
        $this->dbforge->drop_table('citas');
 
    }
}
?>