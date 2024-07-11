<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dispatch extends Migration
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
            'technician_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'technician_code' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'technician_gmail' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'technician_image' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'departments' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],

        ]); 
        $this->forge->addKey('id', true);
        $this->forge->createTable('dispatch');
    }

    public function down()
    {
        $this->forge->dropTable('dispatch');
    }
}