<?php
/* Smarty version 3.1.30, created on 2020-05-29 15:45:44
  from "/home/bligeoyh/public_html/template/cp-tutorials.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ed16668441143_39758470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d18468316dd5c7f05cfe43f813ac0c9d4294bbe' => 
    array (
      0 => '/home/bligeoyh/public_html/template/cp-tutorials.tpl',
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
function content_5ed16668441143_39758470 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--mobile">
   <div class="kt-portlet__body">
      <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
            <div class="col-sm-12">
               <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="tutorials_table" role="grid" aria-describedby="fullz_table_info" style="width: 1541px;">
                  <thead>
                    <tr role="row">
                       <th class="sorting_desc" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-sort="descending">ID</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Status</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Information</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Price</th>
                       <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
                       <th hidden></th>
                       <th hidden></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allTutorials']->value, 'et', false, 'eachTut');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['eachTut']->value => $_smarty_tpl->tpl_vars['et']->value) {
?>
                     <tr role="row" class="even" id="<?php echo $_smarty_tpl->tpl_vars['et']->value['id'];?>
">
                        <td data-target="etId"><?php echo $_smarty_tpl->tpl_vars['et']->value['id'];?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['et']->value['status'] == '0') {?>
                        <td data-target="etStatus"><span class="badge badge-success">Available</span></td>
                        <?php } else { ?>
                        <td data-target="etStatus"><span class="badge badge-danger">Bought</span></td>
                        <?php }?>
                        <td data-target="etInfo"><?php echo $_smarty_tpl->tpl_vars['et']->value['info'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['et']->value['price'];?>
¢</td>
                        <td nowrap="" style="">
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='edit' data-id="<?php echo $_smarty_tpl->tpl_vars['et']->value['id'];?>
" title="Edit"><i class="la la-edit" style="font-size:24px;"></i></button>
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='delete' data-id="<?php echo $_smarty_tpl->tpl_vars['et']->value['id'];?>
" title="Delete"><i class="la la-trash" style="font-size:24px;"></i></button>
                        </td>
                        <td hidden data-target="etPrice"><?php echo $_smarty_tpl->tpl_vars['et']->value['price'];?>
</td>
                        <td hidden data-target="etLink"><?php echo $_smarty_tpl->tpl_vars['et']->value['link'];?>
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
             <div class="col-lg-6">
               <label class="">Price:</label>
               <div class="input-group">
                 <div class="input-group-prepend"><span class="input-group-text"><i class="la la-dollar"></i></span></div>
                 <input type="number" class="form-control" min="1" name="price[]" id="price">
               </div>
             </div>
             <div class="col-lg-6">
               <label class="">Download Link:</label>
               <input type="text" class="form-control" name="link[]" id="link">
             </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-12">
              <label class="">Information:</label>
              <textarea class="form-control" id="info" name="info[]" rows="3"></textarea>
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
        <h5 class="modal-title">Tools Information</h5>
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="kt-portlet__body">
          <div class="form-group">
            <label>ID</label>
            <input type="text" id="etId" name="etId" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Status</label>
            <input type="text" id="etStatus" name="etStatus" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Information</label>
            <textarea class="form-control" id="etInfo" name="etInfo" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label>Price</label>
            <input type="text" id="etPrice" name="etPrice" class="form-control">
          </div>
          <div class="form-group">
            <label>Download Link</label>
            <input type="text" id="etLink" name="etLink" class="form-control">
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
