<?php
/* Smarty version 3.1.30, created on 2020-05-31 00:45:42
  from "/home/bligeoyh/public_html/template/tos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ed33676d1e5b8_79372088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43e78c10b9949722bad931bb836e9f041ec31256' => 
    array (
      0 => '/home/bligeoyh/public_html/template/tos.tpl',
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
function content_5ed33676d1e5b8_79372088 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

  <div class="row">
     <div class="col-xl-12">
        <div class="kt-portlet">
          <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
              <h3 class="kt-portlet__head-title">
                Terms of Service
              </h3>
            </div>
          </div>
           <div class="kt-portlet__body">
             <div class="accordion accordion-outline accordion-outline--padded" id="accordionExample">
               <?php $_smarty_tpl->_assignInScope('tosId', "tos-");
?>
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tosDetails']->value, 'et', false, 'eachTos');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['eachTos']->value => $_smarty_tpl->tpl_vars['et']->value) {
?>
               <div class="card">
                 <div class="card-header">
                   <div class="card-title collapsed" data-toggle="collapse" role="button" data-target="#<?php echo $_smarty_tpl->tpl_vars['tosId']->value;
echo $_smarty_tpl->tpl_vars['et']->value['id'];?>
" aria-expanded="false" aria-controls="<?php echo $_smarty_tpl->tpl_vars['tosId']->value;
echo $_smarty_tpl->tpl_vars['et']->value['id'];?>
">
                     <?php echo $_smarty_tpl->tpl_vars['et']->value['title'];?>

                   </div>
                 </div>
                 <div id="<?php echo $_smarty_tpl->tpl_vars['tosId']->value;
echo $_smarty_tpl->tpl_vars['et']->value['id'];?>
" class="card-body-wrapper collapse" data-parent="#accordionExample" style="">
                   <div class="card-body">
                     <p><?php echo $_smarty_tpl->tpl_vars['et']->value['description'];?>
</p>
                   </div>
                 </div>
               </div>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

             </div>
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
