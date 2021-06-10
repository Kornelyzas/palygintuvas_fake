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
define( 'DB_NAME', 'palygintuvas' );

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
define( 'AUTH_KEY',         'DNdaF|+;NTk`?4}(4MpaFc]@IA-!mS_~`e9&)CV3_Ipx6&JGoy2hDVon<dV5+dGH' );
define( 'SECURE_AUTH_KEY',  'Pwpzu;jOw&I]I%!O6QiETI0<2>R4-V_;(GdWTnJtM+21XM],eP-BWmJ:*Sr!Bm`b' );
define( 'LOGGED_IN_KEY',    'R{>VfcFMoR#ERPh,ItS}4_^8V)G+$[q#PRkh?U^BI7B{!;(a5/Y3ly ^$YJS{t@c' );
define( 'NONCE_KEY',        'D6R.blK{e[gKSnFg$ Wx^O$zIdBvASOJ^uM,q}+[?&]a0 S#HA~/nrDCqb{}vY$<' );
define( 'AUTH_SALT',        'Uf~qJo<XQ:*y}Kbe7KXjEx<G<|V88Unw$V$$c$$$M6-QiP=oq8OzC^%TZUVBb!=/' );
define( 'SECURE_AUTH_SALT', 'DNcaQ<vzivj.;Ud_VD=~2PR58|`v]j^ Hvld_vMs .@+s!Zx $6*2iG?&-MiDVax' );
define( 'LOGGED_IN_SALT',   ';s{]3gh^2aSkZCC6G19U5aV2Th2[Ig|f)n<J~Iz-=2Bz4%.]Q-iHc5x(9GiFs=,E' );
define( 'NONCE_SALT',       'UE]1l-5MtwJUb7PlgLs}wp(d/Z):yM;ix%QmsWG2c?;RcEg!zuqcBv-3jF^uOP)5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ply_';

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
