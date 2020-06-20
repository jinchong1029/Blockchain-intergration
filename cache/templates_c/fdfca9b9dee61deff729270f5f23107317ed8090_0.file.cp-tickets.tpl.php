<?php
/* Smarty version 3.1.30, created on 2020-05-29 15:51:51
  from "/home/bligeoyh/public_html/template/cp-tickets.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ed167d70f5a98_72599510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdfca9b9dee61deff729270f5f23107317ed8090' => 
    array (
      0 => '/home/bligeoyh/public_html/template/cp-tickets.tpl',
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
function content_5ed167d70f5a98_72599510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--mobile">
  <div class="kt-portlet__body">
     <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
        <div class="row">
           <div class="col-sm-12">
              <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="tickets_table" role="grid" aria-describedby="fullz_table_info">
                 <thead>
                    <tr role="row">
                       <th class="sorting_desc" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1" aria-sort="descending">Date Created</th>
                       <th class="sorting" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1">Status</th>
                       <th class="sorting" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1">Ticket ID</th>
                       <th class="sorting" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1">Title</th>
                       <th class="sorting" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1">User ID</th>
                       <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
                    </tr>
                 </thead>
                 <tbody>
                   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allTickets']->value, 'et', false, 'eachTickets');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['eachTickets']->value => $_smarty_tpl->tpl_vars['et']->value) {
?>
                    <tr role="row" class="even" id="<?php echo $_smarty_tpl->tpl_vars['et']->value['ticketId'];?>
">
                      <td><?php echo $_smarty_tpl->tpl_vars['et']->value['ticketDate'];?>
</td>
                      <?php if ($_smarty_tpl->tpl_vars['et']->value['ticketStatus'] == '0') {?>
                      <td><span class="badge badge-primary">OPEN</span></td>
                      <?php } elseif ($_smarty_tpl->tpl_vars['et']->value['ticketStatus'] == '1') {?>
                      <td><span class="badge badge-danger">REPLIED</span></td>
                      <?php } else { ?>
                      <td><span class="badge badge-success">SOLVED</span></td>
                      <?php }?>
                       <td><?php echo $_smarty_tpl->tpl_vars['et']->value['ticketId'];?>
</td>
                       <td><?php echo $_smarty_tpl->tpl_vars['et']->value['ticketTitle'];?>
</td>
                       <td><?php echo $_smarty_tpl->tpl_vars['et']->value['userName'];?>
</td>
                       <td nowrap="">
                         <?php if ($_smarty_tpl->tpl_vars['et']->value['ticketStatus'] != '2') {?>
                         <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='reply' data-id="<?php echo $_smarty_tpl->tpl_vars['et']->value['ticketId'];?>
" title="Reply"><i class="la la-mail-reply" style="font-size:24px;"></i></button>
                         <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='solved' data-id="<?php echo $_smarty_tpl->tpl_vars['et']->value['ticketId'];?>
" title="Mark as Solved"><i class="la la-check-circle-o" style="font-size:24px;"></i></button>
                         <?php }?>
                          <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='delete' data-id="<?php echo $_smarty_tpl->tpl_vars['et']->value['ticketId'];?>
" title="Delete"><i class="la la-trash-o" style="font-size:24px;"></i></button>
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

<input type="hidden" id="solvedId">
<input type="hidden" id="deleteId">

</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
