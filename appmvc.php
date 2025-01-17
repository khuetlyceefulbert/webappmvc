<?php

	class MaClasse {

		private $monattribut;	//Doit être compris entre 0 et 10
		
		public function __construct() {
			$this -> monattribut = 10;
		}
		
		public function getMonattribut() {
			return $this -> monattribut;
		}
		public function setMonAttribut($value) {
			if(($value >= 0) && ($value < 10)) {
				$this -> monattribut = $value;
			}
		}

	}
?>