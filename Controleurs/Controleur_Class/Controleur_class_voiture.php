<?php
class Voiture extends Vehicule
{
	private $couleurvoiture, $nbpassager, $nbcheveaux, $nbkm, $energie;

	public function __construct()
	{
		$this->couleurvoiture = "";
		$this->nbpassager = 0;
		$this->nbcheveaux = 0;
		$this->nbkm = 0;
		$this->energie = "";
	}

	public function renseigner($tab)
	{
		$this->couleurvoiture = $tab['couleurvoiture'];
		$this->nbpassager = $tab['nbpassager'];
		$this->nbcheveaux = $tab['nbcheveaux'];
		$this->nbkm = $tab['nbkm'];
		$this->energie = $tab['energie'];
	}
	
	public function serialiser()
	{
		$tab['couleurvoiture'] = $this->couleurvoiture;
		$tab['nbpassager'] = $this->nbpassager;
		$tab['nbcheveaux'] = $this->nbcheveaux;
		$tab['nbkm'] = $this->nbkm;
		$tab['energie'] = $this->energie;
		return $tab;
	}

	public function afficherVoiture()
	{
		return "<tr><td>".$this->couleurvoiture."</td>
				.<td>".$this->nbpassager."</td>
				.<td>".$this->nbcheveaux."</td>
				.<td>".$this->nbkm."</td>
				.<td>".$this->energie."</tr>";
	}

	public function getCouleurVoiture()
	{
		return $this->couleurvoiture;
	}

	public function setCouleurVoiture($couleurvoiture)
	{
		$this->couleurvoiture = $couleurvoiture;
	}

	public function getNbPassager()
	{
		return $this->nbpassager;
	}

	public function setNbPassager($nbpassager)
	{
		$this->nbpassager = $nbpassager;
	}

	public function getNbCheveaux()
	{
		return $this->nbcheveaux;
	}

	public function setNbCheveaux($nbcheveaux)
	{
		$this->nbcheveaux = $nbcheveaux;
	}

	public function getNbKm()
	{
		return $this->nbkm;
	}

	public function setNbKm($nbkm)
	{
		$this->nbkm = $nbkm;
	}

	public function getEnergie()
	{
		return $this->energie;
	}

	public function setEnergie($energie)
	{
		$this->energie = $energie;
	}
	

}