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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'scrapApp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'l5UNj6KF5rLV1HjjEa4Tk2bfLkbmmnh7sIlDBYlSV3AZXxYvqqsF4deWhfcKrQW0' );
define( 'SECURE_AUTH_KEY',  'x59UCgORjJHloPOcQjLzR8YhYAXXbN802TZO06xxuRROnGCX9VYsQfV5tg5HCpq3' );
define( 'LOGGED_IN_KEY',    '6tvBXu2QtUNRnzCC2koQuK1bR87YWbBIklzFMpSMZxIctwJZ7swKp3Q9LDyQ6vbl' );
define( 'NONCE_KEY',        'WlXWSyOI8ZqKjhxDfZ1sqflMeThcLn7NmbYaZbX7wqgJjgK8vCTja6XmgTB8J7qj' );
define( 'AUTH_SALT',        'C4IVOmoxvN6EnTiyeDQdCmI7MYywkygfkAm6cg5P4xdp5amEdy3unjDQxZzqW6J9' );
define( 'SECURE_AUTH_SALT', 'uLvk953Ddx785PrcVI1bIJDzkRwkCXq4LTY7NYlgAMhwkFfTyz4x4JrqhGftgqlJ' );
define( 'LOGGED_IN_SALT',   'yql0QEJYedtan5ZBjeunFl6aRAaCCzBdF9OeLkMr9bt47KoQwGYqcjm0vYDgI6i6' );
define( 'NONCE_SALT',       'LfUkytEnwaPcypI8XNKqmjt3fZHMTc71EMEVInadHmhrWFUpa39GUIKEWq92BmaB' );

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
