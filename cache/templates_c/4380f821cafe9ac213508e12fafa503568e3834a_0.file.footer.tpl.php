<?php
/* Smarty version 3.1.30, created on 2020-05-29 15:37:02
  from "/home/bligeoyh/public_html/template/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ed1645ed5c1d0_36526225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4380f821cafe9ac213508e12fafa503568e3834a' => 
    array (
      0 => '/home/bligeoyh/public_html/template/footer.tpl',
      1 => 1590736689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed1645ed5c1d0_36526225 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal fade" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
 <div class="modal-content">
     <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLongTitle">About</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         </button>
     </div>
     <div class="modal-body">
         <p>Pocket Fullz Market — Your go-to logs black market</p>
     </div>
     <div class="modal-footer">
         <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
     </div>
 </div>
</div>
</div>

<div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
  <br>
   <div class="kt-container  kt-container--fluid ">
      <div class="kt-footer__copyright">
         Copyrights&nbsp;&copy;2020&nbsp;<a class="kt-link">Pocket Fullz Market</a>.&nbsp;All rights reserved.
      </div>
      <div class="kt-footer__menu">
         <a data-toggle="modal" data-target="#aboutModal" class="kt-footer__menu-link kt-link">About</a>
      </div>
   </div>
</div>
</div>
</div>

<div id="kt_scrolltop" class="kt-scrolltop">
<i class="fa fa-arrow-up"></i>
</div>
<?php echo '<script'; ?>
 src="../assets/js/ktapp.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/vendors.bundle.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/scripts.bundle.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['page']->value == 'home') {
echo '<script'; ?>
 src="../assets/js/dashboard.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'profile') {
echo '<script'; ?>
 src="../assets/js/582.ddf4d5a8a32517e68a0.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/237.06d078bd382847f10.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'history') {
echo '<script'; ?>
 src="../assets/js/datatables.bundle.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.basic.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'fullz') {
echo '<script'; ?>
 src="../assets/js/datatables.bundle.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.fullz.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'banks') {
echo '<script'; ?>
 src="../assets/js/datatables.bundle.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.banks.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'accounts') {
echo '<script'; ?>
 src="../assets/js/datatables.bundle.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.accounts.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'tickets') {
echo '<script'; ?>
 src="../assets/js/datatables.bundle.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.tickets.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'showticket') {
echo '<script'; ?>
 src="../assets/js/datatables.bundle.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.tix.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'addfunds') {
echo '<script'; ?>
 src="../assets/js/wizard-form.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/countdown.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/payment-countdown.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'cp_dashboard') {
echo '<script'; ?>
 src="../assets/js/widget-fullz.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'cp_users') {
echo '<script'; ?>
 src="../assets/js/datatables.bundle.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.cp-users.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'cp_fullz') {
echo '<script'; ?>
 src="../assets/js/jquery.multifield.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.bundle.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.cp-fullz.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'cp_banks') {
echo '<script'; ?>
 src="../assets/js/jquery.multifield.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.bundle.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.cp-banks.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'cp_accounts') {
echo '<script'; ?>
 src="../assets/js/jquery.multifield.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.bundle.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.cp-accounts.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'cp_news') {
echo '<script'; ?>
 src="../assets/js/jquery.multifield.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.bundle.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.cp-news.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'cp_tickets') {
echo '<script'; ?>
 src="../assets/js/datatables.bundle.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.cp-tickets.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'cp_replyticket') {
echo '<script'; ?>
 src="../assets/js/datatables.bundle.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.cp-rtickets.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'cp_tos') {
echo '<script'; ?>
 src="../assets/js/datatables.bundle.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.cp-tos.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'cp_tools') {
echo '<script'; ?>
 src="../assets/js/jquery.multifield.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.bundle.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.cp-tools.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'cp_tutorials') {
echo '<script'; ?>
 src="../assets/js/jquery.multifield.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.bundle.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.cp-tutorials.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'cp_payments') {
echo '<script'; ?>
 src="../assets/js/datatables.bundle.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.cp-payments.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'adminprofile') {
echo '<script'; ?>
 src="../assets/js/582.ddf4d5a8a32517e68a0.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/237.06d078bd382847f11.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'tutorials') {
echo '<script'; ?>
 src="../assets/js/datatables.bundle.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.tutorials.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == 'tools') {
echo '<script'; ?>
 src="../assets/js/datatables.bundle.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/datatables.tools.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php }
if ($_smarty_tpl->tpl_vars['userDetails']->value['accountType'] != 'Admin') {
echo '<script'; ?>
 src="../assets/js/dash.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['userDetails']->value['accountType'] == 'Admin') {
echo '<script'; ?>
 src="../assets/js/cp-dash.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php }?>
</body>
</html>
<?php }
}
