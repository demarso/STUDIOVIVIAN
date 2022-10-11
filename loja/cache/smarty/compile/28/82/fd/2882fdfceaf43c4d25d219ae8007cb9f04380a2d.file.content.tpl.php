<?php /* Smarty version Smarty-3.1.19, created on 2020-06-11 16:59:40
         compiled from "/home1/studiovivian/public_html/loja/studiovivian/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8516924255ee28d2c18df81-96681000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2882fdfceaf43c4d25d219ae8007cb9f04380a2d' => 
    array (
      0 => '/home1/studiovivian/public_html/loja/studiovivian/themes/default/template/content.tpl',
      1 => 1556653332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8516924255ee28d2c18df81-96681000',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ee28d2c190221_87881034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee28d2c190221_87881034')) {function content_5ee28d2c190221_87881034($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
