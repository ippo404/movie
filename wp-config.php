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
define('DB_NAME', 'movie');

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
define('AUTH_KEY',         'bLqM]A%/uOv%$puxr/+RhD~GrLsn/(j r`.=^# |ne^wO2Z1;#F8E?*YRaCF6A&:');
define('SECURE_AUTH_KEY',  '88W3y`>x|PtA}L3|rZeoIyr9sRuV<DmFjaMzl_!wQ Ak?!fBw2BrI52TZmbhN((&');
define('LOGGED_IN_KEY',    '>xm4|y-LGxU.6fO;[]Tgk$`Jmwrpr|e8j]D-vD1;=*B@=hE?K19>x1_<;p`L6y{=');
define('NONCE_KEY',        'QMd9(:)/]qcE8hquqEZ%nj&gd-wS v# s@:-oL^@J Nqbs8YP^|}ju4D,6i|^fi$');
define('AUTH_SALT',        'NGP:gl(bPot1Ve:GhY}H0Jg/CiCS@2iYq!y$SC^!}&o?5P@}1J1AhM<zZ8T.Mkm4');
define('SECURE_AUTH_SALT', '3bsu:d5L2Ms1RGAyd;o%MuF],O5<bb{HYKq92O6y,p|@#Lx8^;s@`TT;?pK2MV)a');
define('LOGGED_IN_SALT',   '$%>$ e_BYSV>G-Y1Kr-$AG1BLIwm&Sh,O/W9d+EeZZ>uM3/p>ut&*ZXEamWW<4X%');
define('NONCE_SALT',       'txpP<cV^2s8H`}*JQ5AN+,Ui+K8)3k8T=~roEq7Eela--EGY@hA1#vF,a@B@YOZF');

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
