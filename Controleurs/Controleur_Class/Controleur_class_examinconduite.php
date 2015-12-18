<?php
class ExaminConduite
{
	private $idexamconduite;

	public function __construct()
	{
		$this->idexamconduite = 0;			
	}

	public function renseigner($tab)
	{
		$this->idexamconduite = $tab['idexamconduite'];		
	}
	
	public function serialiser()
	{
		$tab['idexamconduite'] = $this->idexamconduite;				
		return $tab;
	}
}