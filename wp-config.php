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
define('AUTH_KEY',         'X+HVCONtYu+RWG4ZGN57XQCuG1gCxaiRbT/Hado556Yk9tGeZ87OusgtMFMKwvJ74E+lH1DbFe2DN2O2DRb6fw==');
define('SECURE_AUTH_KEY',  'KEJ2LxCQLiQ32QqZXgYTBP740Rfeq+34hpIAaF1rMoy0+ss7zlgVwoAwTd2vptyudobRdUVl7hHt3wxaW3/81A==');
define('LOGGED_IN_KEY',    '1NDK9gSDCkWqhMW/3kL7fi5vlknxsX6sVSgffaMWtgIogFpiyxo3+ZgljSpUMNRwajaMI2jLdcxfM1iUWq2Xrw==');
define('NONCE_KEY',        'HgHP+TdpAamftQI4GOsaUnrXdcqTy4TywB4b8D5BZOmQ4qKSrZLiV1oeuaueQtTSgazU4m0TWnq+mRhtZzOlUg==');
define('AUTH_SALT',        'R64aUfeEsjYG5+v44oe0ghPCEOV04W9qZdMAuNnuDVrbxqB7vPXiHHGFhCvVUWC1y9BVaPukXS4ZefIYl/LIIw==');
define('SECURE_AUTH_SALT', 'EwlDJjAc3aggOT1zZjP0Chrvi8mBwUsG0DQGHHT4wQHUEmnVLale7I/ze3Vgj5PBe6VbpS5T/k+hDBZBSzmQhQ==');
define('LOGGED_IN_SALT',   'p+OJZnkA09OTTl6q/i25buFIkudi3DFIlFvkbu65cuSS23vVfXEMwNvLqOqse4zkkydR8bvqoNi7JdEjdrQzVg==');
define('NONCE_SALT',       'qF3PbGmHOkQKS9D1lH/9BT6NRc/v4762UnNG1v1SAvhKujrFBWoz98NU+kQOjqDSihIooQfWF/muCoDp1I7TZA==');

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
