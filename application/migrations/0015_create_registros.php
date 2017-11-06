<?php defined('BASEPATH') OR exit('No direct script access allowed');  
 
class Migration_Create_Registros extends CI_Migration
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
					"usuario_id"    		=>        array(
                    "type"                =>        "TEXT",
                    "constraint"        	=>        100,
                ),
	
					"evento_id"    		=>        array(
                    "type"                =>        "TEXT",
                    "constraint"        	=>        100,
                ),
	
					"pago"    		=>        array(
                    "type"                =>        "TEXT",
                    "constraint"        	=>        100,
                ),
	
					"neto"    		=>        array(
                    "type"                =>        "TEXT",
                    "constraint"        	=>        100,
                ),
	
					"comision"    		=>        array(
                    "type"                =>        "TEXT",
                    "constraint"        	=>        100,
                ),
	
					"asistio"    		=>        array(
                    "type"                =>        "TEXT",
                    "constraint"        	=>        100,
                ),
	
					"confirmado"    		=>        array(
                    "type"                =>        "TEXT",
                    "constraint"        	=>        100,
                ),
	
					"created_at"    		=>        array(
                    "type"                =>        "TEXT",
                    "constraint"        	=>        100,
                ),
	
					"updated_at"    		=>        array(
                    "type"                =>        "TEXT",
                    "constraint"        	=>        100,
                ),
	
            )
        );
 
        $this->dbforge->add_key('id', TRUE); //ID como primary_key
        $this->dbforge->create_table('registros');//crea la tabla
    }
 
    public function down()
    {
        //ELIMINAR TABLA
        $this->dbforge->drop_table('registros');
 
    }
}
?>