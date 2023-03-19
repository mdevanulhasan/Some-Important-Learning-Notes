#===Protect or Block wp-config.php===
<Files wp-config.php>
order allow,deny
deny from all
</Files>

#===WP Config File Important Things===
define('WP_HTTP_BLOCK_EXTERNAL', false);
define('FS_METHOD', 'direct');
define('DISABLE_WP_CRON', true);
define('WP_MEMORY_LIMIT', '256M');
define( 'WP_CACHE', true );
define('WP_ALLOW_REPAIR', true);
require_once(ABSPATH . 'wp-settings.php');
add_filter( 'auto_update_plugin', '__return_false' );
add_filter( 'auto_update_theme', '__return_false' );
define( 'WP_AUTO_UPDATE_CORE', 'major' );
define('WP_DEBUG', false);