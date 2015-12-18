<?php
class ExaminCode
{
	private $idexamcode, $salle;

	public function __construct()
	{
		$this->idexamcode = 0;
		$this->salle = 0;		
	}

	public function renseigner($tab)
	{
		$this->idexamcode = $tab['idexamcode'];
		$this->salle = $tab['salle'];		
	}
	
	public function serialiser()
	{
		$tab['idexamcode'] = $this->idexamcode;
		$tab['salle'] = $this->salle;		
		return $tab;
	}

	public function afficherExaminCode()
	{
		return "<tr><td>".$this->idexamcode."</td>
				.<td>".$this->salle."</td></tr>";				
	}

	public function getSalle()
	{
		return $this->salle;
	}

	public function setSalle($salle)
	{
		$this->salle = $salle;
	}
}