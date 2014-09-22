<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ':!aWazPbX~Tk`|P}JHRmmMiZQH?le^2x(3O/J|.7ku._pr>A^r3V?V|W#k7,p0_.');
define('SECURE_AUTH_KEY',  'I{Y5)2oE%u.ZT7/8HzOL_o(xqw[$-[5^2xyN@X+evzjE%0YW(%koRQVvA*0R19S#');
define('LOGGED_IN_KEY',    '?`xc3]0V SJ:-MCCY{inQwl>j@?VE%Xl1!L^N`+s jLRsU-{TO([@<#eBA%#:{8J');
define('NONCE_KEY',        'scs!pc[Q7?n.PF wumkqzo}X[x~Z5$L5aW`kAh^R*pYI+2|Lh3#e+e|}JhYUX+D+');
define('AUTH_SALT',        'g0kGwa-LldisZKoLLe|>|t|-]%x%/zvO5fz}cB@^|`.6EdYI9f#1VKLvB5]-&e`u');
define('SECURE_AUTH_SALT', ',Tahja7$?o2~[M=.g *Q-b6;<5jpL7}h9!$eFH+=*!>aHYWi+%}xL>eu@i;ik8?j');
define('LOGGED_IN_SALT',   'sDJ~(NA+/*eqi?<F,6LDCSl>1EEsU&WfP-jAl )Sq*><?+v>3^0$06J&oL}}[CMG');
define('NONCE_SALT',       '(ur9 r8bJU!RfR,412X^`pEjG]4%L3nokzEEX- lAl~r?!`0jwO[xh`@Lmc$3?|u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
