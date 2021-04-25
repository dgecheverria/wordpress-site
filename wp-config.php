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
define( 'DB_NAME', 'wordpress-site' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'LiE8bn8fIl@c[}d8IS=IJ8RX~Q];%mTIQTy_/!HmT[+A/5}hJe@b>=F(W|24w5Ao' );
define( 'SECURE_AUTH_KEY',  'NTDH!B+H7]HMvj:Q KsRNRZ!sq0*En2T{9pSWVoq 0c8++H5(-mY)YQJC~@2N`g%' );
define( 'LOGGED_IN_KEY',    '<!4@CK?g^!a^k(BMUSLQV~STS8fr]_V!w+^=v7bJGFqY/=S^;lS3[AYGxdp2yvtf' );
define( 'NONCE_KEY',        'vcG|=&uM$H91N}.XeO5ZuP>f8h5cxl&)XWfmQgrME[et:c;ydbXh/2`$)6gP]2,q' );
define( 'AUTH_SALT',        'K=ss{#]5e55%k:;O8VfhQ4h._`*rB{KT!ed+L|gI~J6vU<c)Fo#m~^rN:L2m_HHW' );
define( 'SECURE_AUTH_SALT', 'y]7LN&% P`(Cg|ILsb*U+&j:xCCXU(DfQU@s7;H+`bwZ=GV>1%DAL-09T@i>[$wQ' );
define( 'LOGGED_IN_SALT',   'VMT7[RkSglh(;!/LbUfV!,^,6h*Npzw?r62pe{G{vBx@]^$Y%$Zg@^PQ92UpOF24' );
define( 'NONCE_SALT',       '{61Cur62o1Z6(9#Vq/d9Y,,nobk$cB-{YJ`2T|5USW1f_PZ[)0r`#7Sv@R$&f:^!' );

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
