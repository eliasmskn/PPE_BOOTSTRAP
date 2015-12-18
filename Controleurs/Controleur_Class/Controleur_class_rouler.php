<?php
class Rouler
{
	private $nbkmparcourusmois;

	public function __construct()
	{
		$this->nbkmparcourusmois = 0;		
	}

	public function renseigner($tab)
	{
		$this->nbkmparcourusmois = $tab['nbkmparcourusmois'];		
	}
	
	public function serialiser()
	{
		$tab['nbkmparcourusmois'] = $this->nbkmparcourusmois;		
		return $tab;
	}

	public function afficherNbKmParcousMois()
	{
		return "<tr><td>".$this->nbkmparcourusmois."</td></tr>";								
	}

	public function getNbKmParcousMois()
	{
		return $this->nbkmparcourusmois;
	}

	public function setNbKmParcousMois($nbkmparcourusmois)
	{
		$this->nbkmparcourusmois = $nbkmparcourusmois;
	}	
}