<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HandphoneTabel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'merk' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tipe' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'spesifikasi' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('handphone');
    }

    public function down()
    {
        $this->forge->dropTable('handphone');
    }
}
