<?php
/* Smarty version 3.1.30, created on 2020-05-30 04:30:42
  from "/home/bligeoyh/public_html/template/cp-accounts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ed219b272b454_73555064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b252d85191302822f55e5681c06884046545c002' => 
    array (
      0 => '/home/bligeoyh/public_html/template/cp-accounts.tpl',
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
function content_5ed219b272b454_73555064 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--mobile">
   <div class="kt-portlet__body">
      <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
            <div class="col-sm-12">
               <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="accounts_table" role="grid" aria-describedby="fullz_table_info" style="width: 1541px;">
                  <thead>
                    <tr role="row">
                       <th class="sorting_desc" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-sort="descending">ID</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Type</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Information</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Price</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Status</th>
                       <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
                       <th hidden></th>
                       <th hidden></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allAccounts']->value, 'ea', false, 'eachAccount');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['eachAccount']->value => $_smarty_tpl->tpl_vars['ea']->value) {
?>
                     <tr role="row" class="even" id="<?php echo $_smarty_tpl->tpl_vars['ea']->value['id'];?>
">
                        <td data-target="eaId"><?php echo $_smarty_tpl->tpl_vars['ea']->value['id'];?>
</td>
                        <td data-target="eaType"><span class="badge badge-primary"><?php echo $_smarty_tpl->tpl_vars['ea']->value['type'];?>
</span></td>
                        <td data-target="eaInfo"><?php echo $_smarty_tpl->tpl_vars['ea']->value['info'];?>
</td>
                        <td data-target="eaPrice"><?php echo $_smarty_tpl->tpl_vars['ea']->value['price'];?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['ea']->value['status'] == '0') {?>
                        <td data-target="eaStatus"><span class="badge badge-success">Available</span></td>
                        <?php } else { ?>
                        <td data-target="eaStatus"><span class="badge badge-danger">Bought</span></td>
                        <?php }?>
                        <td nowrap="" style="">
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='edit' data-id="<?php echo $_smarty_tpl->tpl_vars['ea']->value['id'];?>
" title="Edit"><i class="la la-edit" style="font-size:24px;"></i></button>
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='delete' data-id="<?php echo $_smarty_tpl->tpl_vars['ea']->value['id'];?>
" title="Delete"><i class="la la-trash" style="font-size:24px;"></i></button>
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='recheck' data-id="<?php echo $_smarty_tpl->tpl_vars['ea']->value['id'];?>
" title="Recheck"><i class="la la-refresh" style="font-size:24px;"></i></button>
                        </td>
                        <td hidden data-target="eaUsername"><?php echo $_smarty_tpl->tpl_vars['ea']->value['username'];?>
</td>
                        <td hidden data-target="eaPassword"><?php echo $_smarty_tpl->tpl_vars['ea']->value['password'];?>
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
  <form class="kt-form kt-form--label-right formGroup" enctype="multipart/form-data">
    <ul class="kt-sticky-toolbar" style="margin-top: 30px;">
      <li id="liShow" class="kt-sticky-toolbar__item" title="" data-original-title="Show Form">
        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" id="showForm" title="Show Form">
        <i class="la la-eye"></i>
        </button>
      </li>
      <li style="display:none;" id="liHide" class="kt-sticky-toolbar__item" title="" data-original-title="Hide Form">
        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" id="hideForm" title="Hide Form">
        <i class="la la-eye-slash" style="font-size:26px;"></i>
        </button>
      </li>
      <li style="display:none;" id="liAdd" class="kt-sticky-toolbar__item" data-original-title="Add Form">
        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" id="add" title="Add Form">
        <i class="la la-plus-square-o" style="font-size:26px;"></i>
        </button>
      </li>
      <li style="display:none;" id="liGenerate" class="kt-sticky-toolbar__item" data-original-title="Generate">
        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" id="generate" title="Generate">
        <i class="la la-code-fork" style="font-size:26px;"></i>
        </button>
      </li>
    </ul>
    <div class="group" style="display:none;">
      <div class="kt-portlet kt-portlet--mobile" id="fullzForm">
        <div class="kt-portlet__body">
          <div class="form-group row">
             <div class="col-lg-4">
               <label class="">Price:</label>
               <div class="input-group">
                 <div class="input-group-prepend"><span class="input-group-text"><i class="la la-dollar"></i></span></div>
                 <input type="number" class="form-control" min="1" name="price[]" id="price">
               </div>
             </div>
            <div class="col-lg-4">
              <label class="">Account Type:</label>
              <input type="text" class="form-control" name="type[]" id="type">
            </div>
            <div class="col-lg-4">
              <label class="">Username:</label>
              <input type="text" class="form-control" name="username[]" id="username">
            </div>
          </div>
          <div class="form-group row">
             <div class="col-lg-4">
               <label class="">Password:</label>
               <input type="text" class="form-control" name="password[]" id="password">
             </div>
             <div class="col-lg-4">
               <label class="">Information:</label>
               <textarea class="form-control" id="information" name="information[]" rows="3"></textarea>
             </div>
          </div>
              </div>
                 <div class="kt-portlet__foot">
             <div style="float:right;">
               <div class="row">
                 <div class="col-lg-12">
                   <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md btnRemove" title="Remove">
                   <i class="la la-minus-square-o" style="font-size:26px;"></i>
                   </button>
                 </div>
               </div>
             </div>
           </div>
      </div>
    </div>
  </form>

<div class="modal fade" id="editModal" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Account Information</h5>
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="kt-portlet__body">
          <div class="form-group">
            <label>ID</label>
            <input type="text" id="eaId" name="eaId" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Status</label>
            <input type="text" id="eaStatus" name="eaStatus" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Price</label>
            <input type="text" id="eaPrice" name="eaPrice" class="form-control">
          </div>
          <div class="form-group">
						<label>Type</label>
						<input type="text" id="eaType" name="eaType" class="form-control">
					</div>
          <div class="form-group">
            <label>Information</label>
            <textarea class="form-control" id="eaInfo" name="eaInfo" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" id="eaUsername" name="eaUsername" class="form-control">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" id="eaPassword" name="eaPassword" class="form-control">
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

</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
