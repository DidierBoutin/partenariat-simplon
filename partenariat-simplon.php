<?php
/*
Plugin Name: Partenariat Simplon WP

Plugin URI:  

Description: Un plugin  qui permet d'ajouter du texte 
 
Version: 0.1

Author: DidierBoutin

Author URI: 

License: GPL2
*/

function SimplonShortcode() {
	return '<p>La publication de cet article est possible grace à mon super partenaire 
<a href="http//simplon.co">simplon.co</a>
 - une entreprise de 
l\'économie sociale et solidaire et un
réseau de "fabriques" (écoles) qui propose 
des
formations
GRATUITES
pour devenir développeur web. </p>';
}
add_shortcode('Simplon', 'SimplonShortcode');
