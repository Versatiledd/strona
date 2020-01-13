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
if(file_exists(dirname(__FILE__) . '/local.php')){
	// localhost settings
	define( 'DB_NAME', 'portfolio' );
	define( 'DB_USER', 'portfolio' );
	define( 'DB_PASSWORD', 'portfolio' );
	define( 'DB_HOST', 'localhost' );
}else{
	// live host settings
	define( 'DB_NAME', 'mateuszd_portfolio' );
	define( 'DB_USER', 'portfolio' );
	define( 'DB_PASSWORD', 'portfolio' );
	define( 'DB_HOST', 'localhost' );
}
define('ALLOW_UNFILTERED_UPLOADS', true);

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
define( 'AUTH_KEY',         ',K7 |ScSh^NA-=8Ji0qpnWd?u54*_0e`_/IUmxKavyX^,v3a~^Oho7{2$%?D^R`J' );
define( 'SECURE_AUTH_KEY',  '3}(d#p|CM2+t88T| =1,%3eE]Y{7ezfnB(Jp#N7A [Y3RW&8jEX#-_v~_{Q.JdwN' );
define( 'LOGGED_IN_KEY',    'HSJ&-gF}}0;)#e}PF~7g=KL7Eff+Rb_T0-3ZAB~,dRf1=B|!?c.m%89w|bBlU_>F' );
define( 'NONCE_KEY',        'fa7Oe$rm^)35czE7vh$$a)w@wOgT3>a0XYu(~Gp~Q;9,,uze,u}M:seFn6Y>_b+9' );
define( 'AUTH_SALT',        'm!D&CVJ$fdQxZe;UCV`D$arK$ANzbIQ.YBVZ+noyW [zz0d.}=}I|)0).OWg3X,/' );
define( 'SECURE_AUTH_SALT', 'tNpnOd[$ab902~}<NqiGmit*3z0)&GbH|{iO0Fws(Ku=_r 1lbthL9m;hP)8geUs' );
define( 'LOGGED_IN_SALT',   'D^llBB-U6-NH8x<s2gClp^hL{|QHCO.OXP47mdkt`XV4IDw6;+Wr=X<{aH!;~`j3' );
define( 'NONCE_SALT',       'u1ymuF61h@Y7PrP=M=L3B,QF2RpxsR9EYe&$^xo&k$?t%hoW zp&4G8Y`G)g~T$f' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
