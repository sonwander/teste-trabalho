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
define( 'DB_NAME', 'wandso63_padaria' );

/** MySQL database username */
define( 'DB_USER', 'wandso63_padaria' );

/** MySQL database password */
define( 'DB_PASSWORD', '6@@37t4S6p' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'n3ftdbjxbthiuz9qzblc5ur4vcs8ogy0cq2nztvqgruburavxow3vz2otnwlacsr' );
define( 'SECURE_AUTH_KEY',  '5esxbxgc0g9c8q6iaouskfbbhk0r8c5znu1lktboow3nt48jpxvpceappz2hi62o' );
define( 'LOGGED_IN_KEY',    'zsetxezvjor7lj1yovmval5klpwfkktlztn0fgbsp3j6mm9ix4hjbpklkhcyghq6' );
define( 'NONCE_KEY',        'agcdcvhxsm8ojdrbtznud4wodryfo2bwlrq9rk2ibzcrjrrz1cambeopgcrrqqpf' );
define( 'AUTH_SALT',        'cjv2bksxpwymvon63dihkjaoscmlryeuwi3szl6oiyiyhfj8g1wry3s52dprmomv' );
define( 'SECURE_AUTH_SALT', 'nsks0hynovk7sjlbv9ysflrcfdugu3mk7g47zxobslxhdydzv0abgfcayns0tqiz' );
define( 'LOGGED_IN_SALT',   'uuoamlgqixycppvh81ia8mrfrg51ihwwzavvszb1thpnzhbmtxvu6ekdrsy9nmle' );
define( 'NONCE_SALT',       'eifoahv1ts1vysrjqmtghet3scojmwpqhltxvofn4hecnq8xjcwkpuv2pbckj0xp' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pada_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
