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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project2' );

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
define( 'AUTH_KEY',         '5oBC(s?M>MOA0(k:_dVM)8piNnS$v_{JCi:`Z=>|xkb]~,zI*:3VB+N.AMHdtX!!' );
define( 'SECURE_AUTH_KEY',  'I^uJjEvAGSYPpYIl._)GwbUBpGaL:l T.;Ipw-,#7QO& @,ERqusZD7[O1^Pv-<L' );
define( 'LOGGED_IN_KEY',    '%_>u-{e|V,0K{II#6><r{w+F6[Fk?kQ?zclIV^YG>&Wwl#wGI0;g,UQL@/_[4!tv' );
define( 'NONCE_KEY',        '?8qk9`vdU=P,8^Sh4/DHDrBmEyA3^RA|MtAzX<&4HDA:`z4tlFr-<1M%/:z}3bi|' );
define( 'AUTH_SALT',        '(8%9KL*qSGWv}  JYXM%Bv(#;=puz}cIcwL)N9XwtJ6u@<I,r~4;RhFEZnJV|-N6' );
define( 'SECURE_AUTH_SALT', '&|=XGgVk~` G>^<a0jm<Hw=8jIip+XQVF4|4s%{#B%_[I8@J8Ji#ez`(U7`TYeV;' );
define( 'LOGGED_IN_SALT',   ',pCT|BBj5)}yl-:a9/I81m,9Jl4w$RQmE}^}1Bav;>m1L~*-dFXo- E#Cp$e8J!?' );
define( 'NONCE_SALT',       ')e9%~_+y<vaE:YTblzH%^NW_~j1{UBQM$$E?n}_+6$FYFdF[?e^yP+P]D_@_):pr' );

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
