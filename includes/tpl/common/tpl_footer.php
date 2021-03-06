<?php
/**
 * Common Template - tpl_footer.php
 *
 * this file can be copied to /templates/your_template_dir/pagename<br />
 * example: to override the privacy page<br />
 * make a directory /templates/my_template/privacy<br />
 * copy /templates/templates_defaults/common/tpl_footer.php to /templates/my_template/privacy/tpl_footer.php<br />
 * to override the global settings and turn off the footer un-comment the following line:<br />
 * <br />
 * $flag_disable_footer = true;<br />
 *
 * @package templateSystem
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_footer.php 4821 2006-10-23 10:54:15Z drbyte $
 */
require(DIR_WS_MODULES . zen_get_module_directory('footer.php'));
?>

<?php
if (!isset($flag_disable_footer) || !$flag_disable_footer) {

?>

<!--bof-navigation display -->

<div id="footerblock" class="margin_t maxwidth fl">
<div class="g_t_c">
<?php if (EZPAGES_STATUS_FOOTER == '1' or (EZPAGES_STATUS_FOOTER == '2' and (strstr(EXCLUDE_ADMIN_IP_FOR_MAINTENANCE, $_SERVER['REMOTE_ADDR'])))) { ?>
<?php require($template->get_template_dir('tpl_ezpages_bar_footer.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_ezpages_bar_footer.php'); ?>
<?php } ?>
</div>

<!--eof-navigation display -->

<!--bof-ip address display -->

<!--bof RSS Feed -->



<!-- <div id="RSSFeedLink"><?php echo rss_feed_link(RSS_ICON); ?></div> -->


<!--eof RSS Feed -->

<!-- bof productTags-->
<div class="b g_t_c black">Product Tags: 
<?php
// display productTagList
foreach(range('a', 'z') as $letter) {
    echo '<a class="blue b_" target="_top" href="' . HTTP_SERVER.DIR_WS_CATALOG.'producttags/'.strtoupper($letter).'/" >'.strtoupper($letter).'</a> ';
}
echo '<a class="blue b_" target="_top" href="' . HTTP_SERVER.DIR_WS_CATALOG.'producttags/0-9/" >0-9</a> ';
echo '<a class="blue b_" target="_top" href="' . HTTP_SERVER.DIR_WS_CATALOG.'wishlist/" >WishList</a> ';
?> 
</div>
<!-- bof productTags-->
<!--bof- site copyright display -->
<div class="g_t_c margin_t"><?php echo FOOTER_TEXT_BODY; ?></div>
<!--eof- site copyright display -->

</div>
<?php
} // flag_disable_footer
?>