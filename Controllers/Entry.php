<?php namespace Meinlib\Entry\Controllers;

class Entry extends \App\Controllers\BaseController
{
	private $viewPath = "Meinlib\Entry\Views\\";

	public function index()
	{
		return view($this->viewPath.'welcome_message');
	}

	//--------------------------------------------------------------------

}
