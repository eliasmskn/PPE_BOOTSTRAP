<?php
class Lecon
{
	private $numleçon, $datelecon, $heurelecon, $tarifheure;

	public function __construct()
	{
		$this->numleçon = 0;
		$this->dateleçon = 0;
		$this->heurelecon = 0;
		$this->tarifheure = 0;
	}

	public function renseigner($tab)
	{
		$this->numlecon = $tab['numlecon'];
		$this->datelecon = $tab['datelecon'];
		$this->heurelecon = $tab['heurelecon'];
		$this->tarifheure = $tab['tarifheure'];
	}
	
	public function serialiser()
	{
		$tab['numlecon'] = $this->numlecon;
		$tab['datelecon'] = $this->datelecon;
		$tab['heurelecon'] = $this->heurelecon;
		$tab['tarifheure'] = $this->tarifheure;		
		return $tab;
	}

	public function afficherLecon()
	{
		return "<tr><td>".$this->numlecon."</td>
				.<td>".$this->dateleçon."</td>
				.<td>".$this->heurelecon."</td>
				.<td>".$this->tarifheure."</td></tr>";				
	}

	public function getNumLecon()
	{
		return $this->numlecon;
	}

	public function setNumLecon($numlecon)
	{
		$this->numlecon = $numlecon;
	}

	public function getDateLecon()
	{
		return $this->datelecon;
	}

	public function setDateLecon($datelecon)
	{
		$this->datelecon = $datelecon;
	}

	public function getHeureLecon()
	{
		return $this->heurelecon;
	}

	public function setHeureLecon($heurelecon)
	{
		$this->heurelecon = $heurelecon;
	}

	public function getTarifHeure()
	{
		return $this->tarifheure;
	}

	public function setTarifHeure($tarifheure)
	{
		$this->tarifheure = $tarifheure;
	}
}