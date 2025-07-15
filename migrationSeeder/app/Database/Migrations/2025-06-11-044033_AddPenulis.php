<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPenulis extends Migration
{
    public function up()
    {
	$this->forge->addColumn('penulis',[
        	'email' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
                'null'           => true
            ],
                'tanggal_lahir' => [
                'type'           => 'date',
				'null'           => true,
                ],
        ]);


    }

    public function down()
    {
        $this->forge->dropColumn('penulis', ['email','telepon']);
        
    }
}
