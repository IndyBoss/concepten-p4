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
define( 'DB_NAME', 'concepten_BosschemIndy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Rtp%(Nv<nPQKCXl!}^4=I])R^Hp56!AL$3]$uW|iP%9hd(Mwj0&ONnyDs[tKc0[]' );
define( 'SECURE_AUTH_KEY',  '4:D ?Q&r#7X8fX8I W]Kq <NT3M~UyZ7:p!/f3 kX*UEBb !+(;wOYlx:Zzmik}H' );
define( 'LOGGED_IN_KEY',    'u]5lZ4.-!]OJP0I.ALh,(OB>3Tm!6]V$9>AH;ufPD-|Tno{>R2&^kTdIiTpH>kd8' );
define( 'NONCE_KEY',        '9MU:TY!Ac$~. d _7o1EY|xK>+F1U+B+,s}R,wONjDl1+wtK2GEB-6PfvBM}q,X(' );
define( 'AUTH_SALT',        '-^eIG3Efjxf1K-9oG@@b@1uT g/o300Sp/g<)vRQ[|3v$HlGB,h%wknvQ+K;up{F' );
define( 'SECURE_AUTH_SALT', '/z|=0;8r0]^Jd@Vl~#@ ,RASJXBKF%0[18>B)uEo5-8h-9A+/$qu`|zJlp!8z=7#' );
define( 'LOGGED_IN_SALT',   '3<-epEY_&&wpc_nhOZ_^?Ruq%>rNiFA`],N.Yh/D&[m:A6fvR3S-xi9rP,g#2q:2' );
define( 'NONCE_SALT',       ' ebn@&*go/dSzql8w wop_?TgqhXHs<W5l2nlp0(.5:JL7!`nb<el,#/LhF>aFHJ' );

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
