<?php
/**
 * Module Template
 *
 * Template used to render attribute display/input fields
 *
 * @package templateSystem
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_modules_attributes.php 3208 2006-03-19 16:48:57Z birdbrain $
 */
?>
<ul id="attach" class="margin_t">
<?php if ($zv_display_select_option > 0) { ?>
<h4 class="pad_3  g_t_c   font_normal2"><?php echo TEXT_PRODUCT_OPTIONS; ?></h4>
<?php } // show please select unless all are readonly ?>

<?php
    $options_nameNum = count($options_name);
    for($i=0;$i < $options_nameNum;$i++) {
?>
		<?php
      if ($options_comment[$i] != '' and $options_comment_position[$i] == '0') {
    ?>
      <br class="clear"/>
      <?php if ($options_name[$i] != 'Features'){ ?>
	  
	  <!-- 以下 修改 选项说明 样式-->
	  
	    <h4 class="pad_5   g_t_c   font_normal2"><?php echo $options_comment[$i]; ?></h4>
	    <?php } ?>
    <?php
      }
    ?>

		<div class="pad_5 big   no_border_t">
		<?php if ($options_name[$i] != 'Features'){ ?>
		<!-- 以下为定制玩偶 选项名宽度143px 特殊属性名 宽度修改，原为80PX。。上面一句 改为 PAD_5 增加选项上下间距 -->
		
			<div style="width: 143px; text-align:right;" class="fl"><?php echo $options_name[$i]; ?>&nbsp;&nbsp;&nbsp;</div>
		<?php } ?>
	  <div class="back"><?php echo "\n" . $options_menu[$i]; ?></div>
		</div>
		<?php if ($options_comment[$i] != '' and $options_comment_position[$i] == '1') { ?>
		    <div class="ProductInfoComments"><?php echo $options_comment[$i]; ?></div>
		<?php } ?>
		<?php
		/*if ($options_attributes_image[$i] != '') {
		    echo $options_attributes_image[$i]; 
		}*/
		?>
		<?php
    }
?>


<?php
  if ($show_onetime_charges_description == 'true') {
?>
    <div class="wrapperAttribsOneTime"><?php echo TEXT_ONETIME_CHARGE_SYMBOL . TEXT_ONETIME_CHARGE_DESCRIPTION; ?></div>
<?php } ?>


<?php
  if ($show_attributes_qty_prices_description == 'true') {
?>
    <div><?php echo zen_image(DIR_WS_TEMPLATE_ICONS . 'icon_status_green.gif', TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK, 10, 10) . '&nbsp;' . '<a href="javascript:popupWindowPrice(\'' . zen_href_link(FILENAME_POPUP_ATTRIBUTES_QTY_PRICES, 'products_id=' . $_GET['products_id'] . '&products_tax_class_id=' . $products_tax_class_id) . '\')">' . TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK . '</a>'; ?></div>
<?php } ?>
</ul>