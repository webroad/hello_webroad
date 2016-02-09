<?php 
	/*
	Plugin Name: Hello WEBroad
	Plugin URI: http://webroad.pl/cms/5847-tworzenie-wtyczki-wordpress-1
	Description: Moja pierwsza wtyczka przygotowana dla WordPressa!
	Version: 1.0
	Author: Michal Kortas
	Author URI: http://webroad.pl
	License: GPLv2 or later
	License URI: http://www.gnu.org/licenses/gpl-2.0.html
	*/
?>

<?php 
	add_action('the_content', 'show_hello');

	function show_hello() {
		echo 'Hello WEBroad! :-)';
	}
?>