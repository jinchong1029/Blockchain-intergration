<?php
/* Smarty version 3.1.30, created on 2020-05-30 04:15:14
  from "/home/bligeoyh/public_html/template/tools.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ed21612075668_19994444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9fe0b96922943c6cdd71238066fb19647b6c2d6' => 
    array (
      0 => '/home/bligeoyh/public_html/template/tools.tpl',
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
function content_5ed21612075668_19994444 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--mobile">
   <div class="kt-portlet__body">
      <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
            <div class="col-sm-12">
               <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="tools_table" role="grid" aria-describedby="fullz_table_info" style="width: 1541px;">
                  <thead>
                     <tr role="row">
                        <th class="sorting_desc" tabindex="0" aria-controls="tools_table" rowspan="1" colspan="1" aria-sort="descending">Information</th>
                        <th class="sorting" tabindex="0" aria-controls="tools_table" rowspan="1" colspan="1">Preview</th>
                        <th class="sorting" tabindex="0" aria-controls="tools_table" rowspan="1" colspan="1">Price</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allTools']->value, 'et', false, 'eachTool');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['eachTool']->value => $_smarty_tpl->tpl_vars['et']->value) {
?>
                     <tr role="row" class="even" id="<?php echo $_smarty_tpl->tpl_vars['et']->value['id'];?>
">
                        <td data-target="etInfo"><?php echo $_smarty_tpl->tpl_vars['et']->value['info'];?>
</td>
                        <td data-target="etPreview"><?php echo $_smarty_tpl->tpl_vars['et']->value['preview'];?>
</td>
                        <td data-target="etPrice"><?php echo $_smarty_tpl->tpl_vars['et']->value['price'];?>
¢</td>
                        <td nowrap="">
                           <button type="button" style="display:block; margin:auto;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='purchase' data-id="<?php echo $_smarty_tpl->tpl_vars['et']->value['id'];?>
" title="Purchase"><i class="la la-cart-arrow-down" style="font-size:24px;"></i></button>
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
</div>

<div class="modal fade" id="purchaseModal" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tool Information</h5>
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="kt-portlet__body">
          <div class="form-group">
            <label>Information</label>
            <textarea class="form-control" id="etInfo" name="etInfo" rows="3" readonly></textarea>
          </div>
          <div class="form-group">
						<label>Preview</label>
						<input type="text" id="etPreview" name="etPreview" class="form-control" readonly>
					</div>
          <div class="form-group">
            <label>Price</label>
            <input type="text" id="etPrice" name="etPrice" class="form-control" readonly>
          </div>
          <input type="hidden" id="transId">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-ban"></i> Cancel</button>
        <button type="button" class="btn btn-outline-success" id="buyBtn"><i class="fa fa-dollar-sign"></i> Purchase</button>
      </div>
    </div>
  </div>
</div>

<div class="toast toast-custom toast-fill fade hide toast-bottom toast-right" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3500" id="kt_toast_1">
	<div class="toast-header">
		<i class="toast-icon flaticon-cart kt-font-success"></i>
		<span class="toast-title">New order has been placed</span>
		<small class="toast-time">a few seconds ago</small>
	</div>
	<div class="toast-body">
		Your order has been transferred to your inventory.
	</div>
</div>

<div class="toast toast-custom toast-fill fade hide toast-bottom toast-right" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3500" id="kt_toast_2">
	<div class="toast-header">
		<i class="toast-icon flaticon2-attention kt-font-warning"></i>
		<span class="toast-title">Not enough credits</span>
		<small class="toast-time">a few seconds ago</small>
	</div>
	<div class="toast-body">
		Your purchase encountered an error.
	</div>
</div>

<div class="toast toast-custom toast-fill fade hide toast-bottom toast-right" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3500" id="kt_toast_3">
	<div class="toast-header">
		<i class="toast-icon flaticon2-attention kt-font-danger"></i>
		<span class="toast-title">Error purchasing</span>
		<small class="toast-time">a few seconds ago</small>
	</div>
	<div class="toast-body">
		Please refresh your browser. If persist, contact admin.
	</div>
</div>

</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
