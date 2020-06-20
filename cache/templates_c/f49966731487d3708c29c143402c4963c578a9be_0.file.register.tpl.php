<?php
/* Smarty version 3.1.30, created on 2020-05-29 15:37:11
  from "/home/bligeoyh/public_html/template/register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ed16467bd19b3_33329593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f49966731487d3708c29c143402c4963c578a9be' => 
    array (
      0 => '/home/bligeoyh/public_html/template/register.tpl',
      1 => 1590780969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed16467bd19b3_33329593 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html lang="en" dir="ltr" class="swal2-shown swal2-height-auto">
   <head prefix="og: http://ogp.me/ns#">
      <meta charset="utf-8">
      <title>Fulls Market | Login</title>
      <base href="/">
      <meta property="og:title" content="PFM">
      <meta property="og:description" content="PFM - Your Goto Logs Shop">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="">
      <meta name="description" content="">
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
   <body class="kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading ">
      <app-root ng-version="8.0.0">
         <router-outlet></router-outlet>
         <ng-component class="ng-star-inserted">
            <div class="kt-grid kt-grid--ver kt-grid--root" style="text-align: left;">
               <div id="kt_login" class="kt-grid kt-grid--hor kt-grid--root kt-login kt-login--v1">
                  <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
                    <div class="kt-grid__item kt-grid__item--order-tablet-and-mobile-2 kt-grid kt-grid--hor kt-login__aside ng-star-inserted" style="background-image: url('../assets/images/bg-2.jpg');">
                       <div class="kt-grid__item">
                          <a href="">
                           <img alt="logo" height="130" src="../assets/images/logo.png" class="ng-star-inserted kt-logo-mobile">
                          </a>
                       </div>
                       <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver">
                          <div class="kt-grid__item kt-grid__item--middle">
                             <h4 class="kt-login__subtitle">Private shop for professional and serious individuals, The one and only, Your one-stop private logs shop, and many more.</h4>
                          </div>
                       </div>
                    </div>
                     <div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper d-block">
                       <div class="kt-login__body d-block mt-3 mr-auto ml-auto">
                           <router-outlet></router-outlet>
                           <ng-component class="ng-tns-c2-1 ng-star-inserted">
                              <div class="kt-login__form ng-trigger ng-trigger-routerTransition" style="margin-top: 0px; opacity: 1;">
                                 <div class="kt-login__title">
                                    <h3 class="ng-tns-c2-1"> Register </h3>
                                    <form class="kt-form ng-pristine ng-invalid ng-touched" method="post" novalidate="">
                                      <div class="form-group">
                                         <input class="form-control ng-untouched ng-pristine ng-invalid" name="authId" id="authId" type="text" placeholder="Username *">
                                         <validation-messages class="ng-tns-c2-1">
                                           <div class="has-danger ng-star-inserted">
                                              <div class="ng-star-inserted">
                                                 <div class="form-control-feedback ng-star-inserted userField" style="display: none;"> This field is required. </div>
                                                 <div class="form-control-feedback ng-star-inserted minUser" style="display: none;"> Minimum length of 5 characters. </div>
                                                 <div class="form-control-feedback ng-star-inserted maxUser" style="display: none;"> Maximum length of 20 characters. </div>
                                              </div>
                                           </div>
                                         </validation-messages>
                                      </div>
                                       <div class="form-group">
                                          <input class="form-control ng-untouched ng-pristine ng-invalid" name="emailId" id="emailId" placeholder="Email address *">
                                          <validation-messages class="ng-tns-c2-1">
                                            <div class="has-danger ng-star-inserted">
                                               <div class="ng-star-inserted">
                                                  <div class="form-control-feedback ng-star-inserted emailField" style="display: none;"> This field is required. </div>
                                                  <div class="form-control-feedback ng-star-inserted invalidEmail" style="display: none;"> Invalid email address. </div>
                                               </div>
                                            </div>
                                          </validation-messages>
                                       </div>
                                       <div class="form-group"><input class="form-control ng-untouched ng-pristine ng-invalid" name="authPass" id="authPass" type="password" placeholder="Password *"></div>
                                       <validation-messages class="ng-tns-c2-1">
                                         <div class="has-danger ng-star-inserted">
                                            <div class="ng-star-inserted">
                                               <div class="form-control-feedback ng-star-inserted passField" style="display: none;"> This field is required. </div>
                                               <div class="form-control-feedback ng-star-inserted minPass" style="display: none;"> Minimum length of 5 characters. </div>
                                               <div class="form-control-feedback ng-star-inserted maxPass" style="display: none;"> Maximum length of 20 characters. </div>
                                            </div>
                                         </div>
                                       </validation-messages>
                                       <div class="form-group"><input class="form-control ng-untouched ng-pristine ng-invalid" name="repeatPass" type="password" id="repeatPass" placeholder="Password (repeat)*"></div>
                                       <validation-messages class="ng-tns-c2-1">
                                         <div class="has-danger ng-star-inserted">
                                            <div class="ng-star-inserted">
                                               <div class="form-control-feedback ng-star-inserted repeatField" style="display: none;"> This field is required. </div>
                                               <div class="form-control-feedback ng-star-inserted passMismatch" style="display: none;"> Passwords do not match! </div>
                                            </div>
                                         </div>
                                       </validation-messages>
                                       <div class="kt-login__actions"><a href="../user.php?page=login"><button class="btn btn-light btn-elevate kt-login__btn-secondary" type="button" tabindex="0"><i class="fa fa-arrow-left"></i> Back</button></a><button class="btn btn-primary btn-elevate kt-login__btn-primary" type="submit" id="submitButton" disabled=""><i class="fa fa-check"></i> Submit</button></div>
                                       <input _ngcontent-wwd-c1="" id="g-recaptcha-response" name="g-recaptcha-response" type="hidden">
                                       <input type="hidden" name="registerForm" value="1">
                                    </form>
                                 </div>
                              </div>
                           </ng-component>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </ng-component>
      </app-root>
      <div class="freeze-ui" style="display: none;"></div>
      <div hidden class="swal2-container swal2-center swal2-fade" style="overflow-y: auto;" id="successModal">
       <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
          <div class="swal2-header">
             <div class="swal2-icon swal2-success" style="display: flex;">
                <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                <span class="swal2-success-line-tip"></span>
                <span class="swal2-success-line-long"></span>
                <div class="swal2-success-ring"></div>
                <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
             </div>
             <h2 class="swal2-title" id="swal2-title" style="display: flex;">Success!</h2>
          </div>
          <div class="swal2-content">
             <div id="swal2-content" style="display: block;">Account successfully registered.</div>
          </div>
          <div class="swal2-actions" style="display: flex;">
             <button type="button" id="dismissModal" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; border-left-color: rgb(48, 133, 214); border-right-color: rgb(48, 133, 214);" onclick="location.href=''">Ok</button>
          </div>
       </div>
    </div>
    <div hidden class="swal2-container swal2-center swal2-fade" style="overflow-y: auto;" id="captchaError">
     <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
        <div class="swal2-header">
           <div class="swal2-icon swal2-error swal2-animate-error-icon" style="display: flex;">
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
  <div hidden class="swal2-container swal2-center swal2-fade" style="overflow-y: auto;" id="failedModal">
   <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
      <div class="swal2-header">
        <div class="swal2-icon swal2-error swal2-animate-error-icon" style="display: flex;">
           <span class="swal2-x-mark">
           <span class="swal2-x-mark-line-left"></span>
           <span class="swal2-x-mark-line-right"></span>
           </span>
        </div>
         <h2 class="swal2-title" id="swal2-title" style="display: flex;">Failed!</h2>
      </div>
      <div class="swal2-content">
         <div id="swal2-content" style="display: block;">Account registration failed.</div>
      </div>
      <div class="swal2-actions" style="display: flex;">
         <button type="button" id="dismissFail" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; border-left-color: rgb(48, 133, 214); border-right-color: rgb(48, 133, 214);">Ok</button>
      </div>
   </div>
</div>
<div hidden class="swal2-container swal2-center swal2-fade" style="overflow-y: auto;" id="userModal">
 <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;">
    <div class="swal2-header">
      <div class="swal2-icon swal2-warning swal2-animate-error-icon" style="display: flex;">
         <span class="swal2-x-mark">
         <span class="swal2-x-mark-line-left"></span>
         <span class="swal2-x-mark-line-right"></span>
         </span>
      </div>
       <h2 class="swal2-title" id="swal2-title" style="display: flex;">Warning!</h2>
    </div>
    <div class="swal2-content">
       <div id="swal2-content" style="display: block;">Username / Email is already registered.</div>
    </div>
    <div class="swal2-actions" style="display: flex;">
       <button type="button" id="dismissUser" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; border-left-color: rgb(48, 133, 214); border-right-color: rgb(48, 133, 214);">Ok</button>
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
 src="../assets/js/573.32c5cbeb36c70c092c39.js"><?php echo '</script'; ?>
>
   </body>
</html>
<?php }
}
