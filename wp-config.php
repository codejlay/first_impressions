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
define('DB_NAME', 'firstImpression');

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
define('AUTH_KEY',         'y7dkVy$wl3E-7A CoHZr%esSuQI.0l:2#wbs1$lo,sM)kZ(Fe=wjqWUa#A;_i}>>');
define('SECURE_AUTH_KEY',  '@,IG&+!vt8TQeY3+,#4NM{Y<%|[>XtIiGX_4{G~WnZWxd^32cWpNy,glJd{/98j~');
define('LOGGED_IN_KEY',    'eSI:>98F9Bep2FrmOg)S%aP&JR55zuV8FY!i1(/=Wud8^g{3N-jggf9P:k(Tc^Iu');
define('NONCE_KEY',        'c@YHc?i_adWiS|&=.xFaw(Y;bNM}e|C!iin9M{q/f;jCH?iuhG_,>#2n.nqV&?le');
define('AUTH_SALT',        'L/sQUmScAE-Im!M(I(Dw69BTpia$+s8}a$y2,&{UeIn9Rce@+YGzGr<d_uz&(awu');
define('SECURE_AUTH_SALT', 'Qgk W~0u`M B,W[3=a9l2D{KV>R ph:yt-X(k r?X+Cndg]B*KZ(Bdc>a8B&`{rO');
define('LOGGED_IN_SALT',   'Ak<ORTWTha{/HOL1)tX@jJJ<7I(]XQ:kIt>Oj#YR9wn7C?Tx O)=[K..xtezZK_G');
define('NONCE_SALT',       'vzWrqVo [gSHs)OsNFH|KCfq!R!7ATtu&Jnx>.6fK`GITSo<H`#5c*=<KAAmC$!m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_jkl';

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
