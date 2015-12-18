<?php
Class ModelExtend extends Modele
{
	/*private $table, $id;
	private $unPDO;*/

		public function __construct($serveur, $bdd, $user, $mdp)
		{
			try{
				$this->unPDO= new PDO("mysql:host=".$serveur.";dbname=".$bdd,$user,$mdp);
			
			}catch(Exception $exp){
				echo "Erreur de la connexion a la base de donné".$bdd;
			}
		}

		/*public function renseigner($table, $id)
		{			
			$this->table=$table;
			$this->id=$id;
						
		}
		*/
		public function selectwhereici($id, $champ1, $champ2, $valeur1, $valeur2)
		{
			$requete = "SELECT ".$id." FROM ".$this->table
			." WHERE ".$champ1." = ".$valeur1." AND ".$champ2." = ".$valeur2;
			$select = $this->unPDO->prepare($requete);
			
			$select->execute();
			$resultat = $select->fetchAll();
			var_dump($resultat);
			return $resultat;

		}

		public function selectwhereplanning($view)
		{
			$requete = "SELECT * FROM ".$view;
			$select = $this->unPDO->prepare($requete);			
			$select->execute();
			var_dump($select);
			$resultat = $select->fetchAll();
			return $resultat;
		}

		public function selectAllTablePlanningMoniteur($view)
		{
			$requete = "SELECT * FROM ".$view;
			$select = $this->unPDO->prepare($requete);
			$select->execute();
			$resultat = $select->fetchAll();
			return $resultat;
		}


		

		public function select($tab)
		{
			$listechamps = array();
			$donnees = array();

			foreach ($tab as $key => $value) {
				$listechamps[] = $key." = :".$key;			
				$donnees[":".$key] = $value;
			}
			$champs = implode(' and ', $listechamps);
			

			$requete = " SELECT * FROM ".$this->table
						." WHERE ".$champs ;
						
			var_dump($requete);
			$select = $this->unPDO->prepare($requete);
			$select->execute($donnees);
			$resultat = $select->fetch();

			return $resultat;
		}
}
?>