<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JoBModel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => false,
            ],
            'jobid' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'callId' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'customerName' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'jobClass' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jobType' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jobTypeDescription' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'created_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
            'updated_at' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
        ]);

        $this->forge->addKey('id', true); // Primary key
        $this->forge->createTable('Jobdetail'); // Create the table
    }

    public function down()
    {
        $this->forge->dropTable('Jobdetail'); // Drop the table if needed
    }
}
