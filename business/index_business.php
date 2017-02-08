<?php

require_once "DAO/joueurDao.php";

class index
{
	public function test()
	{		
		$joueurDAO = new joueurDao();
		echo $joueurDAO->getPseudoFirstJoueur();
	}
}





?>