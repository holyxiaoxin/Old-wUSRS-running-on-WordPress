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
define('DB_NAME', 'jiarhcah_wp244');

/** MySQL database username */
define('DB_USER', 'jiarhcah_wp244');

/** MySQL database password */
define('DB_PASSWORD', '2-iF96(SP9');

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
define('AUTH_KEY',         'tg2tf3dicctbqgv8nyhmeek8ccdsoktfe8ymidlc52vh79kyrmb6bbmygbbw74os');
define('SECURE_AUTH_KEY',  'hnz85aejjiu0mxmiftgkrv4boaufkqxbu5jwxmayod989wqbyxiuqedx9ep0w4hk');
define('LOGGED_IN_KEY',    '1xlddokisfeici96xwhxzgoewukwnn7srirkvvjq6kdygz3yljslkuzqnxnfujyn');
define('NONCE_KEY',        'feuahddfpdkyqmepeowpisja4oyapkv44fxladco0mi3eexsgfnj7a7eeph0vytr');
define('AUTH_SALT',        'yr670bfrgj2ysv8nure2m0achxotaa0a0uvpwxjhei6vjxemlsveufwgjswo4ygt');
define('SECURE_AUTH_SALT', 'e3cq1swala0osvz5cddaohflajt4fwcpfr6jypofp0np2fzgvyx9ekxmr9uxarud');
define('LOGGED_IN_SALT',   '9psdk8xsbg6exm2g7yvncu1lrpk4uzi56zm012mf5ioc24t3irbwvwpdn36gqfhf');
define('NONCE_SALT',       'gns1mijysowh5qrh0abbwlccrjt00ssyknxpxyfn057bzp8xw1s0pccpgm3pmk3r');

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
