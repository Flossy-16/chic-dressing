<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'D:\neveu\Projets sites\chic-dressing\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'chicdressing' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '&A}SQy>g%2)RQZ&qd#y=OlH@Pn*nWg>ivnS5H0G5gXN6BVc9nP;hgDf#,krFSMHY' );
define( 'SECURE_AUTH_KEY',  'O=H?@V(jLUA`{k1/)E+$bFdaNUv]sK5C!oSwvryHl)CYk%7Ef:1;vML3Q^xF_>F)' );
define( 'LOGGED_IN_KEY',    'MU+bzAQk&XFszzf++#d>yvdja;]L_ CS&2f:|3Ws0|OKO$x_/Nd+tV-TL)$I$5pY' );
define( 'NONCE_KEY',        'k%r-R3i2(DT99?_m7)ZM_o@Jp7O)6ciY[s8_.@$I/VBhH~mgU51t*2YpN:frlsp|' );
define( 'AUTH_SALT',        'Nux-Sw-oyr*j*W8b7PQ-1V1KkQYqiZL_.,haPd{#-#,=hc}L:TLXd-s^Q@qFL3MR' );
define( 'SECURE_AUTH_SALT', 'jt0`m[3b|Gg;ZhZqEp L|~PoSORwh}DfWT<tLS^)F2Dzjg{1ABpR1(/~o=Je>@*E' );
define( 'LOGGED_IN_SALT',   '_;3TfQ.lDbeo)y.4Os^=0|zGq%E#0-^HFIyE0qz3Gd-F<h;Z>}<}X[8:nmEC?U@{' );
define( 'NONCE_SALT',       'uNs cHY89$l|G5HhY>AL1ZOQg6v/LVT$d$.hb{M}V+KeiSn_$[!^W{g4V=M8?RvV' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */
@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


