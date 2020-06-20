<?php
/* Smarty version 3.1.30, created on 2020-05-29 15:37:02
  from "/home/bligeoyh/public_html/template/cp-dashboard.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ed1645ecd9157_43924744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e0252becf45f84f6f8207a3f03ac66a127dbb26' => 
    array (
      0 => '/home/bligeoyh/public_html/template/cp-dashboard.tpl',
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
function content_5ed1645ecd9157_43924744 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


   <div class="kt-container kt-container--fluid  kt-grid__item kt-grid__item--fluid">
     <div class="row">
       <div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
      <div class="kt-portlet kt-portlet--fit kt-portlet--height-fluid">
       <div class="kt-portlet__body kt-portlet__body--fluid">
         <button class="btn btn-outline-success btn-lg" style="text-align:center; width:inherit;">OPEN MARKET</button>
       </div>
      </div>
      </div>
     </div>
     <div class="row">
      <div class="col-lg-4 col-xl-4 order-lg-1 order-xl-1">
     <div class="kt-portlet kt-portlet--fit kt-portlet--height-fluid">
      <div class="kt-portlet__body kt-portlet__body--fluid">
        <div class="kt-widget-3 kt-widget-3--brand">
          <div class="kt-widget-3__content">
            <div class="kt-widget-3__content-info">
              <div class="kt-widget-3__content-section">
                <div class="kt-widget-3__content-title">Users</div>
                <div class="kt-widget-3__content-desc">Total Registered Users</div>
              </div>
              <div class="kt-widget-3__content-section">
                <span class="kt-widget-3__content-bedge"><i class="fa fa-user-check"></i></span>
                <span class="kt-widget-3__content-number"><?php echo $_smarty_tpl->tpl_vars['registeredUsers']->value;?>
</span>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
     </div>
      <div class="col-lg-4 col-xl-4 order-lg-1 order-xl-1">
     <div class="kt-portlet kt-portlet--fit kt-portlet--height-fluid">
      <div class="kt-portlet__body kt-portlet__body--fluid">
        <div class="kt-widget-3 kt-widget-3--danger">
          <div class="kt-widget-3__content">
            <div class="kt-widget-3__content-info">
              <div class="kt-widget-3__content-section">
                <div class="kt-widget-3__content-title">Account Logs</div>
                <div class="kt-widget-3__content-desc">Total Account Logs</div>
              </div>
              <div class="kt-widget-3__content-section">
                <span class="kt-widget-3__content-bedge"><i class="fa fa-users-cog"></i></span>
                <span class="kt-widget-3__content-number"><?php echo $_smarty_tpl->tpl_vars['webLogsCount']->value;?>
</span>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
     </div>
      <div class="col-lg-4 col-xl-4 order-lg-1 order-xl-1">
     <div class="kt-portlet kt-portlet--fit kt-portlet--height-fluid">
      <div class="kt-portlet__body kt-portlet__body--fluid">
        <div class="kt-widget-3 kt-widget-3--success">
          <div class="kt-widget-3__content">
            <div class="kt-widget-3__content-info">
              <div class="kt-widget-3__content-section">
                <div class="kt-widget-3__content-title">Bank Logs</div>
                <div class="kt-widget-3__content-desc">Total Bank Logs</div>
              </div>
              <div class="kt-widget-3__content-section">
                <span class="kt-widget-3__content-bedge"><i class="fa fa-users-cog"></i></span>
                <span class="kt-widget-3__content-number"><?php echo $_smarty_tpl->tpl_vars['bankLogsCount']->value;?>
</span>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
     </div>
     </div>
     <div class="row">
       <div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
       <div class="kt-portlet kt-portlet--height-fluid">
       	<div class="kt-portlet__body kt-portlet__body--fluid">
       		<div class="kt-widget-21">
       			<div class="kt-widget-21__title">
       				<div class="kt-widget-21__label">Fullz</div>
       				<img src="../market/assets/images/iconbox_bg.png" class="kt-widget-21__bg" alt="bg">
       			</div>
       			<div class="kt-widget-21__data">
       				<div class="kt-widget-21__legends">
       					<div id="freshFullz" data-id="<?php echo $_smarty_tpl->tpl_vars['freshFullzCount']->value;?>
" class="kt-widget-21__legend">
       						<i class="kt-bg-brand"></i>
       						<span>Fresh</span>
       					</div>
       					<div id="oldFullz" data-id="<?php echo $_smarty_tpl->tpl_vars['oldFullzCount']->value;?>
" class="kt-widget-21__legend">
       						<i class="kt-shape-bg-color-4"></i>
       						<span>Old</span>
       					</div>
       					<div id="youngFullz" data-id="<?php echo $_smarty_tpl->tpl_vars['youngFullzCount']->value;?>
" class="kt-widget-21__legend">
       						<i class="kt-shape-bg-color-3"></i>
       						<span>Young</span>
       					</div>
       				</div>
       				<div class="kt-widget-21__chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
       					<div class="kt-widget-21__stat"><?php echo $_smarty_tpl->tpl_vars['fullzCount']->value;?>
</div>
       					<canvas id="kt_widget_technologies_chart" style="height: 110px; width: 110px; display: block;" width="110" height="110" class="chartjs-render-monitor"></canvas>
       				</div>
       			</div>
       		</div>
       	</div>
       </div>
      </div>
      <div class="col-lg-4 col-xl-4 order-lg-1 order-xl-1">
     <div class="kt-portlet kt-portlet--fit">
      <div class="kt-portlet__body kt-portlet__body--fluid">
        <div class="kt-widget-3 kt-widget-3--accent">
          <div class="kt-widget-3__content">
            <div class="kt-widget-3__content-info">
              <div class="kt-widget-3__content-section">
                <div class="kt-widget-3__content-title">Tutorials</div>
                <div class="kt-widget-3__content-desc">Total Tutorials Count</div>
              </div>
              <div class="kt-widget-3__content-section">
                <span class="kt-widget-3__content-bedge"><i class="fa fa-users-cog"></i></span>
                <span class="kt-widget-3__content-number"><?php echo $_smarty_tpl->tpl_vars['tutorialsCount']->value;?>
</span>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
     </div>
      <div class="col-lg-4 col-xl-4 order-lg-1 order-xl-1">
     <div class="kt-portlet kt-portlet--fit">
      <div class="kt-portlet__body kt-portlet__body--fluid">
        <div class="kt-widget-3 kt-widget-3--focus">
          <div class="kt-widget-3__content">
            <div class="kt-widget-3__content-info">
              <div class="kt-widget-3__content-section">
                <div class="kt-widget-3__content-title">Tools</div>
                <div class="kt-widget-3__content-desc">Total Tools Count</div>
              </div>
              <div class="kt-widget-3__content-section">
                <span class="kt-widget-3__content-bedge"><i class="fa fa-users-cog"></i></span>
                <span class="kt-widget-3__content-number"><?php echo $_smarty_tpl->tpl_vars['toolsCount']->value;?>
</span>
              </div>
            </div>
          </div>
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
