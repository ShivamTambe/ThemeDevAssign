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
define( 'DB_NAME', 'theme_dev_assign' );

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
define( 'AUTH_KEY',         'Z8*bieDdgH%VNr8dd&^gqLkM7*;]`[yb~u; jLkKj!%,$UbAjgMMxCV4-}} K+iw' );
define( 'SECURE_AUTH_KEY',  '6];gIQ$JWb)7~N;)S=r^iD6V!{cP?I#=4W904+Pi.T(lSW>vop86)&Hep{2p4$bd' );
define( 'LOGGED_IN_KEY',    'Z7jsF~(VN>BypnB h{9[G$}y  GXk7b(13;N#*rHJmW3z/^ux~OQM<){9Bx]:;Fa' );
define( 'NONCE_KEY',        'G51QD~G4a7990Dn:^c?Z30:wcKhj(%e5i^%PkV,/HQZy(|aQboNg:c=%Pe4$zErz' );
define( 'AUTH_SALT',        '*7U!{lEb=p=*>f7w0f?j.Ci3n2fU)B^Pz6#CR+=N-]yj7YOpvyH`OwaN`2%tAOs]' );
define( 'SECURE_AUTH_SALT', 'qb1BCfPpW~ccT,$XYK(4}_NT83w_KdAYO&)7-;Opk#^^kNMY7P[%_5oTE~Pm.gdi' );
define( 'LOGGED_IN_SALT',   'FtYiAiWc3>TOz|!I*YUlKqq1`U_*(5rT~fmDWn, ZI%O_[:9.o:6R[nsbMKKlA#:' );
define( 'NONCE_SALT',       ',se8aSj;L;#U;TRO3![H8/nL8o&b@Vc5tc^:mv-O^J]+yAc5SLiUVW~nV;<gX>qa' );

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
