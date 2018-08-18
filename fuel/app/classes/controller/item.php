<?php

class Controller_Item extends Controller_Template
{

	public function action_show()
	{
        $site = Model_Site::forge();
        $site->getRss();
		$data["subnav"] = array('show'=> 'active' );
		$this->template->title = 'Item &raquo; Show';
		$this->template->content = View::forge('item/show', $data);
	}
    public function action_create()
    {
        $data["subnav"] = array('create'=> 'active' );
		$this->template->title = 'Item &raquo; create';
		$this->template->content = View::forge('item/create', $data);
    }

}
