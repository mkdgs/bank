<?php
/*
 * Paiement Bancaire
 * module de paiement bancaire multi prestataires
 * stockage des transactions
 *
 * Auteurs :
 * Cedric Morin, Nursit.com
 * (c) 2012-2015 - Distribue sous licence GNU/GPL
 *
 */
if (!defined('_ECRIRE_INC_VERSION')) return;

/* Ogone ------------------------------------------------------------------ */

/**
 * Constantes pour Ogone
 * plateforme de test
 * a personaliser dans mes_options pour activer la config en prod
 * define('_OGONE_URL',"https://secure.ogone.com/ncol/prod/orderstandard.asp ");
 *
 * les secrets _OGONE_CLE_SHA_IN et _OGONE_CLE_SHA_OUT doivent etre
 * personalises et declares dans l'interface d'admin de Ogone ainsi que dans la configuration du plugin
 *
 */

// Cle de signature des demandes envoyees a Ogone. A renseigner aussi dans la
// configuration chez Ogone
// Dans Parametres generaux de securite/Méthode de hachage , il faut choisir :
// Composez la séquence à hacher en concatenant la valeur de: Chaque paramètre suivi par la clé.
// Algorithme de hachage : SHA-1
// Pour le charset, utiliser celui du site.

// Cle de signature des retour depuis Ogone. A renseigner aussi dans la
// configuration chez Ogone


/* ------------------------------------------------------------------------- */


function ogone_lister_cartes_config($c){
	include_spip('inc/bank');
	include_spip("presta/ogone/inc/ogone");
	$config = array('presta'=>'ogone');
	return ogone_available_cards($config);
}