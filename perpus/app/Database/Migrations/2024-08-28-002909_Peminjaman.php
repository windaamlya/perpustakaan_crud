<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class peminjaman extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'PeminjamanID' => [
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
            'TanggalPeminjaman' => [
                'type' => 'date',
            ],
            'TanggalPengembalian' => [
                'type' => 'date',
            ],
            'StatusPeminjaman' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
        ]);

        $this->forge->addKey('PeminjamanID', TRUE);
        $this->forge->createTable('Peminjaman');
    }

    public function down()
    {
        $this->forge->dropTable('Peminjaman');
    }
}
