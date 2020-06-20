<?php
/* Smarty version 3.1.30, created on 2020-05-29 15:44:54
  from "/home/bligeoyh/public_html/template/cp-users.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ed16636f3a5a6_99979912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fe884cfe40509b4ac9818cbc17418f9f18d5dd9' => 
    array (
      0 => '/home/bligeoyh/public_html/template/cp-users.tpl',
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
function content_5ed16636f3a5a6_99979912 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--mobile">
   <div class="kt-portlet__body">
      <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
            <div class="col-sm-12">
               <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="users_table" role="grid" aria-describedby="fullz_table_info" style="width: 1541px;">
                  <thead>
                     <tr role="row">
                        <th class="sorting_desc" tabindex="0" aria-controls="users_table" rowspan="1" colspan="1" aria-sort="descending">Id</th>
                        <th class="sorting" tabindex="0" aria-controls="users_table" rowspan="1" colspan="1">Username</th>
                        <th class="sorting" tabindex="0" aria-controls="users_table" rowspan="1" colspan="1">Email</th>
                        <th class="sorting" tabindex="0" aria-controls="users_table" rowspan="1" colspan="1">Type</th>
                        <th class="sorting" tabindex="0" aria-controls="users_table" rowspan="1" colspan="1">Money Spent</th>
                        <th class="sorting" tabindex="0" aria-controls="users_table" rowspan="1" colspan="1">Status</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allUsers']->value, 'eu', false, 'eachUsers');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['eachUsers']->value => $_smarty_tpl->tpl_vars['eu']->value) {
?>
                     <tr role="row" class="even" id="<?php echo $_smarty_tpl->tpl_vars['eu']->value['id'];?>
">
                       <td data-target="pfmId"><?php echo $_smarty_tpl->tpl_vars['eu']->value['pfmId'];?>
</td>
                        <td data-target="username"><?php echo $_smarty_tpl->tpl_vars['eu']->value['username'];?>
</td>
                        <td data-target="email"><?php echo $_smarty_tpl->tpl_vars['eu']->value['email'];?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['eu']->value['accountType'] == 'Member') {?>
                        <td data-target="accountType"><span class="badge badge-primary"><?php echo $_smarty_tpl->tpl_vars['eu']->value['accountType'];?>
</span></td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['eu']->value['accountType'] == 'Vendor') {?>
                        <td data-target="accountType"><span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['eu']->value['accountType'];?>
</span></td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['eu']->value['accountType'] == 'Deleted') {?>
                        <td data-target="accountType"><span class="badge badge-dark"><?php echo $_smarty_tpl->tpl_vars['eu']->value['accountType'];?>
</span></td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['eu']->value['accountType'] == 'Banned') {?>
                        <td data-target="accountType"><span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['eu']->value['accountType'];?>
</span></td>
                        <?php }?>
                        <td data-target="moneySpent"><?php echo $_smarty_tpl->tpl_vars['eu']->value['moneySpent'];?>
</td>
                        <td data-target="accountStatus"><?php echo $_smarty_tpl->tpl_vars['eu']->value['accountStatus'];?>
</td>
                        <td nowrap="">
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='edit' data-id="<?php echo $_smarty_tpl->tpl_vars['eu']->value['id'];?>
" title="Edit"><i class="la la-edit" style="font-size:24px;"></i></button>
                           <?php if ($_smarty_tpl->tpl_vars['eu']->value['accountType'] != 'Vendor') {?>
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='upgrade' data-id="<?php echo $_smarty_tpl->tpl_vars['eu']->value['id'];?>
" title="Upgrade to Vendor"><i class="la la-get-pocket" style="font-size:24px;"></i></button>
                           <?php }?>
                           <?php if ($_smarty_tpl->tpl_vars['eu']->value['accountType'] == 'Vendor') {?>
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='degrade' data-id="<?php echo $_smarty_tpl->tpl_vars['eu']->value['id'];?>
" title="Degrade to Member"><i class="la la-toggle-down" style="font-size:24px;"></i></button>
                           <?php }?>
                           <?php if ($_smarty_tpl->tpl_vars['eu']->value['accountType'] == 'Deleted') {?>
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='recover' data-id="<?php echo $_smarty_tpl->tpl_vars['eu']->value['id'];?>
" title="Recover"><i class="la la-check-circle" style="font-size:24px;"></i></button>
                           <?php } else { ?>
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='delete' data-id="<?php echo $_smarty_tpl->tpl_vars['eu']->value['id'];?>
" title="Delete"><i class="la la-minus-square-o" style="font-size:24px;"></i></button>
                           <?php }?>
                           <?php if ($_smarty_tpl->tpl_vars['eu']->value['accountType'] == 'Banned') {?>
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='unban' data-id="<?php echo $_smarty_tpl->tpl_vars['eu']->value['id'];?>
" title="Unban"><i class="la la-chain-broken" style="font-size:24px;"></i></button>
                           <?php } else { ?>
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='ban' data-id="<?php echo $_smarty_tpl->tpl_vars['eu']->value['id'];?>
" title="Ban"><i class="la la-ban" style="font-size:24px;"></i></button>
                           <?php }?>
                        </td>
                        <td data-target="password" hidden><?php echo $_smarty_tpl->tpl_vars['eu']->value['password'];?>
</td>
                        <td data-target="balance" hidden><?php echo $_smarty_tpl->tpl_vars['eu']->value['balance'];?>
</td>
                        <td data-target="totalPurchase" hidden><?php echo $_smarty_tpl->tpl_vars['eu']->value['totalPurchase'];?>
</td>
                        <td data-target="recentLogon" hidden><?php echo $_smarty_tpl->tpl_vars['eu']->value['recentLogon'];?>
</td>
                        <td data-target="recentIpLogon" hidden><?php echo $_smarty_tpl->tpl_vars['eu']->value['recentIpLogon'];?>
</td>
                        <td data-target="userIp" hidden><?php echo $_smarty_tpl->tpl_vars['eu']->value['userIp'];?>
</td>
                        <td data-target="creationTime" hidden><?php echo $_smarty_tpl->tpl_vars['eu']->value['creationTime'];?>
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

<div class="modal fade" id="editModal" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">User Information</h5>
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="kt-portlet__body">
          <div class="form-group">
						<label>User ID</label>
						<input type="text" id="pfmId" name="pfmId" class="form-control" readonly>
					</div>
          <div class="form-group">
						<label>Username</label>
						<input type="text" id="username" name="username" class="form-control">
					</div>
          <div class="form-group">
						<label>Password (MD5)</label>
						<input type="text" id="password" name="password" class="form-control">
					</div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" id="email" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label>Balance</label>
            <input type="text" id="balance" name="balance" class="form-control">
          </div>
          <div class="form-group">
            <label>Money Spent</label>
            <input type="text" id="moneySpent" name="moneySpent" class="form-control">
          </div>
          <div class="form-group">
            <label>Account Type</label>
            <input type="text" id="accountType" name="accountType" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Status</label>
            <input type="text" id="accountStatus" name="accountStatus" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Total Purchase</label>
            <input type="text" id="totalPurchase" name="totalPurchase" class="form-control">
          </div>
          <div class="form-group">
            <label>Recent Logon</label>
            <input type="text" id="recentLogon" name="recentLogon" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Recent IP Logon</label>
            <input type="text" id="recentIpLogon" name="recentIpLogon" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>User IP</label>
            <input type="text" id="userIp" name="userIp" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Creation Time</label>
            <input type="text" id="creationTime" name="creationTime" class="form-control" readonly>
          </div>
          <input type="hidden" id="editId">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-ban"></i> Cancel</button>
        <button type="button" class="btn btn-outline-success" id="editBtn"><i class="fa fa-save"></i> Save</button>
      </div>
    </div>
  </div>
</div>

<input type="hidden" id="deleteId">
<input type="hidden" id="banId">
<input type="hidden" id="recoverId">
<input type="hidden" id="unbanId">
<input type="hidden" id="upgradeId">
<input type="hidden" id="degradeId">

</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
