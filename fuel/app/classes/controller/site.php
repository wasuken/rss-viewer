<?php

class Controller_Site extends Controller_Template
{

	public function action_show()
	{
		$data["subnav"] = array('show'=> 'active' );
		$this->template->title = 'Site &raquo; Show';
		$this->template->content = View::forge('site/show', $data);
	}

}
