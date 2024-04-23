<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_wsc_speakup');

/** Database username */
define('DB_USER', 'laravel');

/** Database password */
define('DB_PASSWORD', 'laravel');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'Iz,f4q[-k6o>cC!!a2;A!<;}uFA;FD~}.=/MXZYc>rZxG0vs.=1b!{hzY.<=GYYt');
define('SECURE_AUTH_KEY', '4sft%*BTq:s.`J<Z[T=g3GXREf1O@(93=TFo UyTwg/X{U:+e^I/ HcplLKvL:VN');
define('LOGGED_IN_KEY', '@:Cd=%TLfgIW7,vqvSIb{X2Sc[{j49/4JbBts5u5$;>$Yi*l1LVS5Vm1Y_VKuNq,');
define('NONCE_KEY', 'Xxe,Br~uTHG&RA%mi^C^Py@jW[PnU_{a98Iav0F94a=Df,mA]lJ}sobwMC?uj4L?');
define('AUTH_SALT', 'g+[t{O:#gHNvOcJxa44FWfu.dW6|wO0m)HcS(fqq1P^2|`pv5%ooO9@]Be:**KNB');
define('SECURE_AUTH_SALT', '}D(}*@C/dlPTV-i3`.]h_cG5W>aeNU,6?AEq$;S2{eiPc;89pMpVW]XD|JU&~S}]');
define('LOGGED_IN_SALT', 'nu}z%L+c`Z<$1G[B=c<ZRfN1B`~+yLE]0]/ pvbeBM5or)p&zmh6rQ=EKpM~}Xof');
define('NONCE_SALT', '96sODbMlT%X<.bm(=yY3&a=#8$]O3/I!~|kZ=!!%~G9IT:&2FKx`}c{2N*wI_BMS');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

# oLg*EaQ586#w3b$7Eu