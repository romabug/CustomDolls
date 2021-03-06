<?php
/**
 * Common Template - tpl_tabular_display.php
 *
 * This file is used for generating tabular output where needed, based on the supplied array of table-cell contents.
 *
 * @package templateSystem
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_tabular_display.php 3957 2006-07-13 07:27:06Z drbyte $
 */

//print_r($list_box_contents);

?>
<div id="list_bg_big_img">
<ul>
<?php
  $list_box_contentsNum = count($list_box_contents);
  for($row=0; $row<$list_box_contentsNum; $row++) {
    if(isset($_GET['keyword'])){
	    $list_box_contents_keywordPos[$row] = stripos($list_box_contents[$row]['products_name'],$_GET['keyword']);
	    if (is_int($list_box_contents_keywordPos[$row])) {
	      $list_box_contents_name[$row] = str_ireplace($_GET['keyword'],'<span class="red">'.$_GET['keyword'].'</span>',$list_box_contents[$row]['products_name']);
	    }else{
	      $list_box_contents_name[$row] = $list_box_contents[$row]['products_name'];
	    } 
	  }else {
	    $list_box_contents_name[$row] = $list_box_contents[$row]['products_name'];
	  }
?>
<li>
<div><ul><li class="relative">
<?php if($list_box_contents[$row]['products_quantity'] == 0) { ?>
	<span class="sold_out_b"></span>
<?php } ?>
<?php echo $list_box_contents[$row]['product_is_sale_item'].'<a href="' . zen_href_link(zen_get_info_page($list_box_contents[$row]['products_id']), 'cPath=' .zen_get_generated_category_path_rev($_GET['cPath']). '&products_id=' . $list_box_contents[$row]['products_id']) . '" class="ih" >' . zen_image_OLD(DIR_WS_IMAGES .substr_replace($list_box_contents[$row]['products_image'],'l/',0,2), $list_box_contents[$row]['products_name'], 228, 228, 'class=""') . '</a>'?>
</li>
<p>
<?php echo '<a href="' . zen_href_link(zen_get_info_page($list_box_contents[$row]['products_id']), 'cPath=' .zen_get_generated_category_path_rev($_GET['cPath']). '&products_id=' . $list_box_contents[$row]['products_id']) . '" >'.$list_box_contents_name[$row]. '</a><br/><br/>';
			if($list_box_contents[$row]['product_is_wholesale']){
        echo '<span class="sale_item_b"></span>';
			}
      echo $list_box_contents[$row]['product_is_always_free_shipping'];?>
</p>
<div class="black line_120 margin_t">
<strong>Our Price: </strong>
<?php if ($list_box_contents[$row]['products_quantity'] > 0) {
			echo '<a href="' . zen_href_link(zen_get_info_page($list_box_contents[$row]['products_id']), 'cPath=' .zen_get_generated_category_path_rev($_GET['cPath']). '&products_id=' . $list_box_contents[$row]['products_id'].'&action=buy_now') . '" >';
		  echo '<span class="car_price">';
      echo ($list_box_contents[$row]['products_price'] == 0 ? $currencies->display_price($list_box_contents[$row]['products_price_sample'],zen_get_tax_rate($products_tax_class_id)): $currencies->display_price($list_box_contents[$row]['products_price'],zen_get_tax_rate($products_tax_class_id)));
	    echo '</span>';
	    echo '</a>';
    }else{
	    echo '<span">';
      echo ($list_box_contents[$row]['products_price'] == 0 ? $currencies->display_price($list_box_contents[$row]['products_price_sample'],zen_get_tax_rate($products_tax_class_id)): $currencies->display_price($list_box_contents[$row]['products_price'],zen_get_tax_rate($products_tax_class_id)));
	    echo '</span>';
    }
    ?>
	
<?php  /* 取消商店价格   <div class="margin_t">Compare at: <?php echo $list_box_contents[$row]['products_price_retail'];?></div>  */  ?>



 
</div>
</ul></div>
</li>
<?php
  }
?>
</ul>
</div>
<br class="clear"  />
