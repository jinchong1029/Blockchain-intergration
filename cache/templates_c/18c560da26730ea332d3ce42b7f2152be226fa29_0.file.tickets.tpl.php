<?php
/* Smarty version 3.1.30, created on 2020-05-31 00:45:16
  from "/home/bligeoyh/public_html/template/tickets.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ed3365c7e6d28_37002743',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18c560da26730ea332d3ce42b7f2152be226fa29' => 
    array (
      0 => '/home/bligeoyh/public_html/template/tickets.tpl',
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
function content_5ed3365c7e6d28_37002743 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--mobile">
  <div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Tickets
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<div class="kt-portlet__head-toolbar">
        <button type="button" id="tixAddBtn" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Submit a Ticket" aria-haspopup="true" aria-expanded="false">
          <i class="la la-plus-square-o" style="font-size:24px;"></i>
        </button>
</div>
</div>
	</div>
   <div class="kt-portlet__body">
      <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
            <div class="col-sm-12">
               <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="tickets_table" role="grid" aria-describedby="fullz_table_info">
                  <thead>
                     <tr role="row">
                        <th class="sorting_desc" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1" aria-sort="descending">Date Created</th>
                        <th class="sorting" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1">Status</th>
                        <th hidden class="sorting" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1">Ticket ID</th>
                        <th class="sorting" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1">Title</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ticketLogs']->value, 'tl', false, 'ticketLog');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ticketLog']->value => $_smarty_tpl->tpl_vars['tl']->value) {
?>
                     <tr role="row" class="even" id="<?php echo $_smarty_tpl->tpl_vars['tl']->value['id'];?>
">
                       <td data-target="tlDate"><?php echo $_smarty_tpl->tpl_vars['tl']->value['date'];?>
</td>
                       <?php if ($_smarty_tpl->tpl_vars['tl']->value['is_active'] == '0') {?>
                       <td data-target="tlActive"><span class="badge badge-primary">OPEN</span></td>
                       <?php } elseif ($_smarty_tpl->tpl_vars['tl']->value['is_active'] == '1') {?>
                       <td data-target="tlActive"><span class="badge badge-danger">REPLIED</span></td>
                       <?php } else { ?>
                       <td data-target="tlActive"><span class="badge badge-success">SOLVED</span></td>
                       <?php }?>
                        <td hidden data-target="tlId"><?php echo $_smarty_tpl->tpl_vars['tl']->value['id'];?>
</td>
                        <td data-target="tlTitle"><?php echo $_smarty_tpl->tpl_vars['tl']->value['title'];?>
</td>
                        <td nowrap="">
                           <button type="button" style="display:block; margin:auto;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='reply' data-id="<?php echo $_smarty_tpl->tpl_vars['tl']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['tl']->value['id'];?>
" title="Reply"><i class="la la-mail-reply" style="font-size:24px;"></i></button>
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

<div class="modal fade" id="ticketSubmit" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Submit a Ticket</h5>
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="kt-portlet__body">
          <div class="form-group">
            <label>Title/Subject</label>
            <input type="text" id="tixTitle" name="tixTitle" class="form-control">
          </div>
    			<div class="form-group row">
    				<div class="col-lg-12 col-md-12 col-sm-12">
              <div class="md-editor">
                 <textarea name="tixMessage" id="tixMessage" class="form-control md-input" data-provide="markdown" rows="10" style="resize: none;"></textarea>
              </div>
    				</div>
    			</div>
    		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-ban"></i> Cancel</button>
        <button type="button" class="btn btn-outline-success" id="submitTix"><i class="fa fa-reply-all"></i> Submit</button>
      </div>
    </div>
  </div>
</div>

</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
