<?php namespace Mein\Entry\Controllers;

class Entry extends \App\Controllers\BaseController
{
	private $viewPath = "Mein\Entry\Views\\";

	public function index()
	{
		return view($this->viewPath.'welcome_message');
	}

	//--------------------------------------------------------------------

}
