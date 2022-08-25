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
define( 'DB_NAME',     'inception' );
define( 'DB_USER',     'sgaubert' );
define( 'DB_PASSWORD', 'password' );
define( 'DB_HOST',     'mysql' );
define( 'DB_CHARSET',  'utf8mb4' );


/* MySQL database table prefix. */
$table_prefix = 'wp_';


/* Authentication Unique Keys and Salts. */
/* https://api.wordpress.org/secret-key/1.1/salt/ */
define('AUTH_KEY',         'YdHrhXeP 5.>Rti)FBWBfJ2Q21:HY*d$]3D<i*wsnik`?<Ln4?I-|/WwLBXIKQqd');
define('SECURE_AUTH_KEY',  '(qj;gUeYV0k@c9mPsRI:v-.B)NYfb|x g]ShZLZkEbdfoe#|_0M;&0UYC?SY5B:L');
define('LOGGED_IN_KEY',    'MBTG^75AZyL#&Od>8h3![$5(?~-7gg?eH!`wt~-[-P]nX5cjiMK(E|eY)55j}9I0');
define('NONCE_KEY',        '~7-129f#pT(/Rv_SN%Y]<!v|O^+uk:f=EfSw+7]Ol42m3T?,`rZZT|~3yH+ik<-o');
define('AUTH_SALT',        'I{{ol|`>4[kGlF*ptp-V`{h%_(L@B%A-56t)kR2uN{X&C(RAOqBr`2_k8|D%)U5*');
define('SECURE_AUTH_SALT', '-zkL.r[BOc|8-mgJ.-<Of!-7bO+Qdb l[oN2%-E:j]_=9dxd% y!E*]l(VIE]c=G');
define('LOGGED_IN_SALT',   'VlZ/UzeeL E4O*1(sU34S|t40S/h[!o+%0S|)Pyu+w]+0*t>M1PLk9-n&)ET)?`6');
define('NONCE_SALT',       'Y6>qmQdZuV($39<{ucWJ}n}KO8,lOI-zt@aB?R3#NX|eMCS^sdq8Vyd~7JNZ:++ ');


/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');