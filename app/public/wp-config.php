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
define('AUTH_KEY',         't7DdjLW9Bmg3GeCIXyP7Nu0XMozMihz2w+nGkEAFu/Rekt4nnLOwKyQf3HMkd3CWGXHI0zvuR9QbbiCbp7b9MQ==');
define('SECURE_AUTH_KEY',  'mdM/Ky7Q705wtPCkQVbBxbabfQk+8/ruKRko3rDQUR9XDm5ZO34MGMCls6M243snx2hc/2uhVYpYzyMIC8Bg4Q==');
define('LOGGED_IN_KEY',    'oQdukLPXw6/jbMuBCgSu0C9a3fC2I8/4YAPktpamwTcOFsYQuk21wBCvW8zbSk0xADkTa8cGzYmmUKdUzTU5Qg==');
define('NONCE_KEY',        'FlAc70O9C2OMIcIVrAsQotkHllkhbMBouYgWujEd/X6/Rw1rWIBGyZUYgSYJxh7S+XMcUhnYZxFmVV2tsCyQvw==');
define('AUTH_SALT',        'JvEYu19krvdC/O2Uu75DNGneO9208ZradnXUFek4ni0J74TZt1YKTUci8xKCd5kwTGttS7ir2jwgt2RXrXp8DQ==');
define('SECURE_AUTH_SALT', 'RkX3nGco5jDiEZp2MKJQgdwS+khTxUHZaLbxmKwmp+u7SbcIy7DM86RvETzB/CSZ8S7O6e/ju3+pQloDSuITTw==');
define('LOGGED_IN_SALT',   '3oXilVYCQNDbbXX3G+XQy25Sz16qQORO9ePg+DwC8JSelUTB96sIEdbWJg5Bbeogr1DNEv4sAUCaKDhFSYmICA==');
define('NONCE_SALT',       '5CmC8NZS3oOADkQ9cVFuPW38Ydu093VdseTz9hWWpiVcxJsJ2cRfZWx0+cUTl3malxdw8rMxBMtMEJAxQISdhg==');

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
