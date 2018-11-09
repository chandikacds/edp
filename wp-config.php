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
define('DB_NAME', 'edp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!I6*e $y:<AqgO3FqG0*2LB+p@XH&jwWH>)_oOSoz=JTWRA%9QA9RZbg+g@m5UL ');
define('SECURE_AUTH_KEY',  'ZZmSsDPQ@1.:OFRS|kY{1{y]Nc>~#5~cx%^Eu7+8mo.H0t[Ni~;Nz^bdVgOY{aIJ');
define('LOGGED_IN_KEY',    '3npsv!>6VNq|B TiT}a@+,i/XRW,q(z[vn?{8S}mF=^j5%LvQO]Vr8U2URY@Pup_');
define('NONCE_KEY',        ',&}s<u9=8$-C<g$(e-?Ar_=pRv4Mo%[f2x9:0|l^9{(]i^$ ]D[Xy.AdZA$IiFg=');
define('AUTH_SALT',        'Gq/Z0`OSH4tW^aWHaqve|_|_1i #5ym-ehx~{qVBRGGskckHOXI}`S4BIcnUrr-W');
define('SECURE_AUTH_SALT', 'qiC$+><n(w6cV.*T`Rs1a1a}I1wnIisQ$T&$l=_/U5OFQb?g[J/pu#LCNjU$Fgrt');
define('LOGGED_IN_SALT',   'gQ^~/0r[m1E]BEe|#.QpFQ[dN>1.0|~uYWRjspS/$lyw/gAO:{<~H>GTeFGG{<f:');
define('NONCE_SALT',       '7Oi_[/ph|6T_~S+xj?Q5`AZQJ LAEFzOWYG^%)).M,:1eK[ytSDm`;+0(b&e#wmB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
