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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'qwery' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'eaURX3uxV3gnZ0VuYbYvctbPzay3w5jf4n05sQQxK9GpFvArPYIDzM1xfrS6a89K' );
define( 'SECURE_AUTH_KEY',  'zLU5vKN4JCCIAm7x1lJcNZ7JhKfZ729JtrijkBPVfjTNQZzEeyIBK377OM2HPacE' );
define( 'LOGGED_IN_KEY',    'p6q0F7CcFHFxR5yBP1DY3wAWj9rHqJhBhJciSjJoHLM4lfxWDylXltb1sdgGvD5w' );
define( 'NONCE_KEY',        'ZLdFEgHEbwAAY39F3p8N84nj2roL8P5GM0sagw6T9muKwovgwKMwD2K59bxlGjQl' );
define( 'AUTH_SALT',        'c3QBAnDkLtmyunndfWF185VN4tXpSYegygMlyvjNC7CQ3PZZaVcAaO7eJMcNBsmK' );
define( 'SECURE_AUTH_SALT', 'LTi4aURzdES1P8IF2WAr4J8iAD9T8QmCEcQGxLta4mOXNc5c9gYFy1YWajRF7qKX' );
define( 'LOGGED_IN_SALT',   'vINV9j06ZLL2NasRtnP7REQW9CZR6Xujd389TFNgvK9v4ap9IIFBpmZM6regIJsV' );
define( 'NONCE_SALT',       'jcYVU281SbqfiEFiQDbvXiKj1SpYXsYtCQOB4rvBXQvb0FvibQDu6rnktrQsHtWa' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
