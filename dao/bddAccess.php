<?php

class bdd
{
	public function connexion($HOST, $DBNAME, $LOGIN, $PASS)
	{
		return new PDO('mysql:host='.$HOST.';dbname='.$DBNAME.';charset=utf8', $LOGIN, $PASS);
	}
	
}







?>