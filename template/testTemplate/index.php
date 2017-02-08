<html>
	<header>
		<Title><?php echo $NAME_APPLICATION;?></Title>
		<link rel="stylesheet" type="text/css" href="template/<?php echo $TEMPLATE; ?>/style/style.css" media="screen" /> 
	</header>	
	<body>
	
		<div id="include">
			<?php		
				//Definition de la vue et de la business utilisée
				$viewClass = $_SESSION['mod']."_view.php";
				$businessClass = $_SESSION['mod']."_business.php";
											
				//Message si debug
				if($DEBUG)
					$debug->show("Lancement du template $TEMPLATE");

				//include de la vue et de la business
				include_once "./business/".$_SESSION['mod']."_business.php";		
				include_once "view/".$_SESSION['mod']."_view.php";
			?>
		</div>
			
	</body>
</html>