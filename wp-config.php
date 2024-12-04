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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'delhi_foods' );

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
define( 'AUTH_KEY',         'Pf?b49c2hd1[D<lZUrrnAXQM`_lwd1*UVDrR!r1(n4`KcA-?$*&=n}PIq,QdS1t{' );
define( 'SECURE_AUTH_KEY',  'w%/sWm%P4mq621yH,K#S.n$3+*qDJ0u+JwL1mo03U&-i&7[BTi2V]t) nM-F~&iC' );
define( 'LOGGED_IN_KEY',    '2,MCq/-frRm9m;fkp&6B#Sh@;,2qSr(bOLhgdicf1~W#PH5[v&5[GxEIkH>Jiebv' );
define( 'NONCE_KEY',        'm&z=GV_2)m/~-mR87k^3}GM:5j(5Dj7||%>i6>S,jIVI44Sx-q6]dn)iBU34O<4[' );
define( 'AUTH_SALT',        '~LBOla#J^IR!b-p>$a8>iElV^2=EF%u:`|;<q-GE:PG#NOk&MjQ!X@ vnf,1.V<z' );
define( 'SECURE_AUTH_SALT', ':dOhc=w8@.dv.RaHaDWqYyWdgc h/R)Vr&P_!WJ`ggr:aX]kq!iZ[+nQm<PZ6[L!' );
define( 'LOGGED_IN_SALT',   'P%oFxbb~D fX;f7`JckJc~0_5{s)c =hb]U-{&/pzF$}sN_V6USzO0Zo9*<3Gx7f' );
define( 'NONCE_SALT',       '{9#~`OK*@iT`-[s3K^2lg)wkg%<W3dr+{iX^P[]#u~ou@n^tVu{Nh2{ PA[c0YsD' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
