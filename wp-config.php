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
define( 'DB_NAME', 'dcf' );

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
define( 'AUTH_KEY',         '</npkDiqQ@rP26fv^7YPa.a_s%Yv!;B>+7CZZMjC<:a&m8nYE4f, 4EGyR,/2h7{' );
define( 'SECURE_AUTH_KEY',  'F}g9f0L2^bKO_?&s!LUvZ84#C%]g{vr$s2dMw:Lcu1hoTq>NT>$J.8_@cc qE~5|' );
define( 'LOGGED_IN_KEY',    '}N>6K#edc*MSW`q<dcbsYIT`n!MK,Ohh3S7W/zoOwX5tNP/80=MXW2gatj/`]r=q' );
define( 'NONCE_KEY',        'sL__Mm}~BIMX#{7+w^V=8W,u8!DZJh7#{@GV0+>JWFRp(u_kkNNnODC8rTRA%8~7' );
define( 'AUTH_SALT',        'fSkuhax[S$xhC,>3ZJ+twTmX8le;OgLTqp{(:@hZ#.d16 7S;XIU2J2NQky&Jwh[' );
define( 'SECURE_AUTH_SALT', 'fyVy{@oT%qQml`NX~_W9/j!G[ee]N(%B46xuE{/ajHPL4&^6+-3!<N~_f[Bi0SfT' );
define( 'LOGGED_IN_SALT',   'ZNrQl_:jqKB2j5.3nF3_siM{CPbCJ[*r!~Bfi9ik/PJbE$_gvJU)`3b(-M% fP8l' );
define( 'NONCE_SALT',       ':)8`Yc<#=&h.qpIvE~[uo#)*u{t4V&@v0XS,|KLq/QXyNHh]t !#<.B,W5EYT;k`' );

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
