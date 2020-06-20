<?php
/* Smarty version 3.1.30, created on 2020-05-29 15:45:45
  from "/home/bligeoyh/public_html/template/cp-payments.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ed1666992ae89_56793883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '218ab3e12a1f474469b067d61e86a657c2a877c3' => 
    array (
      0 => '/home/bligeoyh/public_html/template/cp-payments.tpl',
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
function content_5ed1666992ae89_56793883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--mobile">
   <div class="kt-portlet__body">
      <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
            <div class="col-sm-12">
               <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="payments_table" role="grid" aria-describedby="fullz_table_info" style="width: 1541px;">
                  <thead>
                    <tr role="row">
                       <th class="sorting_desc" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-sort="descending">ID</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Status</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">USD</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">BTC</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Creation Date</th>
                       <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
                       <th hidden></th>
                       <th hidden></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allPayments']->value, 'ep', false, 'eachPayment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['eachPayment']->value => $_smarty_tpl->tpl_vars['ep']->value) {
?>
                     <tr role="row" class="even" id="<?php echo $_smarty_tpl->tpl_vars['ep']->value['id'];?>
">
                        <td data-target="epId"><?php echo $_smarty_tpl->tpl_vars['ep']->value['id'];?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['ep']->value['status'] == 'initialized') {?>
                        <td data-target="epStatus"><span class="badge badge-primary">Initialized</span></td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['ep']->value['status'] == 'pending') {?>
                        <td data-target="epStatus"><span class="badge badge-danger">Confirming</span></td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['ep']->value['status'] == 'success') {?>
                        <td data-target="epStatus"><span class="badge badge-success">Confirmed</span></td>
                        <?php } else { ?>
                        <td data-target="epStatus"><span class="badge badge-dark">Error</span></td>
                        <?php }?>
                        <td><i class="la la-dollar"></i><?php echo $_smarty_tpl->tpl_vars['ep']->value['entered_amount'];?>
</td>
                        <td><i class="la la-bitcoin"></i><?php echo $_smarty_tpl->tpl_vars['ep']->value['amount'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['ep']->value['created_at'];?>
</td>
                        <td nowrap="" style="">
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='view' data-id="<?php echo $_smarty_tpl->tpl_vars['ep']->value['id'];?>
" title="View"><i class="la la-view" style="font-size:24px;"></i></button>
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='delete' data-id="<?php echo $_smarty_tpl->tpl_vars['ep']->value['id'];?>
" title="Delete"><i class="la la-trash" style="font-size:24px;"></i></button>
                        </td>
                        <td hidden data-target="epFromCurrency"><?php echo $_smarty_tpl->tpl_vars['ep']->value['from_currency'];?>
</td>
                        <td hidden data-target="epEnteredAmount"><?php echo $_smarty_tpl->tpl_vars['ep']->value['entered_amount'];?>
</td>
                        <td hidden data-target="epToCurrency"><?php echo $_smarty_tpl->tpl_vars['ep']->value['to_currency'];?>
</td>
                        <td hidden data-target="epAmount"><?php echo $_smarty_tpl->tpl_vars['ep']->value['amount'];?>
</td>
                        <td hidden data-target="epGatewayId"><?php echo $_smarty_tpl->tpl_vars['ep']->value['gateway_id'];?>
</td>
                        <td hidden data-target="epGatewayUrl"><?php echo $_smarty_tpl->tpl_vars['ep']->value['gateway_url'];?>
</td>
                        <td hidden data-target="epCreatedAt"><?php echo $_smarty_tpl->tpl_vars['ep']->value['created_at'];?>
</td>
                        <td hidden data-target="epUpdatedAt"><?php echo $_smarty_tpl->tpl_vars['ep']->value['updated_at'];?>
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

<div class="modal fade" id="viewModal" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Payment Information</h5>
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="kt-portlet__body">
          <div class="form-group">
            <label>ID</label>
            <input type="text" id="epId" name="epId" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Status</label>
            <input type="text" id="epStatus" name="epStatus" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>From</label>
            <input type="text" id="epFromCurrency" name="epFromCurrency" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Entered Amount</label>
            <input type="text" id="epEnteredAmount" name="epEnteredAmount" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>To</label>
            <input type="text" id="epToCurrency" name="epToCurrency" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Amount</label>
            <input type="text" id="epAmount" name="epAmount" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Gateway ID</label>
            <input type="text" id="epGatewayId" name="epGatewayId" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Gateway Url</label>
            <input type="text" id="epGatewayUrl" name="epGatewayUrl" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Time Created</label>
            <input type="text" id="epCreatedAt" name="epCreatedAt" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Time Updated</label>
            <input type="text" id="epUpdatedAt" name="epUpdatedAt" class="form-control" readonly>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-ban"></i> Cancel</button>
      </div>
    </div>
  </div>
</div>

<input type="hidden" id="deleteId">

</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
