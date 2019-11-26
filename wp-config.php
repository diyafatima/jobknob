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
define( 'DB_NAME', 'Iuh0uH0mAD' );

/** MySQL database username */
define( 'DB_USER', 'Iuh0uH0mAD' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Ab6PAHj1gj' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         'Vop+ft-UZc:R};;>G_m+F=`*6^O/q;$9s}V![Ye~i*|i,3|T~e E?{FxE>I5i[VR' );
define( 'SECURE_AUTH_KEY',  'dy t=mDzc8F>Qdbsj-WZ+n|H:tW7WM`-{oj2> %U~$ZXFL0~E[wGY@zn}WW:0YzG' );
define( 'LOGGED_IN_KEY',    '|U9rQtgJ?YOo8X@`9g6y{UB/xrX8LsN^8Pt*`jIOO0T3Xk.: Z8W(0>d/R7nK~Vw' );
define( 'NONCE_KEY',        'VgW#VyE;hhe>9B;{Sy=[6&i1pT=V<.to1UO;0gJ4S:QA C@6V84itLiL60~OxRkQ' );
define( 'AUTH_SALT',        'X1CX XBxQ&Yok.@o`?k,t=vTJ9vO#82ZJpFS?Onig<k8[sde.?J0D<fjxGsl<(~W' );
define( 'SECURE_AUTH_SALT', '[61:KdcTc=i~y)G8$N!*$u<C{W57d4q/2f6LW|OXJ 9(y.Ipdm]{9m[H{Bt%Z/>I' );
define( 'LOGGED_IN_SALT',   '32}PH+fAy7]Mg?BY1|9oq6o,YS*x:fa1RuDG_IJ,[z*Ur{0Z1+8s&BOt0}+h8u8b' );
define( 'NONCE_SALT',       'tC,j}Bog+-xgL^E9FW(w.ti(YzZ>iWr|n~yCDQC:WzVfRAk!`swJ}kOx],_]cx,n' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jk_';

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
