<?php

	include("bdd.php");
	include("template.php");

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
			$vue = new Template('templates/question.tpl');	//On récupère le fichier template
			
			$question = $this -> bdd -> getQuestion(1);		//On récupère les données de la question
			$reponses = $this -> bdd -> getReponses(1);		//On récupère les réponses de la question

			$vue -> remplacer('#TITRE_QUESTION#', $question -> intitule);	//On insère le titre de la question à la place de #TITRE_QUESTION#

			echo $vue -> getSortie();	//Affichage de la sortie
		}
		
		public function page2() {
			echo "Deuxieme page";
			
			
			$reponses  = $this -> bdd -> getReponses(1);
			
			echo '<ul>';
			foreach($reponses as $reponse) {
				echo '<li><input type="radio" name="reponses" value="'.$reponse -> id.'"> '.$reponse -> intitule.'</li>';
			}
			echo '</ul>';		
			
		}

	}
?>