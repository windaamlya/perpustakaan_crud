<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ulasanbuku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'UlasanID'     => [
                'type'       => 'INT',
                'constraint' => '11',
                'usigned'    => TRUE,
                'auto_increment' =>  TRUE,
            ],
            'UserID' => [
                'type'     => 'INT',
                'constraint' => '11',
            ],
            'BukuID' => [
                'type'     => 'INT',
                'constraint' => '11',
            ],
            'Ulasan' => [
                'type'     => 'TEXT',
            ],
            'Rating' => [
                'type'     => 'INT',
                'constraint' => '11',
            ],
        ]);
        $this->forge->addKey('UlasanID');
        $this->forge->createTable('ulasanbuku',TRUE);
    }
    
    public function down()
    {
        $this->forge->dropTable('ulasanbuku');
    }
}
