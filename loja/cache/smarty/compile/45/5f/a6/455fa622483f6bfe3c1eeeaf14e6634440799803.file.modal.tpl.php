<?php /* Smarty version Smarty-3.1.19, created on 2020-06-11 16:59:40
         compiled from "/home1/studiovivian/public_html/loja/studiovivian/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5409610545ee28d2c1df763-05955850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '455fa622483f6bfe3c1eeeaf14e6634440799803' => 
    array (
      0 => '/home1/studiovivian/public_html/loja/studiovivian/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1556653332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5409610545ee28d2c1df763-05955850',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ee28d2c1e0631_35071486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee28d2c1e0631_35071486')) {function content_5ee28d2c1e0631_35071486($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
