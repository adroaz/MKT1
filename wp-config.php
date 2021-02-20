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
define( 'DB_NAME', 'mkt1_db' );

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
define( 'AUTH_KEY',         '|0^<u)@YfV~?N5T&CnW!A~?{L1tXO}tL.>KM2M{=tu:@P2*C!Bv:(RtKD JL|)tm' );
define( 'SECURE_AUTH_KEY',  'yE5ahtX~}0`X&W%AH0THnznwOGK_Zn}+kE_cn-2rK%dWE%|fgdWRDR-,iRG?O6`>' );
define( 'LOGGED_IN_KEY',    'V^qRM{/faT~njOz`hF,@%S>%[RBUVZ0tN02>7rpl3_sV#@`e0 A--55i[8MF1i,}' );
define( 'NONCE_KEY',        'DR8oSX`QrnG1ciq{^h)]([z 9k}Rry3a.4@/!6|0@5}A!UdPG@5^y@W}cm2Lbei@' );
define( 'AUTH_SALT',        '2$xM[*iw-F$*4W+)Y[A76E*l:Qi$Z*Q2B.wt]QxIX^,vQ6(?4M_zIAkhw9<8^8#r' );
define( 'SECURE_AUTH_SALT', '/DqVC5k*~Xu#$rh7R1{R%B@1R<iS$J1j-hWRx,UUhUY&MT|r1uI{9Bt_*Zg}CsY9' );
define( 'LOGGED_IN_SALT',   ',Jh_ W~!9t&,hmNreV7bdZRT?81pC1J3+OVyzUs0@!ZRw~pt#w`~77S<E95,K3^m' );
define( 'NONCE_SALT',       'TKf4gdbX?I+pQ%LCTBI}gJf+$CJBSDpT;CX J|XWb1tLd}pde++XPd4WR#-Cp^Eu' );

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
