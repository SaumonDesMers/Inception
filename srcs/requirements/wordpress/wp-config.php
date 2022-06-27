<?php
/**
 * Custom WordPress configurations on "wp-config.php" file.
 *
 * This file has the following configurations: MySQL settings, Table Prefix, Secret Keys, WordPress Language, ABSPATH and more.
 * For more information visit {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} Codex page.
 * Created using {@link http://generatewp.com/wp-config/ wp-config.php File Generator} on GenerateWP.com.
 *
 * @package WordPress
 * @generator GenerateWP.com
 */


/* MySQL settings */
define( 'DB_NAME',     'database_name_here' );
define( 'DB_USER',     'username_here' );
define( 'DB_PASSWORD', 'password_here' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );


/* MySQL database table prefix. */
$table_prefix = 'wp_';


/* Authentication Unique Keys and Salts. */
/* https://api.wordpress.org/secret-key/1.1/salt/ */
define('AUTH_KEY',         '[Chh8(vF9#{?l>+5q|~M4x>M,HMi/Cn%24adPurHx(`y9;Q|*hM5fV=Y^;tiYfEX');
define('SECURE_AUTH_KEY',  '@Poz=c*`4G-,H7<7m^$7A7/<Qx:dAEQ?Y LI>d?~x<|C)RdM$pazo0rJ8/7K*g-.');
define('LOGGED_IN_KEY',    'g-O,bUP=} n6RPgi-sEi@SFLS@+@F>t]Us1N^brHf+_/#=Wnc&~q=gjz}}/$l:9F');
define('NONCE_KEY',        'CJfC0A&#2ye|P-5Bxl@;VEPI+2JAT>(I8Hkk5ZH- *.%K#6TdS|-b:e7~hAB|X{5');
define('AUTH_SALT',        'Jux`e:PV=|:u$<,c2-pv[f$Nh;rR]oW~jKea4gjw5_GK~c,a-2i-(wWLu4mDSviB');
define('SECURE_AUTH_SALT', 'Z:oXP+>/|KsA]1vp@I[Op4^x3mMET%m^/wGEJ6^=8f4lN&fn,FVgLh<_G)$=We0%');
define('LOGGED_IN_SALT',   '1Myt@]9{FZ>PAEZ|<h>uOyt<|-fE^M#IO<$HRMg-:Y8Nfv)s|5[N:mpib0w<]$O7');
define('NONCE_SALT',       '{T}q=]&(#L-[EhJsMH+_3xHVsc{Kk2Gag!k%m<]%24J)y3zm=ap@qtG)-9btm&Ph');


/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');