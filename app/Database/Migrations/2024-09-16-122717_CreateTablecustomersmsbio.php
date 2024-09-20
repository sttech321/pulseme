<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCustomerSmsBioTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'campaign_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => false,
            ],
            'contact_number' => [
                'type' => 'VARCHAR',
                'constraint' => '15',
                'null' => false,
            ],
            'reference' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],
            'message_id' => [
                'type' => 'BIGINT',
                'null' => false,
            ],
            'sms_count' => [
                'type' => 'INT',
                'null' => false,
            ],
            'used_credits' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'null' => false,
            ],
            'sent_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('customersmsbio');
    }

    public function down()
    {
        $this->forge->dropTable('customersmsbio');
    }
}
