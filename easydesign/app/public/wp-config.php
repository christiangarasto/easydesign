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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fUJWcTytzKAsEPUqpbZl/G2UOCdSz0OSzl2pgi0c/QrhcgfS8JB2Yciw/UYZp5vVRifLdsNXh5jSM2aO4D7LwQ==');
define('SECURE_AUTH_KEY',  'c1pMhLDinixc94dVkdHGhzFvfq8VABVUYF3CyIDhlp2uZzTfuvVV3eiaGjb1gtU8Jj4KalE15T9tCvr8RzcDEg==');
define('LOGGED_IN_KEY',    'Wu2C8XvbK5mpu6Pc/KIFgT0ml701W4F5RbF+oljn7z7r0uJ85q1ZxbTvi6yIZPAAw3qRkHWhKC5wilcmY9nP4A==');
define('NONCE_KEY',        'OkbYpaX1b4kYPEZVb1im88sNDnw8uYE4rS1cwXQY9xtCnbgyJZbnrdLlAOgJ4e1vjVjeEYJ/bkQP7o+Bf08iwA==');
define('AUTH_SALT',        'gcKF/ucWDH4RYDgX+cEpZgYX7t5X04LSjBIVhmt8kmyI6u+dOnaWS9wHp52/rpgXReV80alJcod26n1PMTyvFg==');
define('SECURE_AUTH_SALT', 'ylHRn5S+0YKt7uolTZZGX2bMtCpkhXFSf1w4hNTXEPJUSDf5DEmtKR+Pxb3/nKBzFzBTLuLlPHxs9JDxeROrTA==');
define('LOGGED_IN_SALT',   'tdc/mSftHZRmWdN0Kh8UkCBqC+iJGHAlbJTANyk8nSEIicvK+HjQSYIgI/oTBJY5eoAgm7ShlLhrjCSQuS1uKA==');
define('NONCE_SALT',       '4bjS1MC06j7RYm5LbEA57RJCDMzNK4ZKPQYRmqgvjvDTPD4v/8+CQeDvdZGYlSEPoZNveCubx1kfteAhVj6hvQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
