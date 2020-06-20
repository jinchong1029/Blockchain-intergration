<?php
/* Smarty version 3.1.30, created on 2020-05-29 15:39:48
  from "/home/bligeoyh/public_html/template/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ed165045ef875_19559149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82f2cd37455ea7494f93158676849b84bdd97fd4' => 
    array (
      0 => '/home/bligeoyh/public_html/template/home.tpl',
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
function content_5ed165045ef875_19559149 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


   <div class="kt-container kt-container--fluid  kt-grid__item kt-grid__item--fluid">
     <div class="kt-portlet">
<div class="kt-portlet__body kt-portlet__body--fit">
<div class="row row-no-padding row-col-separator-xl">
<div class="col-md-12 col-lg-12 col-xl-6">
<div class="kt-widget1">
<div class="kt-widget1__item">
<div class="kt-widget1__info">
<h3 class="kt-widget1__title">Account Type</h3>
</div>
<span class="kt-widget1__number kt-font-brand"><?php echo $_smarty_tpl->tpl_vars['userDetails']->value['accountType'];?>
</span>
</div>
<div class="kt-widget1__item">
<div class="kt-widget1__info">
<h3 class="kt-widget1__title">Available Credits</h3>
</div>
<span class="kt-widget1__number kt-font-success"><?php echo $_smarty_tpl->tpl_vars['userDetails']->value['balance'];?>
¢</span>
</div>

<div class="kt-widget1__item">
<div class="kt-widget1__info">
<h3 class="kt-widget1__title">Total Purchase</h3>
</div>
<span class="kt-widget1__number kt-font-danger"><?php echo $_smarty_tpl->tpl_vars['userDetails']->value['totalPurchase'];?>
</span>
</div>

</div>
</div>
<div class="col-md-12 col-lg-12 col-xl-6">
<div class="kt-widget1">
<div class="kt-widget1__item">
<div class="kt-widget1__info">
<h3 class="kt-widget1__title">Account Status</h3>
</div>
<span class="kt-widget1__number kt-font-brand"><?php echo $_smarty_tpl->tpl_vars['userDetails']->value['accountStatus'];?>
</span>
</div>

<div class="kt-widget1__item">
<div class="kt-widget1__info">
<h3 class="kt-widget1__title">Recent Log Activity</h3>
</div>
<span class="kt-widget1__number kt-font-success"><?php echo $_smarty_tpl->tpl_vars['userDetails']->value['recentLogon'];?>
</span>
</div>

<div class="kt-widget1__item">
<div class="kt-widget1__info">
<h3 class="kt-widget1__title">Recent IP Logon</h3>
</div>
<span class="kt-widget1__number kt-font-danger"><?php echo $_smarty_tpl->tpl_vars['userDetails']->value['recentIpLogon'];?>
</span>
</div>

</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-4 col-lg-12">
<div class="kt-portlet kt-bg-dark kt-portlet--skin-solid kt-portlet--height-fluid">
<div class="kt-portlet__head kt-portlet__head--noborder">
<div class="kt-portlet__head-label">
<h3 class="kt-portlet__head-title">
News & Announcement
</h3>
</div>
</div>
<div class="kt-portlet__body">
<div class="kt-widget7 kt-widget7--skin-light">
<div class="kt-widget7__desc">
<h3><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</h3>
<?php echo $_smarty_tpl->tpl_vars['news']->value['description'];?>

</div>
<div class="kt-widget7__content">
<div class="kt-widget7__userpic">
<img src="../assets/images/profile-user-2.png" alt="">
</div>
<div class="kt-widget7__info">
<h4 class="kt-widget7__username">
PFM Admin
</h4>
<span class="kt-widget7__time">
<?php echo $_smarty_tpl->tpl_vars['news']->value['date'];?>

</span>
</div>
</div>
<div class="kt-widget7__button">
<a class="btn btn-brand" href="#" role="button" data-toggle="modal" data-target="#allNews">View All</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-8 col-lg-12">
<div class="kt-portlet kt-portlet--height-fluid">
<div class="kt-portlet__head">
<div class="kt-portlet__head-label">
<h3 class="kt-portlet__head-title">
Recent Updates
</h3>
</div>
</div>
<div class="kt-portlet__body">
<div class="tab-content">
<div class="tab-pane active" id="kt_widget3_tab1_content">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['recentlyAdded']->value, 'ra', false, 'ryAdded');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ryAdded']->value => $_smarty_tpl->tpl_vars['ra']->value) {
?>
<div class="kt-timeline-v3">
  <div class="kt-timeline-v3__items">
    <div class="kt-timeline-v3__item kt-timeline-v3__item--danger">
      <span class="kt-timeline-v3__item-time"><?php echo $_smarty_tpl->tpl_vars['ra']->value['date'];?>
</span>
      <div class="kt-timeline-v3__item-desc">
        <span class="kt-timeline-v3__item-text"><?php echo $_smarty_tpl->tpl_vars['ra']->value['name'];?>
</span><br>
        <span class="kt-timeline-v3__item-user-name"><a class="kt-link kt-link--dark kt-timeline-v3__itek-link">Sold By <?php echo $_smarty_tpl->tpl_vars['ra']->value['addedby'];?>
</a></span>
      </div>
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
</div>

<div class="modal fade" id="allNews" tabindex="-1" role="dialog" aria-labelledby="allNewsModal" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-lg" role="document">
 <div class="modal-content">
     <div class="modal-header">
         <h5 class="modal-title" id="allNewsModal">News & Announcements</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         </button>
     </div>
     <div class="modal-body">
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allNews']->value, 'gn', false, 'getNews');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['getNews']->value => $_smarty_tpl->tpl_vars['gn']->value) {
?>
       <div class="kt-timeline-v3">
         <div class="kt-timeline-v3__items">
           <div class="kt-timeline-v3__item kt-timeline-v3__item--danger">
             <span class="kt-timeline-v3__item-time"><?php echo $_smarty_tpl->tpl_vars['gn']->value['date'];?>
</span>
             <div class="kt-timeline-v3__item-desc">
               <span class="kt-timeline-v3__item-text"><?php echo $_smarty_tpl->tpl_vars['gn']->value['title'];?>
</span><br>
               <span class="kt-timeline-v3__item-user-name"><a class="kt-link kt-link--dark kt-timeline-v3__itek-link"><?php echo $_smarty_tpl->tpl_vars['gn']->value['description'];?>
</a></span>
            </div>
            </div>
          </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

     </div>
     <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     </div>
 </div>
</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
