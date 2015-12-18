<?php
class Etudiant extends Candidat
{
	private $nometablissement, $adresseetablissement, $niveauetude, $reduction;

	public function __construct()
	{
		$this->nometablissement = "";
		$this->adresseetablissement = "";
		$this->niveauetude = "";
		$this->reduction = "";
	}

	public function renseigner($tab)
	{
		$this->nometablissement = $tab['nometablissement'];
		$this->adresseetablissement = $tab['adresseetablissement'];
		$this->niveauetude = $tab['niveauetude'];
		$this->reduction = $tab['reduction'];
	}
	
	public function serialiser()
	{
		$tab['nometablissement'] = $this->nometablissement;
		$tab['adresseetablissement'] = $this->adresseetablissement;
		$tab['niveauetude'] = $this->niveauetude;
		$tab['reduction'] = $this->reduction;
		return $tab;
	}

	public function afficherEtudiant()
	{
		return "<tr><td>".$this->nometablissement."</td>
				.<td>".$this->adresseetablissement."</td>
				.<td>".$this->niveauetude."</td>
				.<td>".$this->reduction."</tr>";
				
	}

	public function getNomEtablissement()
	{
		return $this->nometablissement;
	}

	public function setNomEtablissement($nometablissement)
	{
		$this->nometablissement = $nometablissement;
	}

	public function getAdresseEtablissement()
	{
		return $this->adresseetablissement;
	}

	public function setAdresseEtablissement($adresseetablissement)
	{
		$this->adresseetablissement = $adresseetablissement;
	}

	public function getNiveauEtude()
	{
		return $this->niveauetude;
	}

	public function setNiveauEtude($niveauetude)
	{
		$this->niveauetude = $niveauetude;
	}

	public function getReduction()
	{
		return $this->reduction;
	}

	public function setReduction($reduction)
	{
		$this->reduction = $reduction;
	}
}