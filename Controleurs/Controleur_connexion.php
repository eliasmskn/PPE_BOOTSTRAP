<?php
include ("../Modeles/Modele.php");
include ("../Modeles/Modele_extend.php");
include ('Controleur_class/Controleur_class_moniteur.php');
include ('Controleur_class/Controleur_class_VueConnexionMoniteur.php');
include ('../Vues/Vue_connexion_moniteur.html');
$unModel = new Modele("localhost", "auto_ecole_ppe", "root", "");
$unModel->renseigner("moniteur","nummoniteur");
	if(isset($_POST['connexion']))
	{	
		$mail = $_POST['mailmoniteur'];
		$mdp = $_POST['mdpmoniteur'];
		try
		{
			$resultat = $unModel->selectwhereconnexion($mail);			
			if($resultat == false)
			{
				echo "Requette non effectuée.<br/>";
			}			
			foreach ($resultat as $key => $value)
			{
				if($value == $mdp)
				{
					header('Location: Controleur_moniteur.php');	
				}				
			}
		}
		catch(EXEPTION $e)
		{
			echo "Erreur".$e;
		}
	}
?>
