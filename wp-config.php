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
define( 'DB_NAME', 'bluecode' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'theresa1' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'tTU_/[CW>Q~CJ|=VzJ`<;WVn)r.q)HFm6hl!jYv)`X.$`AMzf&q)B*Fb!ztK<X0E');
define('SECURE_AUTH_KEY',  '_u/<K&W$Mp2X=w/lNXcdi;lKU-6+5yU-%kgY%-{ ]xXlcAqj|p,3NS:&V}%{)lK@');
define('LOGGED_IN_KEY',    'di{F$YEU]CL|@A;7=_R{|y|8!Zuu;@R;qZxCM]lti3f)1eKh37*xk5tWfTGQX/9U');
define('NONCE_KEY',        '7`WL(+8K&o`Nm<d{D!4v+w+Z7bW_n-+IZ3% si!*v-$c&!E/o;sT?z~ 2o|R9;DA');
define('AUTH_SALT',        '[+L@| ;Q[SjLGwKdqC+rLpG3e?Ux1SEFt|>Q%<>Jxtl,|~hhQeqF(|1@oOeY>^Ik');
define('SECURE_AUTH_SALT', 'FQ*%$B4N3J|7O:;.zOAR&O]d}~I{(+>oQ:5wW ^@9Wy|]-@[r -$#9T/VuYit@%0');
define('LOGGED_IN_SALT',   '+gM/ r-xP<707aa:WOC^O^T@~2vwbK||gAXtwr+rnFQq~pOUhiN-,]G hzb3w[uZ');
define('NONCE_SALT',       'NqCbohAFD_GMXPxC^H_Ez9k#dq~rn%|,p>6TB:+K-34p7ISde`4w]qq$Nt$[;0V@');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
