<?php

	include("bdd.php");


	class AppMVC {

		private $bdd;

		public function __construct() {
			$this -> bdd = new BDD();
		}

		public function afficherPage($mapage) {
			if(!$this -> bdd -> connexion()) {//Connexion à la BDD
				echo "Une erreur est survenue à la connexion";
				return;
			}
			
			if($mapage == 1) $this -> page1();
			else if($mapage == 2) $this -> page2();
			else $this -> page1();
			
			$this -> bdd -> deconnexion();
		}
		
		public function page1() {
			echo "Première page";
			
		}
		
		public function page2() {
			echo "Deuxieme page"; 
		}

	}
?>