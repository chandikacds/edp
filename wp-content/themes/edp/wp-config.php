<?php
define('WP_POST_REVISIONS', false);
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
define('DB_NAME', 'jungle');

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
define('AUTH_KEY',         '8L+tgWztff8HxdX/>Xf|M 6nG`6p_nY>iVLsRTE2vq[l|xP ^^3)/rU{uuT=O?fp');
define('SECURE_AUTH_KEY',  'lf,|8>-Ns/j5{E@kh^oLDC1Wzm[Z%0d:gL! q8Wzs9QQny^ics@1WG7ZtfAv}C4y');
define('LOGGED_IN_KEY',    'U}]2E[;!{B(b[A5inv7NHmY{D%fSS[:/&1b)Psq[:c<rQJ*Cf.U7&$>lATy=8>i>');
define('NONCE_KEY',        'G|:gd2oj?@,.wzw2LR/rqRvIAeO,a2<2b(p_K2QeT`)3@Z9aA=o)`Hdvp6j6ha8E');
define('AUTH_SALT',        '.0aW4hxqe}}Js.LV |_+A@P[N(efs!6mNT^rK4+DV/1Te48_EK:tsp3}pjK!I0Vz');
define('SECURE_AUTH_SALT', '}>#&Od6c}iv;.TYe:DH{V@L}-x3|[JvOT].k)Cq;|wZl6%@{CTeT)KTiF2pZPcTh');
define('LOGGED_IN_SALT',   'rc)o%P-l/rl%0;O@Yl. }bHpWopR5fK*gY];k%/@W2vm9=(H%.U5/h&e>_#{^E!E');
define('NONCE_SALT',       '>8OxRc^gibc>:l,ARfJ;{G{(q[EVHW :pD`e#XE@}#W/[5[:M:NXHb}&D?F<$DTJ');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
