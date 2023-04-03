<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'photographe-oc' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kLl04`+/aN98p3d)@d*0q(PM%9T_@+-}AqU)sA%>^o@n_UZhexMG!kS;m!YzzUY$' );
define( 'SECURE_AUTH_KEY',  'x@1npvY(AvMvEo,H3KrLw9X%e=,=cQgVs-Yri-h5h78=N`Pdei) VTt:<0-s piW' );
define( 'LOGGED_IN_KEY',    '7>#@1v&U1M7xz{NF4AU:gmAoG_lf{|-DEm:By!eLgir$y@I}]Xv-PxkGy}-^-5aX' );
define( 'NONCE_KEY',        'aI4qr!w+RvzJ,Ahtetg`mI:#ffUuRrA5[BNNItP]>q;w-xRpYEChcj<PyiT:A+G4' );
define( 'AUTH_SALT',        'I*v0Fw_BEjLGbrJRDep^;(owM5.MV]4*OB9y(78EXhUsFwqVx,nU!oR3|D#pYxx)' );
define( 'SECURE_AUTH_SALT', '&;+*}=Xl8D!v%G`(*`ziFx$/Uw1J (Q4;=JJiu5#sy2NE~VjI dz4RuPWhxyCM`|' );
define( 'LOGGED_IN_SALT',   '*|6CTF@xN6Y7W[pB`,vmP]auI,KC18RCp]{@3b+uOod/9.W!M~1>bBBxmI7^I,j{' );
define( 'NONCE_SALT',       '4i5$O|ftIHlP7$na.FbM|]-BY&TMqH3Wh9PcoCH+#;Tr+Mv12_!_.W()X*u*[cmm' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
