<?php
/**
 * Plugin Signaux sonores
 * Ajoute la feuille de style des modèles <signal> dans le head public.
 */
if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

function signaux_insert_head_css($flux) {
	$css = find_in_path('css/signaux.css');
	if ($css) {
		$flux .= '<link rel="stylesheet" type="text/css" href="' . timestamp($css) . '" />' . "\n";
	}
	return $flux;
}
