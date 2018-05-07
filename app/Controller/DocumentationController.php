<?php

namespace Controller;

use \OSW3\Controller\Controller;

class DocumentationController extends Controller
{
	/**
	 * Documentation index
	 */
	public function indexAction()
	{
		$this->render('Documentation/index');
	}

}