<?php
/* Smarty version 3.1.39, created on 2023-11-03 05:17:54
  from 'C:\xampp\htdocs\whatsapp\layouts\v7\modules\Install\InstallPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_65448282e2e828_43650983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'babcee7c36a93f5559dacdd735dec223f515d478' => 
    array (
      0 => 'C:\\xampp\\htdocs\\whatsapp\\layouts\\v7\\modules\\Install\\InstallPreProcess.tpl',
      1 => 1669872319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65448282e2e828_43650983 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row">
		<div class="col-sm-6">
			<div class="logo">
				<img src="<?php echo vimage_path('logo.png');?>
"/>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="head pull-right">
				<h3><?php echo vtranslate('LBL_INSTALLATION_WIZARD','Install');?>
</h3>
			</div>
		</div>
	</div>
<?php }
}
