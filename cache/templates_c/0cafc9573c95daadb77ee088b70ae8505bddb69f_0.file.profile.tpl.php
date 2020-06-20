<?php
/* Smarty version 3.1.30, created on 2020-05-30 04:31:55
  from "/home/bligeoyh/public_html/template/profile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ed219fb0e1f35_44488102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cafc9573c95daadb77ee088b70ae8505bddb69f' => 
    array (
      0 => '/home/bligeoyh/public_html/template/profile.tpl',
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
function content_5ed219fb0e1f35_44488102 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



   <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-wizard-v4" id="kt_wizard_v4">

<div class="kt-portlet">
<div class="kt-portlet__body kt-portlet__body--fit">
<div class="kt-grid">
<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">
<form class="kt-form" id="profileForm" name="profileForm">
<div class="kt-wizard-v4__content">
<div class="alert alert-dark" role="alert" id="updateSuccess" style="display:none;">
            <div class="alert-icon"><i class="flaticon-interface-5"></i></div>
            <div class="alert-text">Your account information has been updated successfully.</div>
</div>
<div class="alert alert-danger" role="alert" id="emailUsed" style="display:none;">
            <div class="alert-icon"><i class="flaticon-close"></i></div>
            <div class="alert-text">Email is already in used. Please use a different email.</div>
</div>
<div class="alert alert-danger" role="alert" id="updateFail" style="display:none;">
            <div class="alert-icon"><i class="flaticon-close"></i></div>
            <div class="alert-text">Failed to update account information, Please refresh browser.</div>
</div>
<div class="kt-heading kt-heading--md">Edit your account details</div>
<div class="kt-form__section kt-form__section--first">
<div class="kt-wizard-v4__form">
  <div class="row">
    <div class="col-xl-6">
      <div class="form-group">
        <label>User ID</label>
        <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['userDetails']->value['pfmId'];?>
" disabled>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="form-group">
        <label>Creation Date</label>
        <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['userDetails']->value['creationTime'];?>
" disabled>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label>Username</label>
    <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['userDetails']->value['username'];?>
" disabled>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="updateEmail" id="updateEmail" value="<?php echo $_smarty_tpl->tpl_vars['userDetails']->value['email'];?>
" disabled>
  </div>
  <div class="row">
    <div class="col-xl-6">
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="updatePass" id="updatePass" value="********" disabled>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="form-group">
        <label>Repeat Password</label>
        <input type="password" class="form-control" id="validatePass" value="********" disabled>
      </div>
    </div>
    <input type="hidden" name="profileForm" value="1">
  </div>
</div>
</div>
</div>
<div class="kt-form__actions">
<div id="invisible">
</div>
<div class="btn btn-danger btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" id="cancelButton" style="display:none;">
Cancel
</div>
<button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u text-right" id="updateButton" style="display:none;" disabled>
Update
</button>
<div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u text-right" id="editButton">
Edit
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>	</div>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
