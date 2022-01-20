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
define( 'DB_NAME', 'data_information' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'a1`%~]O_b]#tvQ=@Lc_8wm~KB7iq,[]NFfiZlvdAlBIy$4e`kjLU5m+ ,8M(p|5|' );
define( 'SECURE_AUTH_KEY',  'w)s.QCHm9bd7HYhO3x06fkg+@6-DclM>8Sge--UN^qNcA)tWriai!$IBy)uqH{aq' );
define( 'LOGGED_IN_KEY',    'P-4:[Th8a~f5&U~ k){|( rsyG9jGu4C4bssi/syqq-{yO ~U[(q:U~<j/;!rz,_' );
define( 'NONCE_KEY',        'c-0>z-/@X5px2wHn|S=OuS5Zs?2aq@,g;^)S !@d r:peeByR~8V:dl!CLA{+H<d' );
define( 'AUTH_SALT',        'cQ(ScF&LlofbW>u!jMoYr7Qxr4Uj2T4DN(Co+tiomwjLnb}Z^qctFU`If.NqdH95' );
define( 'SECURE_AUTH_SALT', 'XQR+k,lj-S:6#UCVpZ:bQBH0uPEAO/X,I`1~m?b&BQ9O^zNzn;W0MRizqNa|7q49' );
define( 'LOGGED_IN_SALT',   'tJ-(LP]v}GEFm=$_<Y=?AQAo$JX{Rg`3{Sl,i{ ut48XQ#vHY<%vdV6<.IUps6k5' );
define( 'NONCE_SALT',       'ArqCJf@>E1cN/TRRo_tp<iYpf^&/3MXDGK4g:9Tr<PYC@aJ-fjhVo<^tPlF)j^6_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpcont_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
