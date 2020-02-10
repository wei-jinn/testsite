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
define( 'DB_NAME', 'wordpress_testsite' );

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
define( 'AUTH_KEY',         ',smY:6xyE.yG)?-jk4vU5|<Wm[l:Y~mO]N3kb>X=w[;,$Gt*N`+qD,`Y)z01]U%R' );
define( 'SECURE_AUTH_KEY',  '5!G#M]$ea+mNWh9XsU%O.qzzz.c+Bi|P31L?j3yK!La`96O5}wyBp>0Q<R9|HT-+' );
define( 'LOGGED_IN_KEY',    ']<$@ I}1z3kP+M@/cI},~/_-Bg&EXc3]3/.}3c[U~$G$T}} %j=})ZZ.C1#-H;-P' );
define( 'NONCE_KEY',        'btb&%MWERk=rn; 5_yug/Ksx*wa 6mnq+;3v@7t(f/,CIf-Zbn(g*P^A$M_&E+N]' );
define( 'AUTH_SALT',        '|yX78 hqd51{^mJV8aXI([{=+;mkpr(My.m9JMyP~3$#|FEL >1|+026QLU sQI4' );
define( 'SECURE_AUTH_SALT', 'pT0{3q4Z;8:%f3.rVl17oq2,~A2t]?5s[/m7]x,@wW,8W}UT{87*R1&(f!!2To>F' );
define( 'LOGGED_IN_SALT',   'os$Hp%IJ*`!?5iDhDxZ9&Rm_+k[_Y<-REyeO2:Msn7JcNDS^C+p4.`]I:v8xeT8V' );
define( 'NONCE_SALT',       '!5,%uL24NmgEpr6JA$(@*u3#$k_s0otw>Sfk}9hP.Z6w(.:l3VsN+U<b}yOr|Q:f' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'testsite_';

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
