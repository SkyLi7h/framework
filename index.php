<?php
	//Fenêtre principale de l'application. Appel du fichier de configuration et du template.
	//A NE PAS TOUCHER
	require_once "config.php";
	
	if($DEBUG)
	{
		require_once "business/debug.php";
		$debug = new debugAppli();
		$debug->show("Version $VERSION");
		$debug->show("$NAME_APPLICATION tourne avec le template $TEMPLATE et avec des transactions $DB_ACCESS");	
	}
	
	if(isset($_GET["mod"]))
	{		
		$_SESSION['mod'] = $_GET["mod"];	
	}
	else
	{
		$_SESSION['mod'] = $MOD_START;	
	}
	
		require_once "template/$TEMPLATE/index.php";

?>