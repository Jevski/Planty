<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'yExgQvYLTHFKxM+WsHZ+BeUvMOc1hvBqtkQJQqhdsjk0abProxYUcerLyI97zFhSmIN+qqRn2QMaiOM7soxJSg==');
define('SECURE_AUTH_KEY',  'C4rkT+q9kcqQBD6pGx2gzOahB9Rvk0yd0kJGVwH62ql72TA3uiy6w2B9znCs/d1PgLFQ7D9OGv62zFWp5W62+Q==');
define('LOGGED_IN_KEY',    'IhpAZqIVN/vIztVUP953iwUUdoOmas4UfkadCnY7kR4YJidYFsqnJc+8xxhkpgqq0i2gobzsMwBNyZCU05y1nQ==');
define('NONCE_KEY',        'YPXBQ/zH6ky62kyURurQGCDhH6xqeFFFrFra0cHJxofzrWEskQcGK7GGCsyh8koSGfIDUkq5oMKU9oOZkS1amA==');
define('AUTH_SALT',        'gSmpdbf6i5JGXoDHBrj9CLjoP55CtNS6Euc7Wc/FkawGbmB7Wt/s7/+tqKQsuPm7iJmGcgIOKEHlorm+lU2aFA==');
define('SECURE_AUTH_SALT', 'zsNtHmxZdQiLFDb+cawajl+qBRD+KFdrKR5gln5NDpRvj9gXb9eqULuSCg/4S9R0hBCgBI7UVgRoMob3Zg3aAQ==');
define('LOGGED_IN_SALT',   '2a5QhkDm/eY5vpR1Mzzezixvo6IsqYFXxETG+p/7MqCZncyCmAK+Y3zs6EtqkXOLBJeG1RHLd1Zzg0YaDMe6tw==');
define('NONCE_SALT',       'siciv4JyzL8H3j6qf5+Qb51WPowqZwBwSp+vvouU1U4/me0gZoggpMMFjjgCBhMnuKUh/5BLfkviU/bhCHqWKQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
