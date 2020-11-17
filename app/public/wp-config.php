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
define('AUTH_KEY',         '0C9+q6A0r3Hypo4IylAsr2Jar1sxctajf81graHDR6MKMlU23Rim6cLwGAYrirevDgzYaHEK42OgKcZlECPnBA==');
define('SECURE_AUTH_KEY',  'GxiZjHn3w5QyV6fSgiFOWXstgIPSVRt29Ah9DTa4GRL6qO49ff4vw8FjT67MYBHxa4YF9VeydRj0vqQRD/H93w==');
define('LOGGED_IN_KEY',    '+jBLmkh4cvsitzUahj10brNfioBaB1XaGEB+2D37CeUyEHzaSdxpJoK+0MWDd/gIG55veZNjJREf2/7NPrs8iA==');
define('NONCE_KEY',        'n3+qecMYInSKQyoBiyssOA3lq+oTVPfyYODxuDZSHKouXCgvT1yCn2Kw6NdepHx2FA4lGR2fFjOZwVI2z44lpg==');
define('AUTH_SALT',        'TbwvaDBZ7Syg8QxeeA/LDKkjWotdYfWKdNpbo3fPQ+fS1ihwlMo+mWnkKpHFLhASh9/UzjrATNzX8uXh6fcxfQ==');
define('SECURE_AUTH_SALT', 'RG6nTgkaQAtCJWG+CJaB09+Kxf7KmzjO8fX3MPJGyESs7hQr4dDz+jbhE5YQBKxVs7kv3uyNs77TCgeO+c95uw==');
define('LOGGED_IN_SALT',   'wyAX223Vyf11/Av6U8uQEkz1Vm1UJtJVhoTxeGZ8a94cXTGX+6XMWfG+98jCXTwt0X+DeQzTF5/9rSj0llKKwQ==');
define('NONCE_SALT',       'uTFgi0gQ+xTTDeTso1HwHCR5H25mSVtvNErS4y2f73HgWEGiPe2H+eyIs8nCTZW6tGn7xM0qJCOJfrbWEbMt9A==');

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
