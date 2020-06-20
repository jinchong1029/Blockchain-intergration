<?php
/* Smarty version 3.1.30, created on 2020-05-29 15:37:48
  from "/home/bligeoyh/public_html/template/cp-banks.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ed1648c602965_82756812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8799fb268d6fe50d2a3feb84036d79d930718f9e' => 
    array (
      0 => '/home/bligeoyh/public_html/template/cp-banks.tpl',
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
function content_5ed1648c602965_82756812 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--mobile">
   <div class="kt-portlet__body">
      <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
            <div class="col-sm-12">
               <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="banks_table" role="grid" aria-describedby="fullz_table_info" style="width: 1541px;">
                  <thead>
                    <tr role="row">
                       <th class="sorting_desc" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-sort="descending">ID</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Type</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Price</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Status</th>
                       <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allBanks']->value, 'bl', false, 'bankLog');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bankLog']->value => $_smarty_tpl->tpl_vars['bl']->value) {
?>
                     <tr role="row" class="even" id="<?php echo $_smarty_tpl->tpl_vars['bl']->value['id'];?>
">
                        <td data-target="blId"><?php echo $_smarty_tpl->tpl_vars['bl']->value['id'];?>
</td>
                        <td data-target="blType"><span class="badge badge-primary"><?php echo $_smarty_tpl->tpl_vars['bl']->value['accountType'];?>
</span></td>
                        <td data-target="blPrice"><?php echo $_smarty_tpl->tpl_vars['bl']->value['price'];?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['bl']->value['status'] == '0') {?>
                        <td data-target="blStatus"><span class="badge badge-success">Available</span></td>
                        <?php } else { ?>
                        <td data-target="blStatus"><span class="badge badge-danger">Bought</span></td>
                        <?php }?>
                        <td hidden data-target="blAbout"><?php echo $_smarty_tpl->tpl_vars['bl']->value['about'];?>
</td>
                        <td hidden data-target="blFirstName"><?php echo $_smarty_tpl->tpl_vars['bl']->value['firstName'];?>
</td>
                        <td hidden data-target="blDob"><?php echo $_smarty_tpl->tpl_vars['bl']->value['dob'];?>
</td>
                        <td hidden data-target="blPrintscreen"><?php echo $_smarty_tpl->tpl_vars['bl']->value['printscreen'];?>
</td>
                        <td hidden data-target="blTelepin"><?php echo $_smarty_tpl->tpl_vars['bl']->value['telepin'];?>
</td>
                        <td hidden data-target="blLink"><?php echo $_smarty_tpl->tpl_vars['bl']->value['link'];?>
</td>
                        <td nowrap="" style="">
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='edit' data-id="<?php echo $_smarty_tpl->tpl_vars['bl']->value['id'];?>
" title="Edit"><i class="la la-edit" style="font-size:24px;"></i></button>
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='delete' data-id="<?php echo $_smarty_tpl->tpl_vars['bl']->value['id'];?>
" title="Delete"><i class="la la-trash" style="font-size:24px;"></i></button>
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='recheck' data-id="<?php echo $_smarty_tpl->tpl_vars['bl']->value['id'];?>
" title="Recheck"><i class="la la-refresh" style="font-size:24px;"></i></button>
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
              <label class="">About:</label>
              <textarea class="form-control" id="about" name="about[]" rows="3"></textarea>
            </div>
            <div class="col-lg-4">
              <label class="">Account Type:</label>
              <input type="text" class="form-control" name="accountType[]" id="accountType">
            </div>
          </div>
          <div class="form-group row">
             <div class="col-lg-4">
               <label class="">First Name:</label>
               <input type="text" class="form-control" name="firstName[]" id="firstName">
             </div>
             <div class="col-lg-4">
               <label class="">Date of Birth:</label>
               <div class="input-group">
                 <div class="input-group-prepend"><span class="input-group-text"><i class="la la-birthday-cake"></i></span></div>
                 <input type="date" class="form-control" name="dob[]" id="dob">
               </div>
             </div>
             <div class="col-lg-4">
               <label class="">Printscreen:</label>
               <input type="text" class="form-control" name="printscreen[]" id="printscreen">
             </div>
          </div>
           <div class="form-group row">
             <div class="col-lg-4">
               <label class="">Postcode:</label>
               <div class="input-group">
                 <div class="input-group-prepend"><span class="input-group-text"><i class="la la-road"></i></span></div>
                 <input type="text" class="form-control" name="postcode[]" id="postcode">
               </div>
             </div>
             <div class="col-lg-4">
               <label class="">Access Link:</label>
               <input type="text" class="form-control" name="link[]" id="link">
             </div>
             <div class="col-lg-4">
             <label class="">Telepin:</label>
             <div></div>
             <select class="custom-select form-control" name="telepin[]">
                 <option value="Yes" selected>Yes</option>
                 <option value="No">No</option>
             </select>
             <span class="form-text text-muted">Is account telepin?</span>
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
        <h5 class="modal-title">Bank Information</h5>
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="kt-portlet__body">
          <div class="form-group">
            <label>ID</label>
            <input type="text" id="blId" name="blId" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Status</label>
            <input type="text" id="blStatus" name="blStatus" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Price</label>
            <input type="text" id="blPrice" name="blPrice" class="form-control">
          </div>
          <div class="form-group">
						<label>Type</label>
						<input type="text" id="blType" name="blType" class="form-control">
					</div>
          <div class="form-group">
            <label>About</label>
            <textarea class="form-control" id="blAbout" name="blAbout" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label>First Name</label>
            <input type="text" id="blFirstName" name="blFirstName" class="form-control">
          </div>
          <div class="form-group">
            <label>Date of Birth</label>
            <input type="text" id="blDob" name="blDob" class="form-control">
          </div>
          <div class="form-group">
            <label>Printscreen</label>
            <input type="text" id="blPrintscreen" name="blPrintscreen" class="form-control">
          </div>
          <div class="form-group">
            <label>Telepin</label>
            <input type="text" id="blTelepin" name="blTelepin" class="form-control">
          </div>
          <div class="form-group">
            <label>Access Link</label>
            <input type="text" id="blLink" name="blLink" class="form-control">
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
