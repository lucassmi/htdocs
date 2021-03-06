<?php 
/**
* 
*/
class Personne{
	private $_id;
	private $_nom;
	private $_prenom; 
	private $_ddn;

	function __construct($id, $nom, $prenom, $ddn){
		$this -> _id = $id;
		$this -> _nom = $nom;
		$this -> _prenom = $prenom;
		$this -> _ddn = $this -> transformerDate($ddn);
	}

	function getId () {
		return $this -> _id;
	}

	function getNom () {
		return $this -> _nom;
	}

	function getPrenom () {
		return $this -> _prenom;
	}

	function getDdn () {
		return $this -> _ddn;
	}

	function setNom ($nom) {
		return $this -> _nom;
	}
	function setPrenom ($prenom) {
		return $this -> _prenom;
	}
	function setDdn ($ddn) {
		return $this -> _ddn;
	}
	function getAge (){
		$ladate = new DateTime(date("d-m-Y"));
		$naiss = new DateTime($this -> _ddn);
		$diff = $naiss -> diff($ladate);

		return $diff -> format('%y');
	}

	function getDdnJour () {
		$date_explosee = explode("-", $this -> _ddn);
		$jour = $date_explosee[0];

		return $jour;
	}

	function getDdnMois () {
		$date_explosee = explode("-", $this -> _ddn);
		$mois = $date_explosee[1];

		return $mois;
	}

	function getDdnAnnee () {
		$date_explosee = explode("-", $this -> _ddn);
		$annee = $date_explosee[2];

		return $annee;
	}


	function transformerDate($date) {
		$ladate = new DateTime(date($date));
		$lambda = $ladate -> format ('d-m-Y');

		return $lambda;
	}
	/*function __tostring() {
		return $this -> _nom;
	}*/

}

?>