<?php
/* Smarty version 3.1.30, created on 2020-06-01 01:55:28
  from "/home/bligeoyh/public_html/template/cp-replyticket.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ed498504c0208_62681858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e31ee7e0da48e22cc4ccf9c27109111f05bfed4' => 
    array (
      0 => '/home/bligeoyh/public_html/template/cp-replyticket.tpl',
      1 => 1590736689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ed498504c0208_62681858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--mobile">
  <div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title" id="ticketHead">
				Replying ticket # <?php echo $_smarty_tpl->tpl_vars['tixId']->value['id'];?>

			</h3>
		</div>
	</div>
   <div class="kt-portlet__body">
      <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
            <div class="col-sm-12">
               <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="replies_table" role="grid" aria-describedby="tickets_table_info" style="width: 1541px;">
                  <thead>
                     <tr role="row">
                        <th class="sorting_desc" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1" style="width: 121.25px;" aria-sort="descending">Date Reply</th>
                        <th class="sorting" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1" style="width: 159.25px;">Message</th>
                        <th class="sorting" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1" style="width: 214.25px;">By</th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ticketReplies']->value, 'tr', false, 'ticketReply');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ticketReply']->value => $_smarty_tpl->tpl_vars['tr']->value) {
?>
                     <tr role="row" class="even" id="<?php echo $_smarty_tpl->tpl_vars['tr']->value['ticket_id'];?>
">
                       <td><?php echo $_smarty_tpl->tpl_vars['tr']->value['date'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['tr']->value['message'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['tr']->value['user'];?>
</td>
                     </tr>
                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <div class="kt-portlet">
	<form class="kt-form kt-form--label-right">
		<div class="kt-portlet__body">
			<div class="form-group row">
				<div class="col-lg-12 col-md-12 col-sm-12">
          <div class="md-editor">
             <textarea name="replyMessage" id="replyMessage" class="form-control md-input" data-provide="markdown" data-id="<?php echo $_smarty_tpl->tpl_vars['tixId']->value['id'];?>
" rows="10" style="resize: none;"></textarea>
          </div>
				</div>
			</div>

		</div>
		<div class="kt-portlet__foot">
			<div class="kt-form__actions">
				<div class="row">
					<div class="col-lg-12 ml-lg-auto">
						<button type="button" class="btn btn-outline-success" id="replySubmit"><i class="fa fa-reply-all"></i> Reply</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
</div>

</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
