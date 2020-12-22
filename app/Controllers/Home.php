<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo 'Cet Helper est automatiquement chargé par le framework à chaque demande <br><br>';

		echo 'site_url : ' . site_url() . '<br><br>';
		// -> Renvoie l'URL de votre site, comme spécifié dans votre fichier de configuration
		echo 'base_url : ' . base_url() . '<br><br>';
		// -> Renvoie l'URL de base de votre site
		echo 'current_url() : ' . current_url() . '<br><br>';
		// -> Renvoie l'URL complète de la page actuellement affichée
		echo 'previous_url() : ' . previous_url() . '<br><br>';
		// -> Renvoie l'URL complète de la page sur laquelle l'utilisateur était précédemment
		echo 'uri_string() : ' . uri_string() . '<br><br>';
		// -> Renvoie la partie de chemin relative à baseUrl
		// ===> http://site-exemple.com/blog/comments/123 -> blog/comments/123
		echo 'index_page() : ' . index_page() . '<br><br>';
		// -> Renvoie votre site 'indexPage' , comme spécifié dans votre fichier de configuration
		echo 'anchor() : ' . anchor('', 'mon ancre') . '<br><br>';
		// -> Crée un lien d'ancrage HTML standard basé sur l'URL de votre site local
		echo 'anchor_popup() : ' . anchor_popup() . '<br><br>';
		// -> Presque identique à la fonction anchor() sauf qu'elle ouvre l'URL dans une nouvelle fenêtre
		echo 'mailto() : ' . mailto('moi@mon-site.com', 'Click ici pour nous contacter') . '<br><br>';
		// -> Crée un lien de messagerie HTML standard
		echo 'safe_mailto() : ' . safe_mailto('moi@mon-site.com', 'Click ici pour nous contacter') . '<br><br>';
		// -> Identique à la fonction mailto() sauf qu'elle écrit avec JavaScript pour éviter que l'adresse e-mail ne soit collectée 
		//par les robots de spam
		echo 'auto_link() : ' . auto_link('moi@mon-site.com') . '<br><br>';
		// -> Transforme automatiquement les URL et les adresses e-mail contenues dans une chaîne en liens
		echo 'url_title() : ' . url_title('ma chaine de caractère') . '<br><br>';
		// -> Prend une chaîne comme entrée et crée une chaîne URL conviviale
		echo 'prep_url() : ' . prep_url('monsite.com') . '<br><br>';
		// Cette fonction ajoutera "http://" dans le cas où un préfixe de protocole est manquant dans une URL.
	}

	//--------------------------------------------------------------------

}
