<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnToCustomersmsbio extends Migration
{
    public function up()
    {
        // Add the new column to the table
        $this->forge->addColumn('customersmsbio', [
            'employeeid' => [
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => true, // Set to false if the column is required
            ],
        ]);
    }

    public function down()
    {
        // Remove the column if rolling back the migration
        $this->forge->dropColumn('customersmsbio', 'employeeid');
    }
}
