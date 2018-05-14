<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\Wamp\www\cours-wordpress\wordpress\wp-content\plugins\wp-super-cache/' );
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ']bvSJl`}?p1gjncC((fr:)I*x+JCvpQ|cm.Z(Lk7/fo)PMLqvciGCt},H9g#Im[p');
define('SECURE_AUTH_KEY',  '^-fkH`eyJX6RU5zM+;PYhtSGU;R_L=7$-GY:mYY>G(RoD<hVfG,e1:9r,?!co/v6');
define('LOGGED_IN_KEY',    'ty|r::jyW?dqDCCZ;w*<mE*h]Y8kIA/i8zNS*$T?KC^XF^!tV!:U3fH$uSj>Cy9d');
define('NONCE_KEY',        '(dYEYRY=3IM]g#(Z~#{Taw:Xd/WdB&#&`p3M|8=eEjQ%dnDr=^Xg=:}5e^N1StK0');
define('AUTH_SALT',        '32BQDs6IWQ%)TgD8aRM3Q1[:g,Ot2`]kQ|@f)]Zk[RWq[&&qkc>XN> Zsy*_Q+l{');
define('SECURE_AUTH_SALT', '5Sp#tXEOv,h/n)IQ<RbH5hTvE^r>Y4GzEdkf|qNGyHssVMX+1p-F`yklTSgxFakY');
define('LOGGED_IN_SALT',   '$+`Hyg>XR3D`YqsyQjUY&^3E{8@N:T+f%mnc_1Me,oE,aVWL@q!vY2GE0,h;p%WW');
define('NONCE_SALT',       'xF+X|cQ(7Q3]LN| VUj6{3ab$(o6!NVe4@4e3[{86UxEU-hCL>]@ZH2[M.l4p6zH');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');