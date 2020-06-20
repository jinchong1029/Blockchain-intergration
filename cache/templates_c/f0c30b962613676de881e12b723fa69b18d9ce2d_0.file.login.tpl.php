<?php
/* Smarty version 3.1.30, created on 2020-05-29 15:37:14
  from "/home/bligeoyh/public_html/template/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ed1646a126be8_68066618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0c30b962613676de881e12b723fa69b18d9ce2d' => 
    array (
      0 => '/home/bligeoyh/public_html/template/login.tpl',
      1 => 1590736689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed1646a126be8_68066618 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html lang="en" dir="ltr" class="swal2-shown swal2-height-auto">
   <head prefix="og: http://ogp.me/ns#">
      <meta charset="utf-8">
      <title>PFM | Login</title>
      <base href="/">
      <meta property="og:title" content="PFM">
      <meta property="og:description" content="PFM - Your Goto Logs Shop">
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
                           <ng-component _nghost-wwd-c1="" class="ng-tns-c1-0 ng-star-inserted">
                              <div _ngcontent-wwd-c1="" class="kt-login__form ng-trigger ng-trigger-routerTransition" style="margin-top: 0px; opacity: 1;">
                                 <div _ngcontent-wwd-c1="" class="kt-login__title">
                                    <h3 _ngcontent-wwd-c1="" class="m-0"> Authenticate </h3>
                                 </div>
                                 <form _ngcontent-wwd-c1="" class="kt-form ng-pristine ng-invalid ng-touched" method="post">
                                    <div _ngcontent-wwd-c1="" class="form-group">
                                       <input _ngcontent-wwd-c1="" class="form-control m-input ng-pristine ng-invalid ng-touched" autofocus="" autocomplete="new-password" name="username" required="" type="text" placeholder="Username*"><!---->
                                    </div>
                                    <div _ngcontent-wwd-c1="" class="form-group">
                                       <input _ngcontent-wwd-c1="" class="form-control m-input ng-untouched ng-pristine ng-invalid" autocomplete="new-password" maxlength="32" name="password" required="" type="password" placeholder="Password *"><!---->
                                       <validation-messages _ngcontent-wwd-c1="" class="ng-tns-c1-0 ng-star-inserted" style="">
                                       </validation-messages>
                                    </div>
                                    <div _ngcontent-wwd-c1="" class="form-group mt-4"><label _ngcontent-wwd-c1="" class="kt-checkbox"><input _ngcontent-wwd-c1="" class="form-control ng-untouched ng-pristine ng-valid" name="rememberMe" type="checkbox" value="true">Remember me <span _ngcontent-wwd-c1="" class="ng-tns-c1-0"></span></label></div>
                                    <div _ngcontent-wwd-c1="" class="kt-login__actions"><a _ngcontent-wwd-c1="" class="kt-link kt-login__link-forgot" id="forget-password" href="../user.php?page=forgotpass">Forgot password?</a><button id="authButton" _ngcontent-wwd-c1="" class="btn btn-primary btn-elevate kt-login__btn-primary" type="submit" disabled="disabled">Log in</button></div>
                                    <input _ngcontent-wwd-c1="" id="g-recaptcha-response" name="g-recaptcha-response" type="hidden"><!---->
                                    <input type="hidden" name="loginForm" value="1">
                                 </form>
                                 <div _ngcontent-wwd-c1="" class="kt-login__options ng-tns-c1-0 ng-star-inserted">
                                    <a _ngcontent-wwd-c1="" class="btn btn-outline-secondary kt-btn btn-sm ng-tns-c1-0 ng-star-inserted" title="Register" href="../user.php?page=register">Register</a>
                                 </div>
                                 <br>
                                 <div _ngcontent-wwd-c1="" class="kt-login__divider">
                                      <div _ngcontent-wwd-c1="" class="kt-divider"><span _ngcontent-wwd-c1="" class="ng-tns-c1-0"></span><span _ngcontent-wwd-c1="" class="ng-tns-c1-0">Copyrights © Pocket Fullz Market 2020. All rights reserved.</span><span _ngcontent-wwd-c1="" class="ng-tns-c1-0"></span></div>
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
 src="../assets/js/additional-js.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../assets/js/306.3556248eb29b1cbcb44c.js"><?php echo '</script'; ?>
>
   </body>
</html>
<?php }
}
