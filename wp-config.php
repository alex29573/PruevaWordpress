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
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '2a2a`Szbp8fA^dc|5FkW#]MrY?Z%F0} K$k18GZF??<ZUliv3ISrL2795`R]:{PB' );
define( 'SECURE_AUTH_KEY',  'lkFMbi^!mczpM=;XuyC(Dczg7n$XiQbvXa#S2m.Me>P|@<&.FVTY|vGwAf(Ij(GC' );
define( 'LOGGED_IN_KEY',    'Xj,5~AQ}`78FY&pI;.$;^QYsWJ[-Oz]C@Cr$JBQfAZsKyXF|KZs;pKfA;~08&h~7' );
define( 'NONCE_KEY',        '1`wYy^cY%h{~f@IEru~V0Z_cZ9J^?0],7`]AOFFpI9sb<tYB1uYVS4TaCMHaY967' );
define( 'AUTH_SALT',        'd_7iuj/Q)o9V/L>a`HqB(DFjtSP83yHe`<)=WPg12fkt!(lAG8]aVU`q`rT2=%UE' );
define( 'SECURE_AUTH_SALT', 'L//Q>t~3Z4Oky1 q`){F/hZqO;GnlW*R/?:ca3Ekifkr{pDdSg>!mppGeX&_.G(S' );
define( 'LOGGED_IN_SALT',   'H<SWw7xT|`G>,4$>?HZtk-0318(O*nuop+k>X@5*%^E/b0d&8akw)FfXRDlc2Gs(' );
define( 'NONCE_SALT',       'KQPN(}FbV))(c6(O8)zn:Q++}|Z?_9V=^$s>~UcyanrpQA03$ofWG5V}3JT$Jw.z' );

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
