<?php
	class Modele
	{

		protected $table, $id;
		protected $unPDO;

		public function __construct($serveur, $bdd, $user, $mdp){
			try{
				$this->unPDO= new PDO("mysql:host=".$serveur.";dbname=".$bdd,$user,$mdp);
			
			}catch(Exception $exp){
				echo "Erreur de la connexion a la base de donné".$bdd;
			}
		}

		public function renseigner($table, $id)
		{			
			$this->table=$table;
			$this->id=$id;
		}
		public function selectAll()
		{
			$requete = "SELECT * FROM ".$this->table;
			$select = $this->unPDO->prepare($requete);			
			$select->execute();
			$resultat = $select->fetchAll();			
			return $resultat;
		}

		public function insert($tab)
		{
			$listechamps = array();
			$listevaleurs = array();
			$donnees = array();

			foreach ($tab as $key => $value) {
				$listechamps[] = $key;
				$listevaleurs[] = ":".$key;
				$donnees[":".$key] = $value;

			}
			$champs = implode(',', $listechamps);
			$valeurs = implode(',', $listevaleurs);

			$requete = "INSERT INTO ".$this->table
						. " ( ".$champs." ) VALUES ( "
						.$valeurs. " ) ; ";
			$insert = $this->unPDO->prepare($requete);
			$insert->execute($donnees);

		}

		public function update($tab, $id)
		{ 
			$listechamps = array();
			$donnees = array();

			foreach ($tab as $key => $value) {
				$listechamps[] = $key." = :".$key;			
				$donnees[":".$key] = $value;
			}
			$champs = implode(',', $listechamps);
			$donnees[":".$this->id] = $id;

			$requete = " UPDATE ".$this->table
						." SET ".$champs
						." WHERE ".$this->id."= :".$this->id;
			$update = $this->unPDO->prepare($requete);
			$update->execute($donnees);
		}

		public function selectwhere($id){
			$requete = " SELECT * FROM ".$this->table." WHERE "
						.$this->id." = :".$this->id;

			$donnees[":".$this->id] = $id;

			$select = $this->unPDO->prepare($requete);
			$select->execute($donnees);
			$resultat = $select->fetch();
			return $resultat;

		}

		public function delete($id){
			$requete = " DELETE FROM ".$this->table." WHERE "
						.$this->id." = :".$this->id;

			$donnees[":".$this->id] = $id;

			$delete = $this->unPDO->prepare($requete);
			$delete->execute($donnees);
		}
/*°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°*/
		public function selectwhereconnexion($mail)
		{			
			$requete = "SELECT mdpmoniteur FROM ".$this->table
						." WHERE mailmoniteur = '".$mail."'";
						
			$select = $this->unPDO->prepare($requete);					
			$select->execute();
			$resultat = $select->fetch();			
			return $resultat;

		}
	}
