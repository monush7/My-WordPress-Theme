<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wscube' );

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
define( 'AUTH_KEY',         't>QSX9Yd[bXhpus8B9vUY[,Nx&Kf>hr@c{yStF[]Ldb:w`Xz8~U5XOcW=t2CaExK' );
define( 'SECURE_AUTH_KEY',  'UgXL,#/S%8+Jt}6U>|L9o543.(PtM:5$A}S]0cYGjw7rZn7re I[T>D+iL?~r7])' );
define( 'LOGGED_IN_KEY',    '2dDC=3.]hYH2#{h8Rq&=e< VZ]e{{cL3gZYan|L,2`c{/3 BM31EY-XcW)B&+gSD' );
define( 'NONCE_KEY',        '7.$*CJ6[jWw?xop6B:fLf?yIU/#O$qIs,kNNjqNm?~t#EHI2)k|blbkZxiCbGI+4' );
define( 'AUTH_SALT',        'm+JH2u)&-%_TAkG?r0H_cS%B=6(CK1-.L>wAOLmSm&Dz;NK,X9RHvuFFr,^X9Z$|' );
define( 'SECURE_AUTH_SALT', '&nPEkX50Q}VBh}rq#B!<VDH:o]6s%.s{0o{~QQ}`ynTh*ZCA}=&4VSwqeYOcM13(' );
define( 'LOGGED_IN_SALT',   ':d/Q,_%<TL8>87 %fk+eQX&-`?[Q;Tw%,AOKG>u9EO-72.6Of.Zu.K3_Lwe`.dZY' );
define( 'NONCE_SALT',       'Bw/Z:Q&GDlG1|_PhTT/FWIdA_.Z]q.ax8}GUB3sP/~&8MpRkJLhl7p1^&}n|rxy8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
