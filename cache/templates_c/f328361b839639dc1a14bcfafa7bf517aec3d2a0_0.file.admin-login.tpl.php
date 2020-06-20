<?php
/* Smarty version 3.1.30, created on 2020-05-29 15:36:38
  from "/home/bligeoyh/public_html/template/admin-login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ed164464225f2_96615029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f328361b839639dc1a14bcfafa7bf517aec3d2a0' => 
    array (
      0 => '/home/bligeoyh/public_html/template/admin-login.tpl',
      1 => 1590775219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed164464225f2_96615029 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html lang="en" dir="ltr" class="swal2-shown swal2-height-auto">
   <head prefix="og: http://ogp.me/ns#">
      <meta charset="utf-8">
      <title>PFM | Control Panel</title>
      <base href="/">
      <meta property="og:title" content="PFM">
      <meta property="og:description" content="Pocket Fullz Market - Your Goto Logs Shop">
      <meta property="og:url" content="admin">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="">
      <meta name="description" content="">
      <link rel="icon" type="image/x-icon" href="../assets/images/icon16.ico">
      <link rel="shortcut icon" href="../assets/images/icon48.png" />
      <link rel="apple-touch-icon" href="../assets/images/icon72.png" />
      <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/icon72.png" />
      <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/icon96.png" />
      <link rel="apple-touch-icon" sizes="144x144" href="../assets/images/icon144.png" />
      <link rel="stylesheet" href="../assets/css/styles.51d3f002efa466d7d050.css">
      <link type="text/css" rel="stylesheet" href="../assets/css/style.bundle.css">
      <link type="text/css" rel="stylesheet" href="../assets/css/primeng.datatable.css">
      <link type="text/css" rel="stylesheet" href="../assets/css/metronic-customize.css">
      <link type="text/css" rel="stylesheet" href="../assets/css/default/metronic-customize.css">
      <link type="text/css" rel="stylesheet" href="../assets/css/metronic-customize-angular.css">
      <link type="text/css" rel="stylesheet" href="../assets/css/skins/dark.css">
      <link type="text/css" rel="stylesheet" href="../assets/css/dark.css">
      <link type="text/css" rel="stylesheet" href="../assets/css/skins/dark.css">
      <link type="text/css" rel="stylesheet" href="../assets/css/additional-css.css">
      <link type="text/css" rel="stylesheet" href="../assets/css/loginv2.css">
      <?php echo '<script'; ?>
 src="../assets/js/jquery-1.12.4.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 charset="utf-8" src="../assets/js/210.32c5cbeb36c70c092c39.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 charset="utf-8" src="../assets/js/2.a17945d6d6a899c3517a.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 charset="utf-8" src="../assets/js/16.614dd3833f5d2e8cdc57.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 charset="utf-8" src="../assets/js/8.5f5f4383f30b2964fb30.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 charset="utf-8" src="../assets/js/pace.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?render=6LeRA6wUAAAAABX67-bwdP4Qd5shjur6RlhHlv4_"><?php echo '</script'; ?>
>
   </head>
   <body  class="kt-login-v2--enabled kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">
   	<div class="kt-grid kt-grid--ver kt-grid--root">
   		<div class="kt-grid__item   kt-grid__item--fluid kt-grid  kt-grid kt-grid--hor kt-login-v2" id="kt_login_v2">
   	<div class="kt-grid__item  kt-grid  kt-grid--ver  kt-grid__item--fluid">
   		<div class="kt-login-v2__body">
   			<div class="kt-login-v2__wrapper">
   				<div class="kt-login-v2__container">
   					<div class="kt-login-v2__title">
   						<h3>Control Panel</h3>
   					</div>
   					<form class="kt-login-v2__form kt-form" action="" autocomplete="off" id="kt_login_form">
   						<div class="form-group">
   							<input class="form-control" type="text" placeholder="Username" id="username" name="username" required autocomplete="off">
   						</div>
   						<div class="form-group">
   							<input class="form-control" type="password" placeholder="Password" id="password" name="password" required autocomplete="off">
   						</div>
   						<div class="kt-login-v2__actions">
   							<button type="submit" class="btn btn-brand btn-elevate btn-pill" style="float:right;" id="kt_login_submit">Sign In</button>
   						</div>
              <input _ngcontent-wwd-c1="" id="g-recaptcha-response" name="g-recaptcha-response" type="hidden">
   					</form>
   				</div>
   			</div>
        <div class="kt-login-v2__image">
          <img src="../assets/images/admin.png" alt="">
        </div>
   		</div>
   	</div>
   	<div class="kt-grid__item">
   		<div class="kt-login-v2__footer">
   			<div class="kt-login-v2__info">
   				<a href="#" class="kt-link">&copy; 2020 PFM. All rights reserved.</a>
   			</div>
   		</div>
   	</div>
   </div>
   	</div>
    <div class="freeze-ui" style="display: none;"></div>
    <div hidden class="swal2-container swal2-center swal2-fade" style="overflow-y: auto;" id="errorModal">
     <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
        <div class="swal2-header">
           <div class="swal2-icon swal2-error swal2-animate-error-icon" style="display: flex;">
              <span class="swal2-x-mark">
              <span class="swal2-x-mark-line-left"></span>
              <span class="swal2-x-mark-line-right"></span>
              </span>
           </div>
           <h2 class="swal2-title" id="swal2-title" style="display: flex;">Login failed!</h2>
        </div>
        <div class="swal2-content">
           <div id="swal2-content" style="display: block;">Invalid user name or password</div>
        </div>
        <div class="swal2-actions" style="display: flex;">
           <button type="button" id="dismissModal" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; border-left-color: rgb(48, 133, 214); border-right-color: rgb(48, 133, 214);">Ok</button>
        </div>
     </div>
  </div>
  <div hidden class="swal2-container swal2-center swal2-fade" style="overflow-y: auto;" id="captchaError">
   <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
      <div class="swal2-header">
         <div class="swal2-icon swal2-warning swal2-animate-error-icon" style="display: flex;">
            <span class="swal2-x-mark">
            <span class="swal2-x-mark-line-left"></span>
            <span class="swal2-x-mark-line-right"></span>
            </span>
         </div>
         <h2 class="swal2-title" id="swal2-title" style="display: flex;">Captcha Error!</h2>
      </div>
      <div class="swal2-content">
         <div id="swal2-content" style="display: block;">Try refreshing your browser.</div>
      </div>
      <div class="swal2-actions" style="display: flex;">
         <button type="button" id="captchaDismiss" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; border-left-color: rgb(48, 133, 214); border-right-color: rgb(48, 133, 214);">Ok</button>
      </div>
   </div>
</div>
    <?php echo '<script'; ?>
 src="../assets/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../assets/js/polyfills-es5.8307f90de487d04b1fa3.js" nomodule=""><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../assets/js/polyfills.59c59ad684f93239a61e.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../assets/js/scripts.a5e0cae88fa522ad84d9.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../assets/js/main.f038865ff7f5122032a2.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../assets/js/9.5f5f4383f30b2964fb30.js"><?php echo '</script'; ?>
>
   </body>
</html>
<?php }
}
