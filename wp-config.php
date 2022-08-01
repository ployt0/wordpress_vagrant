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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressabuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpiece' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'c#j0dg_Tp}S`H)_o,Y`z#RD1PLJL?4<[85FfJsA9I+0)f-%PR{{#xF *gvREs}dK');
define('SECURE_AUTH_KEY',  '6*# AGBU#<>iQw,R.F[eFI]fSU+TQ<8909uI6y|L^QgO/{sr`Ov`s|J+1@lP@44P');
define('LOGGED_IN_KEY',    'zm<leA~x@r-h#m-Au{_oQS7u3MR12^AS1t|gO3}Mf|1uN:+Gb=Mp_[w;,A^KTGIf');
define('NONCE_KEY',        'ga^+G-nmyC%9@R:>?B* B)9JHYs=bqz&bM8Ek`iF|8cje^(O)ddI[3uidyyjVeE%');
define('AUTH_SALT',        '+QQ;+%`]2j.mP.U0H5nE@Sayq|IgY-6<!p^d 73:@|UDIce?Qlg`Z6NkhFHA|X0U');
define('SECURE_AUTH_SALT', ']pS5+.$T#hOIfSO>L~l{EQ^yL4S^_5879LCjUyL}9MvlB(x6>/z|f%M} pxo)U9H');
define('LOGGED_IN_SALT',   '<OJ1P[|hqH=k;u7Fe80wnuOGwo!~h|*iWmt*Pkt:dq1M7nm<Edz{<JQ&~0(T5tz!');
define('NONCE_SALT',       '|0j(3 NBsEmw3$+2Q#Kp|_w-VksXHLQUn7i[1 y{<#s:LO!UnTeeRFDl;lgGN&:c');

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

/** Disable saving revisions with define( 'WP_POST_REVISIONS', false );*/
define( 'WP_POST_REVISIONS', 1 );

/** Use the Queen's English */
define('WPLANG', 'en_GB');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';