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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'w3_theme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3309' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dI0EE}j3Z7y)gLAh7B+x$f(g%_?4lKndU)qe WOJ_(x-O4Q!!|wFD#d3y2kP?drc' );
define( 'SECURE_AUTH_KEY',  'ar~[71m3=rbh6VUfC9EEeQ{qU/eDh1mrCm( %LY{L1)L:B=)T-~:crJ.Jeigdi33' );
define( 'LOGGED_IN_KEY',    '3STWx|x6eYn~{^;(Zwqs0!XWa0hD$Nq0#^JS:_;ROc1!aSKoYFi,8-Jy/<75~9m)' );
define( 'NONCE_KEY',        'sLGu,_:Nv(Vl@EJMI_3W-PC)!8%|k+XHZ^B:hq${e^evl%QVCc^nGHZ~UDRSVVcT' );
define( 'AUTH_SALT',        '<kf[KH(5z)<dRcg?xp5TXLmVbtb]:c[c#kErh<XyN$!$1=R#yNJ-GBSw4/%g%M7a' );
define( 'SECURE_AUTH_SALT', 'f~YN#I]Z@ooN+M_P;f<N>/6Qu9>{XV]&$n7tc4kdz3e?YT>0YaR-lwOr*p]n[}@}' );
define( 'LOGGED_IN_SALT',   'hETAMU7uts_WetA^zXQsL#>*.UB$6OWBUg4?Aj4+&}^sZ6}5.D1$nHZ7 !5%uT<[' );
define( 'NONCE_SALT',       'E}q+$NzaExJGHm|dy]bX@0H<.XoFE3dmhE63cAt@t|Lq..s3//|fw^HG<)Qs()iT' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
