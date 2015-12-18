<?php
class Mois
{
	private $année, $nummois;

	public function __construct()
	{
		$this->année = 0;
		$this->nummois = 0;			
	}

	public function renseigner($tab)
	{
		$this->année = $tab['année'];		
		$this->nummois = $tab['nummois'];		
	}
	
	public function serialiser()
	{
		$tab['année'] = $this->année;				
		$tab['nummois'] = $this->nummois;				
		return $tab;
	}

	public function afficherMois()
	{
		return "<tr><td>".$this->année."</td>
				.<td>".$this->nummois."</td><tr>";
	}

	public function getAnnee()
	{
		return $this->année;
	}

	public function setAnnee($année)
	{
		$this->année = $année;
	}

	public function getNumMois()
	{
		return $this->nummois;
	}

	public function setNumMois($nummois)
	{
		$this->nummois = $nummois;
	}
}