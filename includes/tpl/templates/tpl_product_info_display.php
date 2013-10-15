<?php
/**
 * Page Template
 *
 * Loaded automatically by index.php?main_page=product_info.<br />
 * Displays details of a typical product
 *
 * @package templateSystem
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_product_info_display.php 5369 2006-12-23 10:55:52Z drbyte $
 */
 require(DIR_WS_MODULES . '/debug_blocks/product_info_prices.php');
 // 出入METATAGS调用关键字
 
 
 
?>
<?php
// only display when more than 1
  if ($products_found_count > 1) {
?>
<style type="text/css">
<!--
.STYLE9 {
	color: #000000;
	font-weight: bold;
}
.STYLE10 {color: #FF0000}
.STYLE12 {font-weight: bold; font-size: 14px;}
.STYLE14 {color: #B1031E}
-->
</style>


<div class="fr"><a href="<?php echo zen_href_link(FILENAME_DEFAULT, 'cPath='. zen_get_products_category_id($_GET['products_id']));?>" / class="b_" title="<?php echo zen_get_category_name(zen_get_products_category_id($_GET['products_id']),$_SESSION['languages_id']);?>">other dolls in the list</a>&nbsp;<span id="recent_flash_smallPage" class="product_title">
  <?php //echo (PREV_NEXT_PRODUCT); ?>
  <?php //echo ($position+1 . "/" . $counter); ?>
  </span></div>
<?php
  }
?>
<?php if ($messageStack->size('product_info') > 0) echo $messageStack->output('product_info'); ?>
<!--bof Prev/Next top position -->
<?php if (PRODUCT_INFO_PREVIOUS_NEXT == 1 or PRODUCT_INFO_PREVIOUS_NEXT == 3) { ?>
<?php
/**
 * display the product previous/next helper
 */
require($template->get_template_dir('tpl_product_flash_page.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_product_flash_page.php');


 ?>
<?php } ?>
<!--eof Prev/Next top position-->
<br class="clear" />
<div class="margin_t allborder fl" style="padding: 2px 0px; width:950px;">
  <div class="fl for_gray_bg" style="width:950px;">
    <!--bof Main Product Image -->
    <?php
  if (zen_not_null($products_image)) {
  ?>
    <?php
/**
 * display the main product image
 */
   require($template->get_template_dir('tpl_modules_main_product_image.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_modules_main_product_image.php'); ?>
    <?php
  }
?>
    <!--eof Main Product Image-->
    <div id="product_info_con" class="fr">
          <!--bof Form start-->
      <?php echo zen_draw_form('cart_quantity_frm', zen_href_link(zen_get_info_page($_GET['products_id']), zen_get_all_get_params(array('action')) . 'action=add_product'), 'post', 'enctype="multipart/form-data"') . "\n"; ?>
      <!--eof Form start-->
      <?php echo zen_draw_hidden_field('products_id',$_GET['products_id']); ?>
      <div class="fl pad_product line_180">
        <!--bof Product Name-->
        <h1 style="font-size: 16px;"><?php echo $products_name; ?></h1>
        <!--eof Product Name-->
        <ul class="pad_10px">
          <li style=" font-size:14px; font-weight:bold">Design No.  <?php echo $products_model; ?></li>
		  <br>
		  

		  
 
		  
		  
          <div class="hr_d"></div>
        <!--bof Product Price block -->
     
	 
<?php	/*    <li class="big margin_t"> Store Price: <del> 
		
          <?php   以下取消显示商店价格
		  
						// base price
						  if ($show_onetime_charges_description == 'true') {
						    $one_time = '<span >' . TEXT_ONETIME_CHARGE_SYMBOL . TEXT_ONETIME_CHARGE_DESCRIPTION . '</span><br />';
						  } else {
						    $one_time = '';
						  }
						  echo $one_time . ((zen_has_product_attributes_values((int)$_GET['products_id']) and $flag_show_product_info_starting_at == 1) ? TEXT_BASE_PRICE : '') . $currencies->display_price(zen_get_products_retail_price((int)$_GET['products_id']),zen_get_tax_rate($product_info->fields['products_tax_class_id']));
					 	  ?>
					 
           </del> </li>    */ ?>
		  
		  
		  
		  
        <h3 class="relative">Online Price:<div id="t_p"><ul><li><a class="one u b_" href="javascript:void(0)"> <?php echo $currencies->display_symbol_left($_SESSION['currency']);?><!--[if IE 7]><!--></a><!--<![endif]--><!--[if lte IE 6]><table><tr><td><![endif]-->
        
        <div>
				 
				<?php
					reset($currencies->currencies);
				 while (list($key, $value) = each($currencies->currencies)) { 
					if($key != $_SESSION['currency']){	?>
        	 <a class="b_ big_" href="<?php echo $_SERVER['REQUEST_URI'];?>?currency=<?php echo $key; ?>"><?php echo $value['symbol_left']; ?></a>
        	 <?php }} ?>
        	 <!--[if lte IE 6.5]><IFRAME src="javascript:void(0)"></IFRAME><![endif]--></div>
        <!--[if lte IE 6]></td></tr></table></a><![endif]--></li></ul></div>
          <span id="products_price_unit" class="red" style="padding-left:85px; "><?php echo number_format((zen_get_products_base_price((int)$_GET['products_id']) == 0 ? zen_get_products_sample_price((int)$_GET['products_id']) : zen_get_products_base_price((int)$_GET['products_id'])), 2, '.', '');?></span></h3>
        <!--eof Product Price block -->
		
		<br>
	
				   <li><?php echo '<a href="javascript:popupWindow(\'' . zen_href_link(FILENAME_POPUP_ASK_A_QUESTION, 'products_id='.$_GET['products_id']) . '\')">'.zen_image($template->get_template_dir('ask.gif', DIR_WS_TEMPLATE, $current_page_base,'images/button'). '/' . 'ask.gif','Ask Questions About This Item','','',' class="relative"').'</a>';?>&nbsp;&nbsp;
				   
				   
				             <?php echo '<a href="'.zen_href_link(FILENAME_TELL_A_FRIEND, 'products_id='.$_GET['products_id']). '">'.zen_image($template->get_template_dir('tell_a_friends.gif', DIR_WS_TEMPLATE, $current_page_base,'images/button'). '/' . 'tell_a_friends.gif','Tell A Friends','','',' class="relative"').'</a>';?> 
		  
				   
				   
				   </li>
		
		
		
        <!--bof free ship icon  -->
        <?php if(zen_get_product_is_always_free_shipping((int)$_GET['products_id'])) { ?>
             <li>This item is: <img border="0" class="g_t_m" src="includes/templates/<?php echo $template_dir; ?>/images/free.gif"/></li>
        <?php }else{
            echo zen_get_freeshipping_same_products($products_name);
        }
        	?>
        <!--eof free ship icon  -->
        </ul>
        
        <!--bof Quantity Discounts table -->
				<?php
				  if ($products_discount_type != 0 || $categories_discount_type != 0) { ?>
				<?php
				/**
				 * display the products quantity discount
				 */
				 require($template->get_template_dir('tpl_modules_products_quantity_discounts.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_modules_products_quantity_discounts.php'); ?>
				<?php
				  }
				?>
				<!--eof Quantity Discounts table -->
        <!--bof Attributes Module -->
				<?php
          if ($pr_attr->fields['total'] > 0) {
        ?>
        <?php
        /**
         * display the product atributes
         */
          require($template->get_template_dir('/tpl_modules_attributes.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_modules_attributes.php'); ?>
        <?php
          }
        ?>
        <!--eof Attributes   Module -->
        
      </div>
   
      <div class="minframe fr pad_top">
        <ul class="white_bg allborder pad_10px" id="product_price">
          <li><span id="products_price_all" class="red b big"><?php echo zen_get_products_display_final_price((int)$_GET['products_id']);?></span>&nbsp;<span id="shipping_rule">+ 
          Shipping Cost </span></li>
        </ul>
        <a name="show"></a>
        <ul class="g_t_c product_ul_h">
          <?php if ($products_quantity > 0){ ?>
          <strong>Quantity: </strong>
          <input type="text" name="cart_quantity" id="cart_quantity" value="<?php echo $products_quantity_order_min;?>" maxlength="6" style="width:30px"  onkeyup="value=value.replace(/[^\d]/g,'');changePrice();" onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''));changePrice();"/> <strong>Unit(s)</strong>
          <?php }else{ ?>
          <img border="0" src="includes/templates/<?php echo $template_dir; ?>/images/soldout.gif"/><br/>
          <?php } ?>
        </ul>
        <?php if ($products_quantity > 0){ ?>
        <ul id="selectArea" class="g_t_c product_ul_h relative"></ul>
        <ul class="g_t_c gray" id="tmp_tit"></ul>
				<script type="text/javascript">
				    function showTit(key){
				    (key==0)?$('tit_t').style.display = '':$('tit_t').style.display = 'none';
				  }
				  
				  function nrcr(){
				    this.ini = init;
				    this.arrSel = [];
				      this.checking = checkS;
				      this.strbuy = '<input type="submit" class="buttonAddCart" alt="Add to Cart" title="Add to Cart" />';     
				  }
				  var sel = new nrcr();
				  
				  function init(){
				    var selects = document.getElementsByTagName("SELECT");
				    for(i=0;i<selects.length;i++){
				      if (selects[i].id.substr(0,7) == 'attrib-')
				          this.arrSel.push(selects[i].id);
				    }
				    var len = this.arrSel.length;
				    if(len>0){
				      $('tmp_tit').innerHTML = '(double-check the options, upload photos then add to cart)';
				       for(j=0;j<len;j++){
				          $(this.arrSel[j]).onchange = this.checking;
				      }
				      }
				  }
				  
				  function checkS() {
				    var str = sel.strbuy;
				    var errMsg = '';
				    var pass = true;
				    var t = 0;
				    if(sel.arrSel.length > 0){
				      for(i=0;i<sel.arrSel.length;i++){
				        if($(sel.arrSel[i]).value == ""){
				          (t>0)?errMsg = errMsg + ' and ' + $(sel.arrSel[i]).previousSibling.innerHTML.replace(':',''):errMsg += $(sel.arrSel[i]).previousSibling.innerHTML.replace(':','');          
				          pass = false;
				          t++;
				        }           
				      } 
				    }
				    errMsg = "Please select<br />" + errMsg;  
				    if(!pass)
				      str = '<img src="includes/templates/<?php echo $template_dir; ?>/images/button/car.gif" border="0"  onmouseout=showTit(1) onmouseover=showTit(0); />'+'<div id="tit_t" style="display:none">'+errMsg+'<b></b></div>';
				     $('selectArea').innerHTML = str;
				  }
				     
				  </script>
			    <script>sel.ini();sel.checking();</script>
          <?php } ?>
		  
		  
 <!--  弹出 皮肤 头发 颜色     <div class="seal_m_en center"></div>  -->  
		
		
        <ul class="g_t_c"><br>
		
 <li style="margin-top: 3px;"><a title="Shipping Methods" onclick="floatBox(this,'payment_option');" href="<?php echo $_SERVER['REQUEST_URI'];?>#show"> <?php echo zen_image($template->get_template_dir('shipping.gif', DIR_WS_TEMPLATE, $current_page_base,'images/button'). '/' . 'shipping.gif','Shipping Methods','','',' class="relative"');?></a></li>
			   
 <li style="margin-top: 3px;"><a title="Payment methods" onclick="floatBox(this,'shipping_info');" href="<?php echo $_SERVER['REQUEST_URI'];?>#show"> <?php echo zen_image($template->get_template_dir('payment.gif', DIR_WS_TEMPLATE, $current_page_base,'images/button'). '/' . 'payment.gif','Payment Methods','','',' class="relative"');?></a></li> 

 
		
		  <!-- tell my friend 加入的 颜色指导说明 -->
		  
        </ul>
      </div>
      </form>
      <script>changePrice();</script>
      <!-- EOF ProductShipping Cart-->
    </div>
<!-- EOF Product Tools-->    </div> 

   <div style=" float:left; width:480px; margin-left:230px; ">   
    
 
   * By adding order comments, you can change clothing colours , paint logos, tattoos, writing on the clothing, add jewelry or anything else you want on the doll, Its all included in the price. <br />
* Additional charges may apply for added sculpted items like dogs, chairs, etc.<br />
     <br /> 
  </div>


</div>




<br class="clear" />
<div class="margin_t fl maxwidth">
<div id="product_main_con" class="fl black">
<div>
  <!--bof Product description -->
  <?php if ($products_description != '') { ?>
<div><h2 class="blue">Description: </h2></div>
    <div id="Item_Description_Spc" class="pad_10px pad_l_28px big"><?php echo stripslashes($products_description); ?></div>

 
  
    <!--加入的公共描述性的内容 开始 -->
    <!--加入的公共描述性的内容 结束 -->
    <?php } ?>
    <!--eof Product description -->
</div>
<div align="center">
 
    
    
      <!--bof Additional Product Images -->
      <?php
/**
 * display the products additional images
 */
  require($template->get_template_dir('/tpl_modules_additional_images.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_modules_additional_images.php'); ?>
      <!--eof Additional Product Images -->
    
    
      <!--bof Prev/Next bottom position -->
      <?php if (PRODUCT_INFO_PREVIOUS_NEXT == 2 or PRODUCT_INFO_PREVIOUS_NEXT == 3) { ?>
      <?php
/**
 * display the product previous/next helper
 */
	
 require($template->get_template_dir('/tpl_products_next_previous.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_products_next_previous.php'); ?>
      <?php } ?>
      <!--eof Prev/Next bottom position -->
      <a href="/dressmaking.html" target="_blank" class="STYLE12">see video: How We Make Your Dolls?</a> 
 
</div>
<div class="g_t_r pad_bottom">
<a target="_blank" title="Print Page" href="<?php echo 'print_page_p'.$_GET['products_id'];?>">write a review</a></div>

<!-- BOF Related_categories Search_feedback -->
<?php
	//require(DIR_WS_MODULES . zen_get_module_directory('sideboxes/'.$template_dir.'/related_categories.php'));
	//require(DIR_WS_MODULES . zen_get_module_directory('sideboxes/'.$template_dir.'/search_feedback.php'));
?>
<!-- EOF Relate_categories Search_feedback -->
</div>
<div class="mini_frame fr">
    <p>
      <?php // require(DIR_WS_MODULES . zen_get_module_directory('sideboxes/'.$template_dir.'/recently_sold.php')); ?>
      <?php // require($template->get_template_dir('tpl_modules_also_purchased_products.php', DIR_WS_TEMPLATE, $current_page_base,'templates'). '/' . 'tpl_modules_also_purchased_products.php');?>
      <?php // require(DIR_WS_MODULES . zen_get_module_directory('sideboxes/'.$template_dir.'/subscribe.php')); ?>
    </p>
  
      <table width="100%"   border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#DDDDDD" style="visibility:hidden">
        <tr>
          <td height="" align="left">Custom dolls lovly </td>
        </tr>
      </table>
  
    <p>&nbsp;  </p>
  </div>
</div>

<!--bof Form close-->
</form>
<!--bof Form close-->
<br class="clear"/>
