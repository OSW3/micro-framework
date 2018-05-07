<?php 
$routes = [

	/************************
	 * Default
	 ************************/

	["home",			"/",					"Default#home",			"GET"],
	["about",			"/about",				"Default#about",		"GET"],
	["contact",			"/contact",				"Default#contact",		"GET"],
	["help",			"/help",				"Default#help",			"GET"],
	["faq",				"/faq",					"Default#faq",			"GET"],
	["legal",			"/legal",				"Default#legal",		"GET"],

	/************************
	 * Default
	 ************************/

	["documentation",	"/documentation",		"Documentation#index",	"GET"],


	/************************
	 * Security
	 ************************/

	["signup",			"/signup",				"Security#signup",		"POST"],
	["signin",			"/signin",				"Security#signin",		"GET|POST"],
	["logout",			"/logout",				"Security#logout",		"GET"],
	
];