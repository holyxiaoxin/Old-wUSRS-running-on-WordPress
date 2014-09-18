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
define('DB_NAME', 'wp244');

/** MySQL database username */
define('DB_USER', 'wp244');

/** MySQL database password */
define('DB_PASSWORD', '2I6Sq@7)dP');

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
define('AUTH_KEY',         'nzxkfa1i6yq3h5lf8mua9qumearcvuujltc1pesawujfzocgcvcql39b4toyihkw');
define('SECURE_AUTH_KEY',  '7qc8ttq213hpxt7nah2pb1aowbtlmsxbc27j4guiaovrmva4q9ehhwl8vkthvwwe');
define('LOGGED_IN_KEY',    '9obewv6jiex8azkrzsgovx5zm3pb5jk3b8qiodeukjn7y0a5orogxmeeoxuaurrz');
define('NONCE_KEY',        'fh4jvxomgfoif2qkvucb7648agex1bidycxrvcolfhvrderiv8jhd82yk25m1gfp');
define('AUTH_SALT',        '9mcqaeusu4j9oywpc5kjn1lfolbrtpevbzy4qrtbvhbcicux57zrntn3hjzvxgzx');
define('SECURE_AUTH_SALT', '9ns0nnheiaepnliox700alnnjo3dvl5rm6k1jesny6lqrtnynexqft6mv2fldav2');
define('LOGGED_IN_SALT',   'vzyhrm7dmmh20hjieq2gmdiff2f245y6tk85tw48slnmocihg7e1vdifvy7n7byw');
define('NONCE_SALT',       'i5hhrlc6i9ol8ttmllcnrbsnv9moo7jipok68bkaxm5be2hfthnapmxdlaop6xhc');

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
