<?php

class Vehicule
{
	private $numvehicule, $marque, $model, $année;

	public function __construct()
	{
		$this->numvehicule = 0;
		$this->marque = "";
		$this->model = "";
		$this->année = 0;
	}

	public function renseigner($tab)
	{
		$this->numvehicule = $tab['numvehicule'];
		$this->marque = $tab['marque'];
		$this->model = $tab['model'];
		$this->annee = $tab['annee'];
	}
	
	public function serialiser()
	{
		$tab['numvehicule'] = $this->numvehicule;
		$tab['marque'] = $this->marque;
		$tab['model'] = $this->model;
		$tab['annee'] = $this->annee;
		return $tab;
	}

	public function afficher()
	{
		return "<tr><td>".$this->numvehicule."</td>
				.<td>".$this->marque."</td>
				.<td>".$this->model."</td>
				.<td>".$this->annee."</tr>";
	}
	
	public function getNumvehicule()
	{
		return $this->numvehicule;
	}

	public function setNumvehicule($numvehicule)
	{
		$this->numvehicule = $numvehicule;
	}

	public function getMarque()
	{
		return $this->marque;
	}

	public function setMarque($marque)
	{
		$this->marque = $marque;
	}

	public function getModel()
	{
		return $this->model;
	}

	public function setModel($model)
	{
		$this->model = $model;
	}

	public function getAnnee()
	{
		return $this->annee;
	}

	public function setAnnee($annee)
	{
		$this->annee = $annee;
	}
}