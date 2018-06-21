<?php

namespace Caro\Projet3\Frontend\Model;

require_once("model/Manager.php");

class MessageFlashManager extends Manager
{
	public function mflash($message, $error_message)
	{
		$flash[0] = $message;
    	$flash[1] = $error_message;
	}
}

