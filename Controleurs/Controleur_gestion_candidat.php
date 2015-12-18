<?php
	include ("../Modeles/Modele.php");
	include ("../Modeles/Modele_extend.php");
	include ('../Controleurs/Controleur_Class/Controleur_class_candidat.php');
	
	$unModele = new Modele("localhost", "auto_ecole_ppe", "root", "");
	$unModele->renseigner("candidat","numclient");
	$unModelextend = new ModelExtend("localhost", "auto_ecole_ppe", "root", "");
	if(isset($_POST['inserer']))
	{
		$id = 'numclient';
		$champ1 = 'nomclient';
		$champ2 = 'mailclient';
		$valeur1 = $_POST['nomclient'];
		$valeur2 = $_POST['mailclient'];
		$unModelextend->renseigner("candidat","numclient");
		$resultat = $unModelextend->selectwhereici($id, $champ1, $champ2, $valeur1, $valeur2);
		
		if (!$resultat) 
		{
			$unModele = new Modele("localhost", "auto_ecole_ppe", "root", "");
			$unModele->renseigner("candidat","numclient");
			$unCandidat = new Candidat();	
			$unCandidat->renseigner($_POST);
			$tab = $unCandidat->serialiser();

			$unModele->insert($tab);
				
			$notif= "Nouveau client ajouté.";
		}
		else
		{
			$notif= "Client déjà enregistré";
		}
		
	}
		
				$resultats = $unModele->selectAll();
				$Chaine="<table class='table table-striped'>
						<tr><td> Numero Client</td><td>Nom Client</td><td> Prenom Client</td><td>Adresse Client</td>
						<td>Date de naissance</td><td>Telephone Client</td><td>Mail Client</td><td>Date d'inscription</td>
						<td>Mode de facturation</td><td>Catégorie</td><td>Actions</td></tr>";

				foreach ($resultats as $unresultat) 
				{
					$unCandidat = new Candidat();
					$unCandidat->renseigner($unresultat);
					
					$Chaine.="<tr>".$unCandidat->afficher();
					$Chaine.="<td>"
						."<a href='Controleur_gestion_candidat.php?action=1&id=".$unCandidat->getNumClient()."'><img src='../Images/poubelle.jpg' weight=20 height=20/></a>"
						."<a href='Controleur_gestion_candidat.php?action=2&id=".$unCandidat->getNumClient()."'><img src='../Images/voir.jpg' weight=20 height=20/></a>"
						."<a href='Controleur_gestion_candidat.php?action=3&id=".$unCandidat->getNumClient()."'><img src='../Images/crayon.jpg' weight=20 height=20/></a>"
						."</td></tr>";
				}
				$Chaine.= "</table>";

				$modif = "";
				$chaine = "";
				if(isset($_GET['action']))
				{
					$action = $_GET['action'];
					$id = $_GET['id'];

					switch ($action) {
						case 1:
							$unModele->delete($id);
							header('Location: Controleur_gestion_candidat.php');
							break;
						case 2:
							$uneResultat = $unModele->selectwhere($id);
							$unCandidat = new Candidat();
							$unCandidat->renseigner($unresultat);
							$chaine .= "Infos d'un Candidat <br/>";
							$chaine .= $unCandidat->lister();
							break;
						case 3:
							$unCandidat = new Candidat();
							$unResultat = $unModele->selectwhere($id);						
							$unCandidat->renseigner($unResultat);
							$modif ="<h2>Modidfication d'un candidat</h2></br></br>
									<form class='form-horizontal' role='form' method='post' action='Controleur_gestion_candidat.php'>
									<div class='col-sm-2'>
		 							</div>		
		 							<div class='form-group'>
								      <div class='col-sm-4'>
								      <input type='hidden' name='numclient' class='form-control' id='numclient' value='".$unCandidat->getNumClient()."'>
								    </div></div>
								    <div class='col-sm-2'>
		 							</div>										
								    <div class='form-group'>
								      <label class='control-label col-sm-2' for='Nom'>Nom :</label>
								      <div class='col-sm-4'>
								      <input type='text' name='nomclient' class='form-control' id='nomclient' value='".$unCandidat->getNomClient()."'>
								    </div></div>
								    <div class='col-sm-2'>
		 							</div>								
								    <div class='form-group'>
								      <label class='control-label col-sm-2' for='prenom'>Prenom :</label>
								      <div class='col-sm-4'>
								      <input type='text' name='prenomclient' class='form-control' id='prenomclient' value='".$unCandidat->getPrenomClient()."'>
								    </div></div>
								    <div class='col-sm-2'>
		 							</div>								
								    <div class='form-group'>
								      <label class='control-label col-sm-2' for='adresse'>Adresse :</label>
								      <div class='col-sm-4'>
								      <input type='text' name='adresseclient' class='form-control' id='adresseclient' value='".$unCandidat->getAdresseClient()."'>
								    </div></div>
								    <div class='col-sm-2'>
		 							</div>								
								    <div class='form-group'>
								      <label class='control-label col-sm-2' for='datedenaissanceclient'>Date de naissance :</label>
								      <div class='col-sm-4'>
								      <input type='date' name='datedenaissanceclient' class='form-control' id='datedenaissanceclient' value='".$unCandidat->getDateDeNaissanceClient()."'>
								    </div></div>
								    <div class='col-sm-2'>
		 							</div>								
								    <div class='form-group'>
								      <label class='control-label col-sm-2' for='telephoneclient'>Numero Telephone :</label>
								      <div class='col-sm-4'>
								      <input type='text' name='telephoneclient' class='form-control' id='telephoneclient' value='".$unCandidat->getTelephoneClient()."'>
								    </div></div>
								    <div class='col-sm-2'>
		 							</div>								
								    <div class='form-group'>
								      <label class='control-label col-sm-2' for='mailclient'>Adresse mail :</label>
								      <div class='col-sm-4'>
								      <input type='text' name='mailclient' class='form-control' id='mailclient' value='".$unCandidat->getMailClient()."'>
								    </div></div>
								    <div class='col-sm-2'>
		 							</div>								
								    <div class='form-group'>
								      <label class='control-label col-sm-2' for='dateinscriptionclient'>Date d'inscription :</label>
								      <div class='col-sm-4'>
								      <input type='date' name='dateinscriptionclient' class='form-control' id='dateinscriptionclient' value='".$unCandidat->getDateInscriptionClient()."'>
								    </div></div>
								    <div class='col-sm-2'>
		 							</div>								
								    <div class='form-group'>
								  	  <label class='control-label col-sm-2' for='sel1'>Mode de facturation :</label>
								  	  <div class='col-sm-4'>
								   	  <input class='form-control' name='modefacturation' id='modefacturation' required value='".$unCandidat->getModeFacturation()."'>
									</div></div>
									 <div class='col-sm-2'>
									 </div>
								    <div class='form-group'>
									  <label class='control-label col-sm-2' for='typecandidat'> Type du candidat:</label>
									  <div class='col-sm-4'>
									  <input class='form-control' id='typecandidat' name='typecandidat' required value='".$unCandidat->getTypeCandidat()."'>
									</div></div>
								    
								    <button type='submit' name='modifier' class='btn btn-default'>Modifier</button>
								    <button type='reset' name='annuler' class='btn btn-default'>Annuler</button>
								  </form>";

							break;
						case 4:
							$tab = $array = array();
							$tab['actif']=1;
							$unModele->update($tab, $pseudo);
							break;
						case 5:
							$tab = $array = array();
							$tab['actif']=0;
							$unModele->update($tab, $pseudo);
							break;

						default:
					}
				}
			
				 if(isset($_POST["modifier"]))
					{
																			
						$unCandidat->renseigner($_POST);																														
						$tab = $unCandidat->serialiser();						
						$unModele->update($tab, $unCandidat->getNumClient());
						header('Location: Controleur_gestion_candidat.php');
						$message = "Mise a jour réussie";
										
					}				

	include ('../Vues/Vue_gestion_candidat.html');
		
?>	


