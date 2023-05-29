<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'briefwordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'AF{,)w{I=`eRE V[hZ|=;crW[xCM}>2UDZYZn$@St~P!&ND[br,cX kWEBG-|@1Y' );
define( 'SECURE_AUTH_KEY',  '!9UZ|w Lzuy=`dLGM+M}5D{SN3LNA5Q)^Cyq<u}@[|Yti9@zF.wdP+%7Rglz_ iq' );
define( 'LOGGED_IN_KEY',    'o[t67K:Z,m*#LO2a(*u#<w[>MQI3e+uXR{!l5gSCL{UBJS~U8;Z,awJ.T;-}6&$$' );
define( 'NONCE_KEY',        'ug*+j{`iKfOeVnP8r5UyC0(`WthMn@@;xE_(=)BH&)B.I^$,2ACo,V4wIWDDqO)q' );
define( 'AUTH_SALT',        ';yPoXOVtRs)?`El^N^xYRj&?),-h@JjD~U0DM;5u(]LzdX;[dZ,qTvpK>v~~wa+Z' );
define( 'SECURE_AUTH_SALT', '.c7SgIC77<sitd!t|Z>2~21>KDJo!,C,+WjuNm`x$/l,~5AUK<ysz9!9_KXe`F0e' );
define( 'LOGGED_IN_SALT',   'Kw2nu&QE.0xZMInrA5rHuOWz/9_P7qwT-%su:(=cURp7aN?@}~GES`S=uG#Jj5n@' );
define( 'NONCE_SALT',       '8u]K!`jR6kIk4I[]8aLAky;t@CoyPYAyl%j!`}IM>yJF,{HjWR=)FX_ZqwB59HE0' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
