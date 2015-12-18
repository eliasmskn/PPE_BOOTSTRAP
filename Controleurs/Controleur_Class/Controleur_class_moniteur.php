<?php
class Moniteur
{
	private $nummoniteur, $nommoniteur, $prenommoniteur, $adressemoniteur, $numtelephonemoniteur,$mailmoniteur, $mdpmoniteur;

	public function __construct()
	{
		$this->nummoniteur = 0;
		$this->nommoniteur = "";
		$this->prenommoniteur = "";
		$this->adressemoniteur = "";
		$this->numtelephonemoniteur = 0;
		$this->mailmoniteur = "";
		$this->mdpmoniteur = "";

	}

	public function renseigner($tab)
	{
		$this->nummoniteur = $tab['nummoniteur'];		
		$this->nommoniteur = $tab['nommoniteur'];		
		$this->prenommoniteur = $tab['prenommoniteur'];		
		$this->adressemoniteur = $tab['adressemoniteur'];		
		$this->numtelephonemoniteur = $tab['numtelephonemoniteur'];		
		$this->mailmoniteur = $tab['mailmoniteur'];		
		$this->mdpmoniteur = $tab['mdpmoniteur'];		
	}
	
	public function serialiser()
	{
		$tab['nummoniteur'] = $this->nummoniteur;				
		$tab['nommoniteur'] = $this->nommoniteur;
		$tab['prenommoniteur'] = $this->prenommoniteur;
		$tab['adressemoniteur'] = $this->adressemoniteur;
		$tab['numtelephonemoniteur'] = $this->numtelephonemoniteur;
		$tab['mailmoniteur'] = $this->mailmoniteur;
		$tab['mdpmoniteur'] = $this->mdpmoniteur;
		return $tab;
	}

	public function afficherMoniteur()
	{
		return "<tr><td>".$this->nummoniteur."</td>
				.<td>".$this->nommoniteur."</td>
				.<td>".$this->prenommoniteur."</td>
				.<td>".$this->adressemoniteur."</td>
				.<td>".$this->numtelephonemoniteur."</td>
				.<td>".$this->mailmoniteur."</td>
				.<td>".$this->mdpmoniteur."</td></tr>";
	}

	public function getNumMoniteur()
	{
		return $this->nummoniteur;
	}

	public function setNumMoniteur($nummoniteur)
	{
		$this->nummoniteur = $nummoniteur;
	}

	public function getNomMoniteur()
	{
		return $this->nommoniteur;
	}

	public function setNomMoniteur($nommoniteur)
	{
		$this->nommoniteur = $nommoniteur;
	}

	public function getPrenomMoniteur()
	{
		return $this->prenommoniteur;
	}

	public function setPrenomMoniteur($prenommoniteur)
	{
		$this->prenommoniteur = $prenommoniteur;
	}

	public function getAdresseMoniteur()
	{
		return $this->adressemoniteur;
	}

	public function setAdresseMoniteur($adressemoniteur)
	{
		$this->adressemoniteur = $adressemoniteur;
	}

	public function getNumeTelephoneMoniteur()
	{
		return $this->numtelephonemoniteur;
	}

	public function setNumTelephoneMoniteur($numtelephonemoniteur)
	{
		$this->numtelephonemoniteur = $numtelephonemoniteur;
	}

	public function getMailMoniteur()
	{
		return $this->mailmoniteur;
	}

	public function setMailMoniteur($mailmoniteur)
	{
		$this->mailmoniteurx² = $mailmoniteur;
	}

	public function getMdpMoniteur()
	{
		return $this->mdpmoniteur;
	}

	public function setMdpMoniteur($mdpmoniteur)
	{
		$this->mdpmoniteur = $mdpmoniteur;
	}

}