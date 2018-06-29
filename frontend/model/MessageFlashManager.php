<?php

namespace Caro\Projet3\Frontend\Model;

class MessageFlashManager
{
	public function mflash($message, $error_message)
	{
		$flash[0] = $message;
    	$flash[1] = $error_message;
	}
}

