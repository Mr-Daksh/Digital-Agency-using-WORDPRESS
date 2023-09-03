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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'business' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '%fc? `3_NnAin649mp)Pb!$>[kNxGlSQm9@JHKg8!U,JKB.io/ +zl54ACvRAOKG' );
define( 'SECURE_AUTH_KEY',  '?83Qu>UtA?<a#VmEQ+(Q#6TK}shgjSoT)Y(c&SbHFg%`Xlmj&5!.$!D@YMf|:D0w' );
define( 'LOGGED_IN_KEY',    '!Q6qbi`<j6mNR]qq}[t=:gL sP,B_)qba{#SamN{`^lOIuj{TYms$}MGT|J&1*EO' );
define( 'NONCE_KEY',        'pNb8tYjxvAtz5P~1zWk_$u(_E+`uJ92+h5em#7uW@a+9p)c,P>3y*?&p1MlMUn^9' );
define( 'AUTH_SALT',        ':ygl8cm=9{C~e6;{(z%8UbV/s-5xb}7l OAH!OF^d~pyrfQ7/_hzTd~Elhp4n`->' );
define( 'SECURE_AUTH_SALT', 'D&(oY@aM3]<+x(<.aVM{^=U{0g] QFte)@T.zk[XHzQJoChh%J@9@xZX;P-DuE_*' );
define( 'LOGGED_IN_SALT',   'r];X5}+zFVd9yW<7L6*6Kbg 2DJ~PM2EmrZc7p39:czC)0]MuQ;j5`a|J_eSHCYE' );
define( 'NONCE_SALT',       'Gr,1XM/^VZfDOgza(ys:.ko9svW+Z P!`o;xa:6t$L<}P#gp}UB;k{P]=|]:@ b^' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
