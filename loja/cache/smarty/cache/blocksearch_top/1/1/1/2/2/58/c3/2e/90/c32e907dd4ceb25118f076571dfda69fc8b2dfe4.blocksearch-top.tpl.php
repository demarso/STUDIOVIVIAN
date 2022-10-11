<?php /*%%SmartyHeaderCode:6188072445ee28d3833b2b8-44515282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c32e907dd4ceb25118f076571dfda69fc8b2dfe4' => 
    array (
      0 => '/home1/studiovivian/public_html/loja/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1556653332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6188072445ee28d3833b2b8-44515282',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ee2bea34cb9b5_90593189',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ee2bea34cb9b5_90593189')) {function content_5ee2bea34cb9b5_90593189($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//studiovivianmartins.com.br/loja/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Busca" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Busca</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP -->
<?php }} ?>
