<?php
class Moto extends Vehicule
{
	private $couleurmoto, $cylindrée, $nbkm;

	public function __construct()
	{
		$this->couleurmoto = "";
		$this->cylindrée = 0;
		$this->nbkm = 0;		
	}

	public function renseigner($tab)
	{
		$this->couleurmoto = $tab['couleurmoto'];
		$this->cylindrée = $tab['cylindrée'];
		$this->nbkm = $tab['nbkm'];		
	}
	
	public function serialiser()
	{
		$tab['couleurmoto'] = $this->couleurmoto;
		$tab['cylindrée'] = $this->cylindrée;
		$tab['nbkm'] = $this->nbkm;		
		return $tab;
	}

	public function afficherMoto()
	{
		return "<tr><td>".$this->couleurmoto."</td>
				.<td>".$this->cylindrée."</td>
				.<td>".$this->nbkm."</td></tr>";
	}

	public function getCouleurMoto()
	{
		return $this->couleurmoto;
	}

	public function setCouleurMoto($couleurmoto)
	{
		$this->couleurmoto = $couleurmoto;
	}

	public function getCylindree()
	{
		return $this->cylindrée;
	}

	public function setCylindree($cylindrée)
	{
		$this->cylindrée = $cylindrée;
	}

	public function getNbKm()
	{
		return $this->nbkm;
	}

	public function setNbKm($nbkm)
	{
		$this->nbkm = $nbkm;
	}
}