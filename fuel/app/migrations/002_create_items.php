<?php

namespace Fuel\Migrations;

class Create_items
{
	public function up()
	{
		\DBUtil::create_table('items', array(
			'id' => array('type' => 'int', 'null' => false),
			'link' => array('null' => false, 'type' => 'text'),
			'title' => array('constraint' => 100, 'null' => false, 'type' => 'varchar'),
			'desc' => array('null' => false, 'type' => 'text'),
			'site_id' => array('constraint' => 11, 'null' => false, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'null' => true, 'type' => 'int'),
			'updated_at' => array('constraint' => 11, 'null' => true, 'type' => 'int'),
		), array('id'),array(
            array(
                'key' => 'site_id',
                'reference' => [
                    'table' => 'sites',
                    'column' => 'id',
                ],
            )
        ));
	}

	public function down()
	{
		\DBUtil::drop_table('items');
	}
}
