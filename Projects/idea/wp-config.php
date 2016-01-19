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
define('DB_NAME', 'marktant_ideafoundation');

/** MySQL database username */
define('DB_USER', 'marktant_jess');

/** MySQL database password */
define('DB_PASSWORD', 'teamjess!123');

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
define('AUTH_KEY',         'sg5kdz7f066u5x9vqmcnlzgme2haba5uxaofyig5afxcqfq7jkq46jnyuxteaoac');
define('SECURE_AUTH_KEY',  'slzgjuu8lssqsrs84zvll5a8hb1qtzz6gczfn5ixzniyihgktwok8phhxgxqvgrx');
define('LOGGED_IN_KEY',    '0makdjdwgqzujqc4sgl5xphqopvx9gjg9cnjgkxlspq2qixqxdghxfvhkknxxor4');
define('NONCE_KEY',        't5lppg6tujuicj3lxpd5z1e6727jsynovqj2lsyn0vwq4nrylsvoqjcenaqbpjen');
define('AUTH_SALT',        'mldg8w4vez27vsagjmmihepaunwd1bwavxgrqdwyhryqrh8njoqcclap38wgfged');
define('SECURE_AUTH_SALT', 'nwhaxay75tzpa6sapjahttisv8tm5citazl9olhxiwgvev70kocd9jdlsrf38sqs');
define('LOGGED_IN_SALT',   'k5ny6uaakx73bzalo8u9qm9wof13qrobluv1hus7dybq73mwt16ehnqd6hbtp40c');
define('NONCE_SALT',       'm5hosmjdeqn3w87onb24xckycesvrogwsw2r6qqbqf9xyrjikvwnue7snpfb8cqn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gxd_';

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
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
