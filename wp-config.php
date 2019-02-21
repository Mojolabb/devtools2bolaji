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
define('DB_NAME', 'devtools2bolaji');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'C}GX9mX0OEm=kNtbO>Q7bJKX*%a6n|5QmtoR7h|gvM?p!6i$s{* PV3E~5:9x@N/');
define('SECURE_AUTH_KEY',  '~Iho=E0$QU%]e$<DS#}-y77u0SB&kbA-w>9n)_gekuLb29xC53uh%6{fm$Pm)Mzm');
define('LOGGED_IN_KEY',    'mT2w A#,Xn .e)^q<5i xB.}]WI:2d~6+T:SEk^%z?rFdT|Kf2jo(#Of In?X8:p');
define('NONCE_KEY',        'lBNX-Ak6p<E[~Q+#Iq(X8~[)@yN<uL8%MMZ$J7?)yY{,G~%ChiR4;P-F</b YE#B');
define('AUTH_SALT',        '32 o0}a6UXm7$L[aZX47u*rwWEY`9Zx&Q!a,Fu<h(piUBMf`@WtW5UvzGv7MUQ/P');
define('SECURE_AUTH_SALT', '!(rj;M!JU]vP5vNzEV~e0T}>H-#KQ|1UW|)ok3W=4r/rB#-SE;._1Kfp 9f7v?pV');
define('LOGGED_IN_SALT',   '5zAi!;+Z3d2XCGqsz|9vUp n86m/x]AZyx B}P<kxW_t%eyWq6*I5,e|^f<eP#0n');
define('NONCE_SALT',       ';b)f8gt)YL]g&g2~R9Z;@(7QtN6mbF<m8qlrJ&5$Ijj6=vQev:zHDN4UF$V*]86A');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
