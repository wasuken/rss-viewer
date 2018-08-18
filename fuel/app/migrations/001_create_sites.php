<?php

namespace Fuel\Migrations;

class Create_sites
{
	public function up()
	{
		\DBUtil::create_table('sites', array(
			'id' => array('type' => 'int', 'null' => false),
			'url' => array('constraint' => 100, 'null' => false, 'type' => 'varchar'),
			'name' => array('null' => false, 'type' => 'text'),
			'created_at' => array('constraint' => 11, 'null' => true, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'null' => true, 'type' => 'int'),
		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('sites');
	}
}
