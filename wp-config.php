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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'winsheald_gns' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '9iut=qtz}~W5$vPnDgNTiChJqf_b}II;6-dM(z)4m#Tq$<R`j6R7s&zW{x<#Y0~I' );
define( 'SECURE_AUTH_KEY',  'dn/8ZL8}DR@aIc~]S9mb:UA}vCzuem*!o0Um]yeeGX !BQurk6-q0#r<)ZMPl@,K' );
define( 'LOGGED_IN_KEY',    '*%*G=fCxNEtzlA!TX4jOG!4{M0Y})fx?-lIdPomTKnO0`?!y?,$1@][)P#|&.UW_' );
define( 'NONCE_KEY',        '26*H; t 9%`=_;Hq~5g{%_ ;Ks@oU,hgdKzCe7|g+XoDLf`@+W#;Gr9}Sg5 +Vrw' );
define( 'AUTH_SALT',        '+IC`LaKK3e19(My+{0.-PZ^# eB|A9Zach:E<U=+D6V&.R;h!4~RZ)wKL`W&bFkw' );
define( 'SECURE_AUTH_SALT', 'P94raf)B?TVKW#rG$Fvb(nKk`g_;B<<h:g/&$YEUc@9x(a1 <D97ZZMYk8tlXW90' );
define( 'LOGGED_IN_SALT',   'Fs@nFlHr]Y-d-GI-73G79e*XT_L?7=;.7?!L$)M?>[$)U;nakvqxQT+bQUo>5&LC' );
define( 'NONCE_SALT',       '>$Tp6tO$oGJQv&|v[2w$/d=e=N_+[n0crKq{7:,gIx~FqeIn6=n19rN8 cq=&lQ:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gns_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
