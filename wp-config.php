<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mysite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',[!yH;Ecgx{Gxd9D-Y}rI_9y)8{bK.~d}IcsG}_2B.}G*`wPU}Lw2f8?ly4ear;x');
define('SECURE_AUTH_KEY',  '@Y*Y0;@m~`-iySdf@c2=q2| =V!Gkqd?+d0+N/$dDE,Yz|eL8D_#bnOScf!sh7EU');
define('LOGGED_IN_KEY',    'tuT!Bfeo|&Pp;r+Qul0nRzdwo.qcRNgzpa(gfT1N.U,ojdZJo1~0m 1Ni]Yo1/@v');
define('NONCE_KEY',        'm[5DVw*MTv0v#Huw+d9nyAkIPa-`AdXJFQ&O<L24}tia{MS=YKY6.cz9>#ywO@&l');
define('AUTH_SALT',        'qLTApPJ=UOEdmW5joYZYG|#|dff|Z|aN~gF7$9}Jqz^NeK#,!R&]- e%:JS8`Z1L');
define('SECURE_AUTH_SALT', '$t)`/%BxZXY]R=Hg(bf_(1wHK|2jR-n $V2otrpWk(!D<Y.)&b_VJ=e#;/B|{5)j');
define('LOGGED_IN_SALT',   'DrBaD|pfVNUZ{k$}%+3`$~6b?A9sLwYS|+os-T.PR5>3< n*7lsj:Ist9nGv&`1v');
define('NONCE_SALT',       '},z4Vc_Ou,mQVrAFT2?jY% ZR|$.qk<Xk?|N&Xt 5#v4*KlVs>H06c-t{,hX N0B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_admin';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
