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
define('DB_NAME', 'treehouse');

/** MySQL database username */
define('DB_USER', 'bc45f516a2a211');

/** MySQL database password */
define('DB_PASSWORD', '17348ac6');

/** MySQL hostname */
define('DB_HOST', 'ap-cdbr-azure-southeast-b.cloudapp.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '<vZZ;ovdy:BriSZ5` [V|8* 89.Dqj&7zAtVg8sn=9/n8?bq)MiQ>D`&4:N9bJ9>');
define('SECURE_AUTH_KEY',  '^!`a+]NMSR;D@PKbA6CxUh>oRvg_)Z!{|s<w-rv6o^duF}Sv)09,D_i}VjWBH**y');
define('LOGGED_IN_KEY',    '4&tTi2m+bf:DjOnK4?Jfs.ED!%aLbsG&a2O`Rg=tcc##uq-U00OQlr;4A LZ,* *');
define('NONCE_KEY',        'f_VZ}z{$FLiLm=pLK8!%a=JFXwzEmL?1t(1$i5h&=RyW#a)cd+e}8*>/eV!j9{:l');
define('AUTH_SALT',        'Tv{L<n`T0r0};]rB3%f1*F:?(a!9=0~n 8Wrbx=!Y_S+Rez_x8!Br(~k^LAxi&*3');
define('SECURE_AUTH_SALT', ';ZPrr!D,j^zvj7AZ]CeQy,fd-Wn&]`;N6(fn8;(Wm~[P~(%A>D$;:wR/>`O}VQ1*');
define('LOGGED_IN_SALT',   'JVHFR]EfItua#bbRP9AZJXvg/@X`K>vPCatC-Vjyu?h5ETF*JlV_DeMW{Z7uk?! ');
define('NONCE_SALT',       '@SqKW/H1q*>6I]9<l]6~Q0|,O1?j%Hcs0KbdXJ[cu/(eDLe?o7i7E00,v,qNbkX6');

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
