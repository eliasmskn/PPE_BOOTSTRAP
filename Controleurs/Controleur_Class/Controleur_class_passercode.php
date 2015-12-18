<?php
class PasserCode
{
	private $resultat, $dateheurepassage;

	public function __construct()
	{
		$this->resultat = 0;
		$this->dateheurepassage = 0;		
	}

	public function renseigner($tab)
	{
		$this->resultat = $tab['resultat'];
		$this->dateheurepassage = $tab['dateheurepassage'];		
	}
	
	public function serialiser()
	{
		$tab['resultat'] = $this->resultat;
		$tab['dateheurepassage'] = $this->dateheurepassage;		
		return $tab;
	}

	public function afficherPasserCode()
	{
		return "<tr><td>".$this->resultat."</td>
				.<td>".$this->dateheurepassage."</td></tr>";				
	}

	public function getResultat()
	{
		return $this->resultat;
	}

	public function setResultat($resultat)
	{
		$this->resultat = $resultat;
	}

	public function getDateHeurePassage()
	{
		return $this->dateheurepassage;
	}

	public function setDateHeurePassage($dateheurepassage)
	{
		$this->dateheurepassage = $dateheurepassage;
	}
}