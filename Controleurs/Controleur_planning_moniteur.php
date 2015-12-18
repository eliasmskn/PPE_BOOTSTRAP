<?php
session_start();
include ("../modeles/Modele.php");
include ("../modeles/Modele_extend.php");
include ('Controleur_Class/Controleur_class_candidat.php');
include ('Controleur_Class/Controleur_class_vehicule.php');
include ('Controleur_Class/Controleur_class_lecon.php');
include ('Controleur_Class/Controleur_class_moniteur.php');
include ('Controleur_Class/Controleur_class_planning.php');

$unMoniteur = new Moniteur();
$unModele = new Modele("localhost", "auto_ecole_ppe", "root", "");
$unModele->renseigner("moniteur","nummoniteur");
$unModelextend = new ModelExtend("localhost", "auto_ecole_ppe", "root", "");
$view = "planningmoniteur";
$chaine ="";		
$resultat = $unModelextend->selectAllTablePlanningMoniteur($view);




$chaine = "<table class='table table-striped'>
			<tr><td>Date debut</td><td>Date fin</><td>Heure debut leçon</td><td>Heure fin leçon</td><td>Numéro vehicule</td><td>Nom candidat</td><td>Etat du planning</td><td>Nom du Moniteur</td></tr>";				
			foreach ($resultat as $key => $value) 
			{				
				$unPlanning = new Planning();				
				$unPlanning->renseigner($value);
				$chaine .= $unPlanning->afficherPlanning();				
			}		
			$chaine .= "</table>";
			include ("../Vues/Vue_planning_moniteur.html");
?>			
			