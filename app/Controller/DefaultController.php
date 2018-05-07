<?php

namespace Controller;

use \OSW3\Controller\Controller;

class DefaultController extends Controller
{
	/**
	 * Home
	 */
	public function homeAction()
	{
		$this->render('Default/home');
	}

	/**
	 * About
	 */
	public function aboutAction()
	{
		$this->render('Default/about');
	}

	/**
	 * Contact
	 */
	public function contactAction()
	{
		$this->render('Default/contact');
	}

	/**
	 * Help
	 */
	public function helpAction()
	{
		$this->render('Default/help');
	}

	/**
	 * FAQ
	 */
	public function faqAction()
	{
		$this->render('Default/faq');
	}

	/**
	 * Legal
	 */
	public function legalAction()
	{
		$this->render('Default/legal');
	}

}