<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class user extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'UserID' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'Username' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'Password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'Email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'NamaLengkap' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'Alamat' => [
                'type' => 'TEXT',
            ],
        ]);

        $this->forge->addKey('UserID', TRUE);
        $this->forge->createTable('User');
    }

    public function down()
    {
        $this->forge->dropTable('User');
    }
}
