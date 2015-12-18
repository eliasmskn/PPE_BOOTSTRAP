<?php

		// ici on px ecrire tout code de traitement des données.


		// ici appel de la vu

		if(isset($_GET['action']))
		{
			$action = $_GET['action'];
			switch ($action) 
			{
				case 1:
					include ("../Vues/Vue_acceuil.html");
					break;
				case 2:
					include ("Controleur_connexion.php");				
					break;
				case 3:
					include ("Controleur_gestion.php");
					break;
				case 4:
					include ("Controleur_ajout_vehicule.php");
					break;
				
				default:
					
					break;
			}
		}	

include ("../Vues/Vue_acceuil.html"); 
?>

