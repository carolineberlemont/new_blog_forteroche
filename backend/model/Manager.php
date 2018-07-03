<?php

namespace Caro\Projet3\Backend\Model;

class manager
{
	protected function dbConnect()
	{
		$db = new \PDO('mysql:host=localhost;dbname=blogforteroche;charset=utf8', 'root', '');
    	return $db;
    	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

}


