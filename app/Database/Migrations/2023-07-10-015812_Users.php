<?php

namespace App\Database\Migrations;
 
use CodeIgniter\Database\Migration;
 
class Users extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'username'          => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'password'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			]
 
		]);
        $this->forge->addKey('id', TRUE);
		// $this->forge->addPrimaryKey('username', true);

		$this->forge->createTable('users', TRUE);
	}
 
	//--------------------------------------------------------------------
 
	public function down()
	{
		$this->forge->dropTable('users');
	}
}
