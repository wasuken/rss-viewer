<?php
return array(
	'_root_'  => 'item/show',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route

	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
    '/create'        => array('item/create'),
);
