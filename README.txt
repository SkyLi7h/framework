///////Configuration///////

Consultez le fichier config.php à la racine !

///////CREATION DE MODULE///////

Pour créer un nouveau module, il vous faut créer une nouvelle view et une classe business qui s'y rapporte.
	-La view se situe dans le template utilisé dans le dossier "view".
	-La business se situe dans le dossier business à la racine du site.

\Attention/
	Le nom entre la vue et la business doivent être cohérents !
		Exemple : view -> MonModule_view.php
			  business -> MonModule_business.php

View => Ne contient que le code pour l'affichage au sein du template.
Business => Une classe avec la logique utilisée pour l'affichage au sein de la view

///////DAO///////

Ce dossier contient, par fichier PHP, une classe accèdant à des données spécifiques dans la base de données.
Exemple:
	JoueurDAO.php -> Une classe avec méthode ( get, set, del, .. ) accèdant aux données des joueurs dans la BDD.

///////Entity///////

Ce dossier contient tout les modèles, c'est à dire les classes à partir desquels les objets pourront être instanciés.

///////Organisation///////
Les fichiers DAO et Entity dont vous avez besoin ne doivent être appellés que dans la business.
La view n'appelle que la classe business nécessaire.

///////Ajouter un lien vers votre nouveau module///////
Le lien est simple -> <a href='../project/index.php?mod=MonModule'>MonModule</a> depuis une autre view.

