<?php
class Salarier extends Candidat
{
	private $nomentreprise, $adresseentreprise, $statut;

	public function __construct()
	{
		$this->nomentreprise = "";
		$this->adresseentreprise = "";
		$this->statut = "";
	}

	public function renseigner($tab)
	{
		$this->nomentreprise = $tab['nomentreprise'];
		$this->adresseentreprise = $tab['adresseentreprise'];
		$this->statut = $tab['statut'];
	}
	
	public function serialiser()
	{
		$tab['nomentreprise'] = $this->nomentreprise;
		$tab['adresseentreprise'] = $this->adresseentreprise;
		$tab['statut'] = $this->statut;		
		return $tab;
	}

	public function afficherSalarier()
	{
		return "<tr><td>".$this->nomentreprise."</td>
				.<td>".$this->adresseentreprise."</td>
				.<td>".$this->statut."</tr>";
				
	}

	public function getNomEntreprise()
	{
		return $this->nomentreprise;
	}

	public function setNomEntreprise($nomentreprise)
	{
		$this->nomentreprise = $nomentreprise;
	}

	public function getAdresseEntreprise()
	{
		return $this->adresseentreprise;
	}

	public function setAdresseEntreprise($adresseentreprise)
	{
		$this->adresseentreprise = $adresseentreprise;
	}

	public function getStatut()
	{
		return $this->statut;
	}

	public function setStatut($statut)
	{
		$this->statut = $statut;
	}
}