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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         '/uzc+DIsnZ/VNr+FN1G6cOPjqbnTuq3xpzgJ+zfrQs2Tw6++V31BX2IjGb1Lp29bO5QuIKb0xz8MbNAWwtX/Cw==');
define('SECURE_AUTH_KEY',  '0ssvjM2M4XVekvDY9plONL/QNaJzL8ACF0wP02j6WWOfAXFqB+XovBsmGHaHmY4azAatY4Dl1AiMasFyBcdtLQ==');
define('LOGGED_IN_KEY',    '1aZUPwvMB6IjxTV8XD3XqWYEb5dTsOPZDJvJQsSYQ3AI8+3Mt2iAzcYwPtLMGRHWAs9pegRErFqW1hpFQEfU+w==');
define('NONCE_KEY',        'tEYC+G5KADGUij4dr/xRm8CTX4MAYuidGNi1wpdx+xka7Q+uf1lVxxEKMfkcRZDKMayKGnVYV0vjyAc3Vjvn0Q==');
define('AUTH_SALT',        'cV8KqAY3JyfG0aBY/ezNIKviCIbTDBDvzu11JsSJTB7AQ9KwGJsDUzFqXb+ZCERDnfEz/GA5iOFu1O9W3uhHcg==');
define('SECURE_AUTH_SALT', 'KhSqleTMFatKBMBny3hrvvz7kGOZvcGyMbrSECx8j3INmlHVgQKZJhHgrEfS2MNtYX6r4ywRdNqId5FXQzMh3Q==');
define('LOGGED_IN_SALT',   'GsLnaEQDC9yjvmb8/Ye+Dd7UwKy98qj+MnGFSkupb7kS7dBgalj8u/OeaaoBQQSPW89ORjaop/rz2Byr1IMc+Q==');
define('NONCE_SALT',       'tq1QTSROFb8ODquFlR7sDDZ7TJNKR9xqaCBRHXahp2nMXYA3Dq/ph+F7Kiyy5pj2LkyBafIexADyFsCX2npDPg==');

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
