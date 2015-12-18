<?php
class VueConnexionMoniteur
{
	private $mailmoniteur, $mdpmoniteur;

	public function __construct()
	{
		$this->mailmoniteur = "";
		$this->mdpmoniteur = "";						
	}

	public function renseigner($tab)
	{
		$this->mailmoniteur = $tab['mailmoniteur'];
		$this->mdpmoniteur = $tab['mdpmoniteur'];
		
	}
	
	public function serialiser()
	{
		$tab['mailmoniteur'] = $this->mailmoniteur;
		$tab['mdpmoniteur'] = $this->mdpmoniteur;					
		return $tab;
	}

	public function afficherVueConnexionMoniteur()
	{
		return "<tr><td>".$this->mailmoniteur."</td>								
				.<td>".$this->mdpmoniteur."</td></tr>";								
	}

	public function getMailMoniteur()
	{
		return $this->mailmoniteur;
	}

	public function setMailMoniteur($mailmoniteur)
	{
		$this->mailmoniteur = $mailmoniteur;
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