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
define( 'DB_NAME', 'direkt' );

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
define( 'AUTH_KEY',         'm5GC[=_Xl->j42X|`Pj,kX]S66uP&0Vk(=+gI1bt1wS+[,Y(A<oaeIxDgz(&jL&,' );
define( 'SECURE_AUTH_KEY',  'gZNr4:Rax c#kT=Pvp.%{u&5woSrGcuQ<3MktLWc]2<rFFjl`-)%!Z`1Yf/rE5;7' );
define( 'LOGGED_IN_KEY',    '*5tKkja%K^kyS7Yk6hXMGNmm]JpmQ5)/Ojy_?x|Q!XN0Cy9pkBj_dCX;7[.HfIfo' );
define( 'NONCE_KEY',        'Lna+mf)<Y0HXc)W|[SeddF+VQprmfJ3U0nun3)Na|lmdtG1ra_V/eo1c_lg/Kn:s' );
define( 'AUTH_SALT',        'pOY))Ht>lf9bud!G/7ci;%5C;t)S-js4/uO+i8$>cR;U=a0]~RseMayO*g380*^s' );
define( 'SECURE_AUTH_SALT', 'XNhY_=_S,}#b//bJia=KRTE[ufWW8xuvM^u$=c&Y{u3WR@4`+$/3[%{$O%N`iZ~&' );
define( 'LOGGED_IN_SALT',   '*T9:&QcvmeD<NMb|8RoS*Y)Wo]iL;.]o>Y4CB~H]5P?71dK6>Jq)Ni!J`a6_TnVo' );
define( 'NONCE_SALT',       'mI8.3??bakL x^%=rM:w2=z],f^2jn&z4R0]7F]0TFRWXN*X*(H*-oO^80sQI{5U' );

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
