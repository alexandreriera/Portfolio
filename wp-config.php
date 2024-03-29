<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'portfolio-wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'admin' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'admin4321' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'W*s0x9Lhshg-Y<cQcW sU#&Rm4h1svGTwA_98$aWkF%4;Bn0+F.#~!N}h+Hwz|?}' );
define( 'SECURE_AUTH_KEY',  '8[S^2nINnrdNx?2$!-Gu|fT,&A2Y)/]^_h[g9A8+(s0|*ePA;TA|@=(M~TDaRxkR' );
define( 'LOGGED_IN_KEY',    '(AWV<6l,n`bD@kvOj_Trs5OyZK.1[:t&)}|>!}}oB;+PlG)F/Y7t[.fVt<T4W101' );
define( 'NONCE_KEY',        'H+3GO!rqVI8IoL/dsjCGj&K=fj+0&!FUGlI6@#at6Y{U|HM&~NM]VA1Pc@6++f(P' );
define( 'AUTH_SALT',        'i/^vsgU|~U(v5S CSlSOY4DVaF&dWLQ9>)z|7gYda3rxDp],11ly%9qX%G:bguoj' );
define( 'SECURE_AUTH_SALT', '}~:l)}eHsmO5v<Z{%,A54FU_y3m ?+$i.pAeU.<8 0345<WEqpun%h>rr*UYb1^e' );
define( 'LOGGED_IN_SALT',   'lSiLGYQ+M(sE]%eC ry&FX/2;kI!Y?i[@S3:)Jy~QI1oRCuQ(/dQt7=a~]QchYzI' );
define( 'NONCE_SALT',       ']})m5R~7OfZ6o_YaNf/s0u(AlljRL[(rAziJ_#LZtPLp;,n`+9Pz?OQ=u/tCM2,v' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'asdftyh_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
