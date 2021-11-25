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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '7Z5KSBl7pB6{D=X6*uj$pH/@:(m~9(nGITsb<#71KT/#~WK?tqfQ~N_x*$sC=qPD' );
define( 'SECURE_AUTH_KEY',  '*L]+@TOvPkfH{wYssxw8+Ea`i{M;io<Aj[Iv4b4}#1//$>0{l)=ZJ]#A6rz=fE-7' );
define( 'LOGGED_IN_KEY',    '_`krjX$ZiO[s>$<;h`>3YfmU/|v_[~iN^W#BbRr>-nG!Je(8>XMD-r*440}Y3]{K' );
define( 'NONCE_KEY',        '@|?6p3m6dFkO|?4`$O%zF%tk-GGz7MmefA;zdg5$#kh]c.EzE~uSfVhePZ/26Ufz' );
define( 'AUTH_SALT',        '2k3PL-}OSyu_rD$, Wkc7z]W 1nz 9%:K[2xW?H_*6Rs0!yTkG@mH6N& UwiV^NX' );
define( 'SECURE_AUTH_SALT', 'nu_t{<3)6,pqj?H=#oc~(D]9#]I64vB%Vu-HV$RW>d0D c#6aHAQeSn[ZCtu?nfb' );
define( 'LOGGED_IN_SALT',   '-3$0X{fO:/OvU*|_YeUdl&/9bg(r<6-6V,uZf_0Zh*bc68vZ,{TOpjKB?rV-1KYo' );
define( 'NONCE_SALT',       '}_)K0Fdni+MF)C24+Dd4p81mDbxLoFH]mj5?jJ4yIJwI|LLc?}6glIjgc.fe.El_' );

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
