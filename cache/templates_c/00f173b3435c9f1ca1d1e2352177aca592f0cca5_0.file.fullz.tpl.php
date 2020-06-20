<?php
/* Smarty version 3.1.30, created on 2020-05-29 15:40:09
  from "/home/bligeoyh/public_html/template/fullz.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ed16519b657c6_28800138',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00f173b3435c9f1ca1d1e2352177aca592f0cca5' => 
    array (
      0 => '/home/bligeoyh/public_html/template/fullz.tpl',
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
function content_5ed16519b657c6_28800138 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--mobile">
   <div class="kt-portlet__body">
      <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
            <div class="col-sm-12">
               <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="fullz_table" role="grid" aria-describedby="fullz_table_info" style="width: 1541px;">
                  <thead>
                     <tr role="row">
                        <th class="sorting_desc" tabindex="0" aria-controls="fullz_table" rowspan="1" colspan="1" style="width: 121.25px;" aria-sort="descending">Type</th>
                        <th class="sorting" tabindex="0" aria-controls="fullz_table" rowspan="1" colspan="1" style="width: 159.25px;">BIN</th>
                        <th class="sorting" tabindex="0" aria-controls="fullz_table" rowspan="1" colspan="1" style="width: 164.25px;">Name</th>
                        <th class="sorting" tabindex="0" aria-controls="fullz_table" rowspan="1" colspan="1" style="width: 135.25px;">Postcode</th>
                        <th class="sorting" tabindex="0" aria-controls="fullz_table" rowspan="1" colspan="1" style="width: 135.25px;">Phone Number</th>
                        <th class="sorting" tabindex="0" aria-controls="fullz_table" rowspan="1" colspan="1" style="width: 214.25px;">Price</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 78.5px;" aria-label="Actions">Actions</th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fullzLogs']->value, 'fl', false, 'fullzLog');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fullzLog']->value => $_smarty_tpl->tpl_vars['fl']->value) {
?>
                     <tr role="row" class="even" id="<?php echo $_smarty_tpl->tpl_vars['fl']->value['id'];?>
">
                        <?php if ($_smarty_tpl->tpl_vars['fl']->value['category'] == '1') {?>
                        <td data-target="pcType"><span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">FRESH</span></td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['fl']->value['category'] == '2') {?>
                        <td data-target="pcType"><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">YOUNG</span></td>
                        <?php } else { ?>
                        <td data-target="pcType"><span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">OLD</span></td>
                        <?php }?>
                        <td data-target="pcBin"><?php echo $_smarty_tpl->tpl_vars['fl']->value['cardBin'];?>
</td>
                        <td data-target="pcName"><?php echo $_smarty_tpl->tpl_vars['fl']->value['firstName'];?>
</td>
                        <td data-target="pcPostcode"><?php echo $_smarty_tpl->tpl_vars['fl']->value['postcode'];?>
</td>
                        <td data-target="pcPhone"><?php echo substr($_smarty_tpl->tpl_vars['fl']->value['telephone'],0,6);?>
xxxxx</td>
                        <td data-target="pcPrice"><?php echo $_smarty_tpl->tpl_vars['fl']->value['price'];?>
¢</td>
                        <td nowrap="">
                          <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='info' data-id="<?php echo $_smarty_tpl->tpl_vars['fl']->value['id'];?>
" title="Info"><i class="la la-info-circle" style="font-size:24px;"></i></button>
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='purchase' data-id="<?php echo $_smarty_tpl->tpl_vars['fl']->value['id'];?>
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
        <h5 class="modal-title">Purchase Information</h5>
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="kt-portlet__body">
          <div class="form-group">
						<label>Type</label>
						<input type="text" id="pcType" name="pcType" class="form-control" readonly>
					</div>
          <div class="form-group">
            <label>Card BIN</label>
            <input type="text" id="pcBin" name="pcBin" class="form-control" readonly>
          </div>
          <div class="form-group">
						<label>First Name</label>
						<input type="text" id="pcName" name="pcName" class="form-control" readonly>
					</div>
          <div class="form-group">
            <label>Birth Year</label>
            <input type="text" id="pcYear" name="pcYear" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Postcode</label>
            <input type="text" id="pcPostcode" name="pcPostcode" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Telephone</label>
            <input type="text" id="pcPhone" name="pcPhone" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Price</label>
            <input type="text" id="pcPrice" name="pcPrice" class="form-control" readonly>
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

<div class="modal fade" id="binModal" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">BIN Information</h5>
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="kt-portlet__body" id="binBody">
          <div hidden id="binLoader" style="width: 3rem; height: 3rem; display:none;">
            <div class="spinner-border text-primary" style="text-align:center;" role="status">
                <span class="sr-only">Getting information...</span>
            </div>
          </div>
          <div id="binHide" style="display:none;">
            <div class="form-group">
              <label>Type</label>
              <input type="text" id="type" name="type" class="form-control" readonly>
            </div>
            <div class="form-group">
              <label>Brand</label>
              <input type="text" id="brand" name="brand" class="form-control" readonly>
            </div>
            <div class="form-group">
              <label>Prepaid</label>
              <input type="text" id="prepaid" name="prepaid" class="form-control" readonly>
            </div>
            <div class="form-group">
              <label>Country</label>
              <input type="text" id="country-name" name="country-name" class="form-control" readonly>
            </div>
            <div class="form-group">
              <label>Currency</label>
              <input type="text" id="country-currency" name="country-currency" class="form-control" readonly>
            </div>
            <div class="form-group">
              <label>Bank Name</label>
              <input type="text" id="bank-name" name="bank-name" class="form-control" readonly>
            </div>
            <div class="form-group">
              <label>Bank Site</label>
              <input type="text" id="bank-url" name="bank-url" class="form-control" readonly>
            </div>
            <div class="form-group">
              <label>Bank City</label>
              <input type="text" id="bank-city" name="bank-city" class="form-control" readonly>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-ban"></i> Cancel</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="purchaseModal" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Purchase Information</h5>
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="kt-portlet__body">
          <div class="form-group">
						<label>Type</label>
						<input type="text" id="pcType" name="pcType" class="form-control" readonly>
					</div>
          <div class="form-group">
            <label>Card BIN</label>
            <input type="text" id="pcBin" name="pcBin" class="form-control" readonly>
          </div>
          <div class="form-group">
						<label>First Name</label>
						<input type="text" id="pcName" name="pcName" class="form-control" readonly>
					</div>
          <div class="form-group">
            <label>Birth Year</label>
            <input type="text" id="pcYear" name="pcYear" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Postcode</label>
            <input type="text" id="pcPostcode" name="pcPostcode" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Telephone</label>
            <input type="text" id="pcPhone" name="pcPhone" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Price</label>
            <input type="text" id="pcPrice" name="pcPrice" class="form-control" readonly>
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
