<?php
$formulaire = "";
$formulaire = "	<form methode='post' action = 'Controleur_ajout_planning.php'><br/><br/>
				Date du début de la leçon</td><td> <input type='text' name='datedebut'><br/><br/>
				Date de la fin de la leçon </td><td><input type='text' name='datefin'><br/><br/>
				Heure du début de la leçon </td><td><input type='text' name='heuredebut'><br/><br/>
				Date de la fin de la leçon </td><td><input type='text' name='heurefin'><br/><br/>
				Numéro du véhicule </td><td><input type='text' name='numvehicule'><br/><br/>
				Nom du candidat </td><td><input type='text' name='nomcandidat'><br/><br/>
				Nom du moniteur </td><td><input type='text' name='nommoniteur'><br/><br/>
				<input type='submit' name=	'enregistrer' value='Enregistrer'><br/><br/>
				 <input type='reset' name='annuler' value='Annuler'>";




if(isset($_POST['enregistrer']))
{
	echo "je suis rentré dans le if";
}
include ("../Vues/Vue_ajout_planning.html");

?>