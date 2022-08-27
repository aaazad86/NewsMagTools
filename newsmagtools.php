/**
 * Plugin Name
 *
 * @package           Primary Release @1.0.1
 * @author            Al Amin Azad
 * @copyright         2022 Bondhon IT
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       News Magazine Tools
 * Plugin URI:        https://bondhon.net/plugin-name
 * Description:       Various tool for anyonline newspaper.
 * Version:           1.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Al Amin Azad
 * Author URI:        https://bondhon.net
 * Text Domain:       News-Mag-Tools
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://example.com/my-plugin/
 */


/**
 * Activate the plugin.
 */
function newsmagtools_activate() { 
    // Trigger our function that registers the custom post type plugin.
    newsmagtools_setup_post_type(); 
    // Clear the permalinks after the post type has been registered.
    flush_rewrite_rules(); 
}
register_activation_hook( __FILE__, 'newsmagtools_activate' );


/**
 * Deactivation hook.
 */
function newsmagtools_deactivate() {
    // Unregister the post type, so the rules are no longer in memory.
    unregister_post_type( 'book' );
    // Clear the permalinks to remove our post type's rules from the database.
    flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'newsmagtools_deactivate' );


register_uninstall_hook(    __FILE__, 'WCM_Setup_Demo_on_uninstall' );
