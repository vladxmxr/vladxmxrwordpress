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
define( 'DB_NAME', 'wp_data_portfolio' );

/** MySQL database username */
define( 'DB_USER', 'vladxmxr' );

/** MySQL database password */
define( 'DB_PASSWORD', '23052000' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'yn&&Y35$$GuSFSz_srtCS~7?#MX~mx|dLu}W*!`5g~?LY6J{>bxa|}xB,fA;mbf8' );
define( 'SECURE_AUTH_KEY',  '@c?j4kwi1pRm!KTq&UFZ7=h] RPaWePE9-gwi>CAL]pN<rjXkOn2@CFi#A#._y| ' );
define( 'LOGGED_IN_KEY',    'm[{g[t4[,<)$6ml8^`L@Qp@iI~l^[P`]hhB[H;x%va4!iYhvWXXE(g6Ku!g 1.ed' );
define( 'NONCE_KEY',        '$h^xwIo: cgB=#yPMBXBa*$jKPRxTH-r{cS@pmEU8l!I(xX*Aw,^poP=}F2m4_kB' );
define( 'AUTH_SALT',        '&39]{B+CKzWMs2a4K&~5`DOOxfB^oN$NW&?eBDNUd*>52%E=)2:[59c]#-~F#s}_' );
define( 'SECURE_AUTH_SALT', 'z1hDBg3-=fzs8hT2(*t?bK?P=L$D[fW,V3lH~#rS050.H>v<QDSyPz.*(xwx1s)_' );
define( 'LOGGED_IN_SALT',   '4@i[lwbStB~y$`k9piz#TFc9o]Rm%b[as ^()&.<r=I =&y0k-$c5+/ksTfm1[pd' );
define( 'NONCE_SALT',       '%kj 0.!=?!GQV?D3LjXq/%WFC;Co>Gg1-(0{1P76:~pjBmXDy5Z4^ay(hI=xS*Hp' );

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
