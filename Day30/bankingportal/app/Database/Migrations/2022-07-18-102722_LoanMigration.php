<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LoanMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'loan_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'loan_amount' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'loan_duration' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'loan_interest' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'loan_status' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'unsigned' => true,
                'default' => 'pending',
            ],
        ]);

        $this->forge->addPrimaryKey('loan_id');
        $this->forge->addForeignKey('user_id', 'customer', 'user_id');
        $this->forge->createTable('loan');
    }

    public function down()
    {
        $this->forge->dropTable('loan');
    }
}
