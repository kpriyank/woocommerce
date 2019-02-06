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
define('DB_NAME', 'woocommerce');

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
define('AUTH_KEY',         '!Q2FF[9I*OehLnz*;|g?Wml8-oCs~J5~VQ5I1)6ITnitXuKp|t792iSR}tnxAw8)');
define('SECURE_AUTH_KEY',  '$v/E%Zf^?04Y|3 zX4(BdT3UzM6/nm%e<-}t~xy:kpUv&3q;r*$NnNQl#2W:,w0z');
define('LOGGED_IN_KEY',    '8a~[]m?=lYig1,FuA^Z5DzL>befYM,B)gj74PD`#@+k)j]v|_M79Ta^5YrgRgvKo');
define('NONCE_KEY',        '`lt>mIR<r)lN:Vkt[y4!6Tg__m.)Am={f>,#_REbI-&(~eBfO* K$LW-$!Cd4Tdq');
define('AUTH_SALT',        'sp]1!P kwZ=Zl+xp[0Ft_<-15r%#V^2R[&W:TTKA;yvd79u^3$L/?/Il&^z/Nsgj');
define('SECURE_AUTH_SALT', 'A]oCF@m53GcxW[lsY~%NN<tOY[wd-SO7IN&@^%z^<(O_U.$[qlw4@xCbz8$G@S:q');
define('LOGGED_IN_SALT',   ']6H9BXRL?>%bAGq^ZB[:YG.-(BT>2?!&DtvUzLgO)ya8Oj>aWU3M<,)EYSL%a}po');
define('NONCE_SALT',       'T}rT/9pbP(cry+X*BJg[Jh#s1ruJ% B84?Va}7igfYcQDmkUm3}`I_Fha.)PyX*p');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpp_';

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
