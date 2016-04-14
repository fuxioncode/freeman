<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'qdm16180073_db');

/** MySQL数据库用户名 */
define('DB_USER', 'qdm16180073');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'phf936300');

/** MySQL主机 */
define('DB_HOST', 'qdm16180073.my3w.com');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}NY_7}>W/`>Q#C|(O:hiQ|x?AGFl),FxEI<FY Jj:T+ gNYYU2&0io-*j[q(zKV0');
define('SECURE_AUTH_KEY',  'W}ia:k;#ZkDA9fs/yE:CWg9e_t+~8o9nv!PB Gf1w+{HPg~udJymU|!Z3_m0^76W');
define('LOGGED_IN_KEY',    'Aw/zK`v,iG6wdp@k8eL2u!;vX7CGEdY`036z(1{ut:G82G!Q&3u.xb2=UdT?VZ,1');
define('NONCE_KEY',        'V_gKe#/[`VjEM+kn$I74mj>^>j?6w)]lWamK6wj4VbPxNlI3K_^![36E.:R4Td#/');
define('AUTH_SALT',        '[GAO9|>5@pi_Mh f~/mhEkoZ%r2l_&VEsE$.E7FQ6%c2{sO&p-PEXoX4:oDrJ9|=');
define('SECURE_AUTH_SALT', 'x>w6)(1s+-ca7bp^f?(7Nm]_>m4.]~D]D%q+f|t^s8 }$#1NnpwczgThEsDRKD&J');
define('LOGGED_IN_SALT',   'x9`e2|v8NTRZ&+wfv[*=J;l%-B|y)o;n]LSKnfb&cpkF2^2q@r*(dugmJpA-M+t~');
define('NONCE_SALT',       'LRQ@|UqUv1>6q;vvjhwkAj~+l3<WVV|`|J|e?R|E9yOGY7ig;H-b;=%._iVBmmob');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
