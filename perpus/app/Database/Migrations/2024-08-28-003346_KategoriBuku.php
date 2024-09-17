<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kategoribuku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'KategoriID'     => [
                'type'       => 'INT',
                'constraint' => '11',
                'usigned'    => TRUE,
                'auto_increment' =>  TRUE,
            ],
            'NamaKategori' => [
                'type'     => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);
        $this->forge->addKey('KategoriID');
        $this->forge->createTable('kategoribuku',TRUE);
    }
    
    public function down()
    {
        $this->forge->dropTable('Kategoribuku');
    }
}
