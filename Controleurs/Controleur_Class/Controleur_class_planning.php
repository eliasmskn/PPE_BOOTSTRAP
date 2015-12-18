<?php
class Planning
{
	protected $datedebut, $datefin, $heuredebut, $heurefin,$numvehicule,$nomclient, $etatplanning, $nommoniteur;
	public function __construct()
	{
		$this->datedebut = 0;
		$this->datefin = 0;
		$this->heurefin = 0;
		$this->heurefin = 0;
		$this->numvehicule = 0;
		$this->nomclient = 0;
		$this->etatplanning = "";
		$this->nommoniteur = "";	
						
	}

	public function renseigner($tab)
	{
		$this->datedebut = $tab['datedebut'];
		$this->datefin = $tab['datefin'];
		$this->heuredebut = $tab['heuredebut'];
		$this->heurefin = $tab['heurefin'];
		$this->numvehicule = $tab['numvehicule'];
		$this->nomclient = $tab['nomclient'];
		$this->etatplanning = $tab['etatplanning'];
		$this->nommoniteur = $tab['nommoniteur'];
	}
	
	public function serialiser()
	{
		$tab['datedebut'] = $this->datedebut;
		$tab['datefin'] = $this->datefin;
		$tab['heuredebut'] = $this->heuredebut;
		$tab['heurefin'] = $this->heurefin;
		$tab['numvehicule'] = $this->numvehicule;
		$tab['nomclient'] = $this->nomclient;
		$tab['etatplanning'] = $this->etatplanning;
		$tab['nommoniteur'] = $this->nommoniteur;			
		return $tab;
	}

	public function afficherPlanning()
	{
		return "<tr><td>".$this->datedebut."</td>
				.<td>".$this->datefin."</td>
				.<td>".$this->heuredebut."</td>
				.<td>".$this->heurefin."</td>
				.<td>".$this->numvehicule."</td>
				.<td>".$this->nomclient."</td>
				.<td>".$this->etatplanning."</td>				
				.<td>".$this->nommoniteur."</td></tr>";								
	}

	public function getDateHeureDebut()
	{
		return $this->dateheuredebut;
	}

	public function setDateHeureDebut($dateheuredebut)
	{
		$this->dateheuredebut = $dateheuredebut;
	}

	public function getDateHeureFin()
	{
		return $this->dateheurefin;
	}

	public function setDateHeureFin($dateheurefin)
	{
		$this->dateheurefin = $dateheurefin;
	}

	public function getEtatPlanning()
	{
		return $this->etatplanning;
	}

	public function setEtatPlanning($etatplanning)
	{
		$this->etatplanning = $etatplanning ;
	}

	
}