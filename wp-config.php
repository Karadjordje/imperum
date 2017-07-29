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
define('DB_NAME', 'imperum');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'kmjk*=_)%HiH><~=^FoS#ML4QGZuF{./XH}X.p?|X+W+,K_tyjxHUQxkYPwqn[OH');
define('SECURE_AUTH_KEY',  '[543Ye{L49K^<3Lx]ZDGYIN0^K;]Q<l3[-/{+x{ttG9zkW<%X2&D@$L&(-]b HpW');
define('LOGGED_IN_KEY',    'ik`0)+Bn@.__*pf^5;oa/x#On4]c:F9/`8}>xP53/~_DI1qY^LEQSu5*5I|rw;V<');
define('NONCE_KEY',        '+(GYSO}OJHSwPA EKO5:hwAEvp~pB_fey ^z#u>B43*$%jhspW=xI}n9CVSY@7%W');
define('AUTH_SALT',        '}J[9>HdmWjr=k_<R K,*;Bq:2O:6w@XVOp^3]$w[ov.6aRsCzQSh5S)*tPWx&{!?');
define('SECURE_AUTH_SALT', 'y)/?l2EuHM773qtALQ5dyvz*wl):0E4+(yp*u@N{*y)L[HC>R$;HgBv*nn6-CTjg');
define('LOGGED_IN_SALT',   '!ef?dZwAw[8J)>wL}BjOce6yk/y4is1%+b*8]cxeGcnZ`ja<+p7$SgA3nLdk2(.o');
define('NONCE_SALT',       'Lb+B^wND|hZ/.Tk(/vamND+j1h8wxu$*Q[W5v0!(*,%(}auXvc0>;nsRtm_=bJ=!');

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
