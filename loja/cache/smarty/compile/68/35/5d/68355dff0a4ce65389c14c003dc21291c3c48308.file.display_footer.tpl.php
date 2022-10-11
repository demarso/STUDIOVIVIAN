<?php /* Smarty version Smarty-3.1.19, created on 2020-06-11 16:59:52
         compiled from "/home1/studiovivian/public_html/loja/modules/amzpayments/views/templates/hooks/display_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9471524975ee28d38ef1cf3-70777026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68355dff0a4ce65389c14c003dc21291c3c48308' => 
    array (
      0 => '/home1/studiovivian/public_html/loja/modules/amzpayments/views/templates/hooks/display_footer.tpl',
      1 => 1591891885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9471524975ee28d38ef1cf3-70777026',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ee28d38ef4ad7_12374470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee28d38ef4ad7_12374470')) {function content_5ee28d38ef4ad7_12374470($_smarty_tpl) {?>

<div class="amzpayments-footer-banner">
	<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
</div><?php }} ?>
