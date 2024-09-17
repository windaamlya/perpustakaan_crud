<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Koleksipribadi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'KoleksiID' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'UserID' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'BukuID' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
        ]);

        $this->forge->addKey('KoleksiID', TRUE);
        $this->forge->createTable('Koleksipribadi');
    }

    public function down()
    {
        $this->forge->dropTable('Koleksipribadi');
    }
}
