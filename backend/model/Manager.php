<?php

namespace Caro\Projet3\Backend\Model;

class Manager
{
	protected function dbConnect()
	{
		$db = new \PDO('mysql:host=localhost;dbname=blogforteroche;charset=utf8', 'root', '');
    	return $db;
	}

}


