<?php
/* Smarty version 3.1.30, created on 2020-05-29 15:51:52
  from "/home/bligeoyh/public_html/template/cp-tos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ed167d831bd89_07563559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a7197a6cd4daf4789e84586aaa4e631964cddd6' => 
    array (
      0 => '/home/bligeoyh/public_html/template/cp-tos.tpl',
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
function content_5ed167d831bd89_07563559 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--mobile">
  <div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Terms of Services
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<div class="kt-portlet__head-toolbar">
        <button type="button" id="tosAddBtn" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Publish News" aria-haspopup="true" aria-expanded="false">
          <i class="la la-plus-square-o" style="font-size:24px;"></i>
        </button>
</div>
</div>
	</div>
   <div class="kt-portlet__body">
      <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
            <div class="col-sm-12">
               <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="tos_table" role="grid" aria-describedby="fullz_table_info">
                  <thead>
                     <tr role="row">
                        <th class="sorting_desc" tabindex="0" aria-controls="tos_table" rowspan="1" colspan="1" aria-sort="descending">ID</th>
                        <th class="sorting" tabindex="0" aria-controls="tos_table" rowspan="1" colspan="1">Title</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
                        <th hidden></th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allTos']->value, 'et', false, 'eachTos');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['eachTos']->value => $_smarty_tpl->tpl_vars['et']->value) {
?>
                     <tr role="row" class="even" id="<?php echo $_smarty_tpl->tpl_vars['et']->value['id'];?>
">
                       <td data-target="etId"><?php echo $_smarty_tpl->tpl_vars['et']->value['id'];?>
</td>
                        <td hidden data-target="etDescription"><?php echo $_smarty_tpl->tpl_vars['et']->value['description'];?>
</td>
                        <td data-target="etTitle"><?php echo $_smarty_tpl->tpl_vars['et']->value['title'];?>
</td>
                        <td nowrap="">
                          <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='edit' data-id="<?php echo $_smarty_tpl->tpl_vars['et']->value['id'];?>
" title="Edit"><i class="la la-edit" style="font-size:24px;"></i></button>
                          <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='delete' data-id="<?php echo $_smarty_tpl->tpl_vars['et']->value['id'];?>
" title="Delete"><i class="la la-trash" style="font-size:24px;"></i></button>
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
        <h5 class="modal-title">View/Edit TOS</h5>
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
            <label>Title</label>
            <input type="text" id="etTitle" name="etTitle" class="form-control">
          </div>
          <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" id="etDescription" name="etDescription" rows="3"></textarea>
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

<div class="modal fade" id="genModal" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Publish TOS</h5>
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="kt-portlet__body">
          <form id="genForm">
            <div class="form-group">
              <label>Title</label>
              <input type="text" id="genTitle" name="genTitle" class="form-control">
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" id="genDescription" name="genDescription" rows="3"></textarea>
            </div>
            <input type="hidden" id="genId">
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-ban"></i> Cancel</button>
        <button type="button" class="btn btn-outline-success" id="genBtn"><i class="fa fa-reply-all"></i> Submit</button>
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
