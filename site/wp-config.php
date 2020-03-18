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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'm1ZnSNk++ADHzcrj2ujYdtcwmCXnnsC4Q0X2yxfE58lbitKgNzZLQ82o7HjzMamEimvBn4P7fmwGGzevgEYqtw==');
define('SECURE_AUTH_KEY',  'T7nY7HJNbOw4wtrBj+P0Pv3Aeydneaq+6Dsu+zMgyPeGaW0G2ufvHKHf1nrsNW31d+kcyCvCH4GdtROr3YIt/A==');
define('LOGGED_IN_KEY',    'lIcBwPq2wb5uN2EDJ6Ql0aj+vo3AEvSRkGVxTFMnH2BLGOiWu0EnLWlGNYXGEjqjFX+heOy3bIkqITEpRiy8jw==');
define('NONCE_KEY',        '/wyvzJJFZoUOa83JhOO2vLxgl28oeXBL87iU9qz+e+PFe/RlLMxulGE9C282p9wHUg8Z4Uh4cHo8sLDplFDA0Q==');
define('AUTH_SALT',        'vaWbe7RjN857rTbQlQVBfynXXbTpM42iqI9twlWRSW1xe0cHHerC+fYBi5us2LSn3gJ6Yx6inKOzuj1Z8+0fXw==');
define('SECURE_AUTH_SALT', 'FuxAEmqlTc/tSlhy8D34MqJ9YfpZ4rTACgOQs9Z3RS/pj3B4+mEbVGjaYmKvlS1FKJBsJMCmRiaeTOIl1sgLmQ==');
define('LOGGED_IN_SALT',   '9RsaqoE1wv1fUig6TCZRoNK5j5DDegFsuWTqCWOL6htC3wDAqkEVR9Qr3LQmJWJeQoobPLgZuwLTg56s++WIBA==');
define('NONCE_SALT',       'WpUyvY4GerP46k7AgctaoY1ZGBl145HMRXYDGkFmB2IKhTEcqonPJkZiPhAtCe9CC+IV18LM1pW9lVkS22vwfA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
