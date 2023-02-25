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
define( 'DB_NAME', 'mohammed' );

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
define( 'AUTH_KEY',         '`ssQz(MWk8P=a-dxDwF6i1LS?}N)oG!_ojUzYG/UE_Kom%f<ws ySEq]6exe:_Z(' );
define( 'SECURE_AUTH_KEY',  ':~h$pq>_V0V&9LC}G$MxheN,)zA5>0hl#Ao:=&_{QGE4OC4MuKP:FE__,OnN2rJT' );
define( 'LOGGED_IN_KEY',    ':C)RFO2YVpm7lTFNq{k9RL_S@.N<vSPxchk-TFSCZwCX_!^%(^uyw7zlOVK|t*rE' );
define( 'NONCE_KEY',        'zOu.GFxdnZwYkPj&^G%bf9_|ke6{3S5*FVY5&.quKhIFm{75X[gHB$T|_)vU&0MY' );
define( 'AUTH_SALT',        '|XGUmsqZ#Q!`tvy5.NvH@,z& ,IM)5<+-kAisR1ku>Wl!nqJx<LIA&nkgOLvwtXf' );
define( 'SECURE_AUTH_SALT', 'BE%ID7^1=crsgl%j[h+4)*d`H/sojau1o-W]I`<1;+>O#^L,~@ BTg64PsMx(dQ8' );
define( 'LOGGED_IN_SALT',   '[)/d~v4fWf8(Wv]Gr:7z j!+LTS[,fpK*$!.8m[D8TH3?N|()gM W[zVpGT5:.>[' );
define( 'NONCE_SALT',       '. *SlFkggM]CaW*3I>]P +aFTbV,%F%2g.6Vl!k=r+BHv_a`.O;Y^H7_4m;w8Z01' );

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
