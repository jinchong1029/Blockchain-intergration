<?php
/* Smarty version 3.1.30, created on 2020-05-31 00:41:41
  from "/home/bligeoyh/public_html/template/history.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ed33585b665c5_47554831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72a306bb8bb3701fce9e44d0301e9e1c79e23c67' => 
    array (
      0 => '/home/bligeoyh/public_html/template/history.tpl',
      1 => 1590776584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ed33585b665c5_47554831 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--mobile">
   <div class="kt-portlet__head">
      <div class="kt-portlet__head-label">
         <h3 class="kt-portlet__head-title">
            Fullz Logs
         </h3>
      </div>
      <div class="kt-portlet__head-toolbar">
         <div class="kt-portlet__head-toolbar">
           <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" title="Save All" aria-haspopup="true" aria-expanded="false">
           <i class="la la-sellsy"></i>
           </button>
         </div>
      </div>
   </div>
   <div class="kt-portlet__body">
      <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
            <div class="col-sm-12">
               <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="kt_table_1" role="grid" aria-describedby="kt_table_1_info" style="width: 1541px;">
                  <thead>
                     <tr role="row">
                        <th class="sorting_desc" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-sort="descending">ID</th>
                        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Type</th>
                        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">BIN</th>
                        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Name</th>
                        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Postcode</th>
                        <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Date Bought</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fullzLogs']->value, 'fl', false, 'fullzLog');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fullzLog']->value => $_smarty_tpl->tpl_vars['fl']->value) {
?>
                     <tr role="row" class="even" id="<?php echo $_smarty_tpl->tpl_vars['fl']->value['id'];?>
">
                        <td><?php echo $_smarty_tpl->tpl_vars['fl']->value['id'];?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['fl']->value['category'] == '1') {?>
                        <td><span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">FRESH</span></td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['fl']->value['category'] == '2') {?>
                        <td><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">YOUNG</span></td>
                        <?php } else { ?>
                        <td><span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">OLD</span></td>
                        <?php }?>
                        <td><?php echo $_smarty_tpl->tpl_vars['fl']->value['cardBin'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['fl']->value['firstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['fl']->value['lastName'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['fl']->value['postcode'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['fl']->value['buyedDate'];?>
</td>
                        <td hidden id="<?php echo $_smarty_tpl->tpl_vars['fl']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['fl']->value['id'];?>
</td>
                        <td hidden data-target="flPrice"><?php echo $_smarty_tpl->tpl_vars['fl']->value['price'];?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['fl']->value['category'] == '1') {?>
                        <td hidden data-target="flCategory">FRESH</td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['fl']->value['category'] == '2') {?>
                        <td hidden data-target="flCategory">YOUNG</td>
                        <?php } else { ?>
                        <td hidden data-target="flCategory">OLD</td>
                        <?php }?>
                        <td hidden data-target="flFirstName"><?php echo $_smarty_tpl->tpl_vars['fl']->value['firstName'];?>
</td>
                        <td hidden data-target="flLastName"><?php echo $_smarty_tpl->tpl_vars['fl']->value['lastName'];?>
</td>
                        <td hidden data-target="flMmn"><?php echo $_smarty_tpl->tpl_vars['fl']->value['mmn'];?>
</td>
                        <td hidden data-target="flDob"><?php echo $_smarty_tpl->tpl_vars['fl']->value['dob'];?>
</td>
                        <td hidden data-target="flTelephone"><?php echo $_smarty_tpl->tpl_vars['fl']->value['telephone'];?>
</td>
                        <td hidden data-target="flAddress"><?php echo $_smarty_tpl->tpl_vars['fl']->value['address'];?>
</td>
                        <td hidden data-target="flPostcode"><?php echo $_smarty_tpl->tpl_vars['fl']->value['postcode'];?>
</td>
                        <td hidden data-target="flCardHolder"><?php echo $_smarty_tpl->tpl_vars['fl']->value['cardHolder'];?>
</td>
                        <td hidden data-target="flCardNumber"><?php echo $_smarty_tpl->tpl_vars['fl']->value['cardNumber'];?>
</td>
                        <td hidden data-target="flCardBin"><?php echo $_smarty_tpl->tpl_vars['fl']->value['cardBin'];?>
</td>
                        <td hidden data-target="flCardExp"><?php echo $_smarty_tpl->tpl_vars['fl']->value['cardExp'];?>
</td>
                        <td hidden data-target="flCcv"><?php echo $_smarty_tpl->tpl_vars['fl']->value['ccv'];?>
</td>
                        <td hidden data-target="flAccountNo"><?php echo $_smarty_tpl->tpl_vars['fl']->value['accountNo'];?>
</td>
                        <td hidden data-target="flUsername"><?php echo $_smarty_tpl->tpl_vars['fl']->value['username'];?>
</td>
                        <td hidden data-target="flPassword"><?php echo $_smarty_tpl->tpl_vars['fl']->value['password'];?>
</td>
                        <td hidden data-target="flTypeAcc"><?php echo $_smarty_tpl->tpl_vars['fl']->value['typeAcc'];?>
</td>
                        <td hidden data-target="flUserAgent"><?php echo $_smarty_tpl->tpl_vars['fl']->value['userAgent'];?>
</td>
                        <td hidden data-target="flEmail"><?php echo $_smarty_tpl->tpl_vars['fl']->value['email'];?>
</td>
                        <td hidden data-target="flSortcode"><?php echo $_smarty_tpl->tpl_vars['fl']->value['sortCode'];?>
</td>
                        <td hidden data-target="flVictimIp"><?php echo $_smarty_tpl->tpl_vars['fl']->value['victimIP'];?>
</td>
                        <td nowrap="" style="">
                          <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Save"><i class="la la-cloud-download"></i></a>
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='fullzView' data-id="<?php echo $_smarty_tpl->tpl_vars['fl']->value['id'];?>
" title="View"><i class="la la-eye"></i></button>
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

<div class="kt-portlet kt-portlet--mobile">
   <div class="kt-portlet__head">
      <div class="kt-portlet__head-label">
         <h3 class="kt-portlet__head-title">
            Bank Logs
         </h3>
      </div>
      <div class="kt-portlet__head-toolbar">
         <div class="kt-portlet__head-toolbar">
           <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" title="Save All" aria-haspopup="true" aria-expanded="false">
           <i class="la la-sellsy"></i>
           </button>
         </div>
      </div>
   </div>
   <div class="kt-portlet__body">
      <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
            <div class="col-sm-12">
               <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="kt_table_2" role="grid" aria-describedby="kt_table_2_info" style="width: 1541px;">
                  <thead>
                     <tr role="row">
                        <th class="sorting_desc" tabindex="0" aria-controls="kt_table_2" rowspan="1" colspan="1" style="width: 63.25px;" aria-sort="descending">Order ID</th>
                        <th class="sorting" tabindex="0" aria-controls="kt_table_2" rowspan="1" colspan="1" style="width: 121.25px;">Bank Name</th>
                        <th class="sorting" tabindex="0" aria-controls="kt_table_2" rowspan="1" colspan="1" style="width: 135.25px;">Screenshot</th>
                        <th class="sorting" tabindex="0" aria-controls="kt_table_2" rowspan="1" colspan="1" style="width: 214.25px;">Date Bought</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 78.5px;" aria-label="Actions">Actions</th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bankLogs']->value, 'bl', false, 'bankLog');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['bankLog']->value => $_smarty_tpl->tpl_vars['bl']->value) {
?>
                     <tr role="row" class="even" id="<?php echo $_smarty_tpl->tpl_vars['bl']->value['id'];?>
">
                        <td><?php echo $_smarty_tpl->tpl_vars['bl']->value['id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['bl']->value['accountType'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['bl']->value['printscreen'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['bl']->value['date'];?>
</td>
                        <td hidden="hidden" id="<?php echo $_smarty_tpl->tpl_vars['bl']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['bl']->value['id'];?>
</td>
                        <td hidden="hidden" data-target="aboutFrm"><?php echo $_smarty_tpl->tpl_vars['bl']->value['about'];?>
</td>
                        <td hidden="hidden" data-target="priceFrm"><?php echo $_smarty_tpl->tpl_vars['bl']->value['price'];?>
</td>
                        <td hidden="hidden" data-target="accountTypeFrm"><?php echo $_smarty_tpl->tpl_vars['bl']->value['accountType'];?>
</td>
                        <td hidden="hidden" data-target="firstNameFrm"><?php echo $_smarty_tpl->tpl_vars['bl']->value['firstName'];?>
</td>
                        <td hidden="hidden" data-target="dobFrm"><?php echo $_smarty_tpl->tpl_vars['bl']->value['dob'];?>
</td>
                        <td hidden="hidden" data-target="screenshotFrm"><?php echo $_smarty_tpl->tpl_vars['bl']->value['printscreen'];?>
</td>
                        <td hidden="hidden" data-target="telepinFrm"><?php echo $_smarty_tpl->tpl_vars['bl']->value['telepin'];?>
</td>
                        <td hidden="hidden" data-target="noteLinkFrm"><?php echo $_smarty_tpl->tpl_vars['bl']->value['link'];?>
</td>
                        <td nowrap="" style="">
                          <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Save" ><i class="la la-cloud-download"></i></a>
                          <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='bankView' data-id="<?php echo $_smarty_tpl->tpl_vars['bl']->value['id'];?>
" title="View"><i class="la la-eye"></i></button>
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

<div class="kt-portlet kt-portlet--mobile">
   <div class="kt-portlet__head">
      <div class="kt-portlet__head-label">
         <h3 class="kt-portlet__head-title">
            Web Accounts
         </h3>
      </div>
      <div class="kt-portlet__head-toolbar">
         <div class="kt-portlet__head-toolbar">
           <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" title="Save All" aria-haspopup="true" aria-expanded="false">
           <i class="la la-sellsy"></i>
           </button>
         </div>
      </div>
   </div>
   <div class="kt-portlet__body">
      <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
            <div class="col-sm-12">
               <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="kt_table_3" role="grid" aria-describedby="kt_table_3_info" style="width: 1541px;">
                  <thead>
                     <tr role="row">
                        <th class="sorting_desc" tabindex="0" aria-controls="kt_table_3" rowspan="1" colspan="1" style="width: 63.25px;" aria-sort="descending">Order ID</th>
                        <th class="sorting" tabindex="0" aria-controls="kt_table_3" rowspan="1" colspan="1" style="width: 121.25px;">Type</th>
                        <th class="sorting" tabindex="0" aria-controls="kt_table_3" rowspan="1" colspan="1" style="width: 214.25px;">Date Bought</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 78.5px;" aria-label="Actions">Actions</th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                        <th hidden></th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['webLogs']->value, 'wl', false, 'webLog');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['webLog']->value => $_smarty_tpl->tpl_vars['wl']->value) {
?>
                     <tr role="row" class="even" id="<?php echo $_smarty_tpl->tpl_vars['wl']->value['id'];?>
">
                        <td><?php echo $_smarty_tpl->tpl_vars['wl']->value['id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['wl']->value['type'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['wl']->value['buyedDate'];?>
</td>
                        <td hidden id="<?php echo $_smarty_tpl->tpl_vars['wl']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['wl']->value['id'];?>
</td>
                        <td hidden data-target="webPriceFrm"><?php echo $_smarty_tpl->tpl_vars['wl']->value['price'];?>
</td>
                        <td hidden data-target="webUsernameFrm"><?php echo $_smarty_tpl->tpl_vars['wl']->value['username'];?>
</td>
                        <td hidden data-target="webPasswordFrm"><?php echo $_smarty_tpl->tpl_vars['wl']->value['password'];?>
</td>
                        <td hidden data-target="webInfoFrm"><?php echo $_smarty_tpl->tpl_vars['wl']->value['info'];?>
</td>
                        <td hidden data-target="webTypeFrm"><?php echo $_smarty_tpl->tpl_vars['wl']->value['type'];?>
</td>
                        <td nowrap="" style="">
                          <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Save"><i class="la la-cloud-download"></i></a>
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='accountView' data-id="<?php echo $_smarty_tpl->tpl_vars['wl']->value['id'];?>
" title="View"><i class="la la-eye"></i></button>
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

<div class="kt-portlet kt-portlet--mobile">

   <div class="kt-portlet__head">

      <div class="kt-portlet__head-label">

         <h3 class="kt-portlet__head-title">

            Tools

         </h3>

      </div>

      <div class="kt-portlet__head-toolbar">

         <div class="kt-portlet__head-toolbar">

           <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" title="Save All" aria-haspopup="true" aria-expanded="false">

           <i class="la la-sellsy"></i>

           </button>

         </div>

      </div>

   </div>

   <div class="kt-portlet__body">

      <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

         <div class="row">

            <div class="col-sm-12">

               <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="kt_table_4" role="grid" aria-describedby="kt_table_4_info" style="width: 1541px;">

                  <thead>

                     <tr role="row">

                        <th class="sorting_desc" tabindex="0" aria-controls="kt_table_4" rowspan="1" colspan="1" style="width: 63.25px;" aria-sort="descending">Order ID</th>

                        <th class="sorting" tabindex="0" aria-controls="kt_table_4" rowspan="1" colspan="1" style="width: 121.25px;">Information</th>

                        <th class="sorting" tabindex="0" aria-controls="kt_table_4" rowspan="1" colspan="1" style="width: 214.25px;">Date Bought</th>

                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 78.5px;" aria-label="Actions">Actions</th>

                        <th hidden></th>

                        <th hidden></th>

                        <th hidden></th>

                        <th hidden></th>

                        <th hidden></th>

                        <th hidden></th>

                     </tr>

                  </thead>

                  <tbody>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['toolsList']->value, 'et', false, 'eachTool');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['eachTool']->value => $_smarty_tpl->tpl_vars['et']->value) {
?>

                     <tr role="row" class="even" id="<?php echo $_smarty_tpl->tpl_vars['et']->value['id'];?>
">

                        <td><?php echo $_smarty_tpl->tpl_vars['et']->value['id'];?>
</td>

                        <td><?php echo $_smarty_tpl->tpl_vars['et']->value['info'];?>
</td>

                        <td><?php echo $_smarty_tpl->tpl_vars['et']->value['buyedDate'];?>
</td>

                        <td hidden data-target="toolPrice"><?php echo $_smarty_tpl->tpl_vars['et']->value['price'];?>
</td>

                        <td hidden data-target="toolInfo"><?php echo $_smarty_tpl->tpl_vars['et']->value['info'];?>
</td>

                        <td hidden data-target="toolPreview"><?php echo $_smarty_tpl->tpl_vars['et']->value['preview'];?>
</td>

                        <td hidden data-target="toolLink"><?php echo $_smarty_tpl->tpl_vars['et']->value['link'];?>
</td>

                        <td nowrap="" style="">

                          <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Save"><i class="la la-cloud-download"></i></a>

                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='toolView' data-id="<?php echo $_smarty_tpl->tpl_vars['et']->value['id'];?>
" title="View"><i class="la la-eye"></i></button>

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


<div class="kt-portlet kt-portlet--mobile">

   <div class="kt-portlet__head">

      <div class="kt-portlet__head-label">

         <h3 class="kt-portlet__head-title">

            Tutorials

         </h3>

      </div>

      <div class="kt-portlet__head-toolbar">

         <div class="kt-portlet__head-toolbar">

           <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" title="Save All" aria-haspopup="true" aria-expanded="false">

           <i class="la la-sellsy"></i>

           </button>

         </div>

      </div>

   </div>

   <div class="kt-portlet__body">

      <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

         <div class="row">

            <div class="col-sm-12">

               <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="kt_table_5" role="grid" aria-describedby="kt_table_5_info" style="width: 1541px;">

                  <thead>

                     <tr role="row">

                        <th class="sorting_desc" tabindex="0" aria-controls="kt_table_5" rowspan="1" colspan="1" style="width: 63.25px;" aria-sort="descending">Order ID</th>

                        <th class="sorting" tabindex="0" aria-controls="kt_table_5" rowspan="1" colspan="1" style="width: 121.25px;">Information</th>

                        <th class="sorting" tabindex="0" aria-controls="kt_table_5" rowspan="1" colspan="1" style="width: 214.25px;">Date Bought</th>

                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 78.5px;" aria-label="Actions">Actions</th>

                        <th hidden></th>

                        <th hidden></th>

                        <th hidden></th>

                        <th hidden></th>

                        <th hidden></th>

                        <th hidden></th>

                     </tr>

                  </thead>

                  <tbody>

                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tutorialsList']->value, 'ett', false, 'eachTutorial');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['eachTutorial']->value => $_smarty_tpl->tpl_vars['ett']->value) {
?>

                     <tr role="row" class="even" id="<?php echo $_smarty_tpl->tpl_vars['ett']->value['id'];?>
">

                        <td><?php echo $_smarty_tpl->tpl_vars['ett']->value['id'];?>
</td>

                        <td><?php echo $_smarty_tpl->tpl_vars['ett']->value['info'];?>
</td>

                        <td><?php echo $_smarty_tpl->tpl_vars['ett']->value['buyedDate'];?>
</td>

                        <td hidden data-target="tutorialPrice"><?php echo $_smarty_tpl->tpl_vars['ett']->value['price'];?>
</td>

                        <td hidden data-target="tutorialInfo"><?php echo $_smarty_tpl->tpl_vars['ett']->value['info'];?>
</td>

                        <td hidden data-target="tutorialLink"><?php echo $_smarty_tpl->tpl_vars['ett']->value['link'];?>
</td>

                        <td nowrap="" style="">

                          <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Save"><i class="la la-cloud-download"></i></a>

                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='tutorialView' data-id="<?php echo $_smarty_tpl->tpl_vars['ett']->value['id'];?>
" title="View"><i class="la la-eye"></i></button>

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


<div class="modal fade" id="fullzModal" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Fullz Informations</h5>
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="kt-portlet__body">

          <div class="form-group">
            <label>Price</label>
            <input type="text" id="flPrice" name="flPrice" class="form-control" readonly>
          </div>
          <div class="form-group">
						<label>Type</label>
						<input type="text" id="flCategory" name="flCategory" class="form-control" readonly>
					</div>
          <div class="form-group">
            <label>First Name</label>
            <input type="text" id="flFirstName" name="flFirstName" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" id="flLastName" name="flLastName" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Date of Birth</label>
            <input type="text" id="flDob" name="flDob" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Telephone</label>
            <input type="text" id="flTelephone" name="flTelephone" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Address</label>
            <input type="text" id="flAddress" name="flAddress" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Postcode</label>
            <input type="text" id="flPostcode" name="flPostcode" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Card Holder Name</label>
            <input type="text" id="flCardHolder" name="flCardHolder" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Card Number</label>
            <input type="text" id="flCardNumber" name="flCardNumber" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Card BIN</label>
            <input type="text" id="flCardBin" name="flCardBin" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Card Expiration</label>
            <input type="text" id="flCardExp" name="flCardExp" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>CCV/CVC</label>
            <input type="text" id="flCcv" name="flCcv" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Account Number</label>
            <input type="text" id="flAccountNo" name="flAccountNo" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" id="flUsername" name="flUsername" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" id="flPassword" name="flPassword" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Account Type</label>
            <input type="text" id="flTypeAcc" name="flTypeAcc" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Useragent</label>
            <input type="text" id="flUserAgent" name="flUserAgent" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" id="flEmail" name="flEmail" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Sortcode</label>
            <input type="text" id="flSortcode" name="flSortcode" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Victim IP</label>
            <input type="text" id="flVictimIp" name="flVictimIp" class="form-control" readonly>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-brand" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="bankModal" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Bank Informations</h5>
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="kt-portlet__body">
          <div class="form-group">
						<label>About</label>
            <textarea class="form-control" id="aboutFrm" name="aboutFrm" rows="3" readonly></textarea>
					</div>
          <div class="form-group">
            <label>Price</label>
            <input type="text" id="priceFrm" name="priceFrm" class="form-control" readonly>
          </div>
          <div class="form-group">
						<label>Account Type</label>
						<input type="text" id="accountTypeFrm" name="accountTypeFrm" class="form-control" readonly>
					</div>
          <div class="form-group">
            <label>First Name</label>
            <input type="text" id="firstNameFrm" name="firstNameFrm" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Date of Birth</label>
            <input type="text" id="dobFrm" name="dobFrm" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Screenshot</label>
            <input type="text" id="screenshotFrm" name="screenshotFrm" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Telepin</label>
            <input type="text" id="telepinFrm" name="telepinFrm" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Access Note Link</label>
            <input type="text" id="noteLinkFrm" name="noteLinkFrm" class="form-control" readonly>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-brand" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="accountModal" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Account Informations</h5>
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="kt-portlet__body">
          <div class="form-group">
						<label>Type</label>
						<input type="text" id="webTypeFrm" name="webTypeFrm" class="form-control" readonly>
					</div>
          <div class="form-group">
            <label>Price</label>
            <input type="text" id="webPriceFrm" name="webPriceFrm" class="form-control" readonly>
          </div>
          <div class="form-group">
						<label>Username</label>
						<input type="text" id="webUsernameFrm" name="webUsernameFrm" class="form-control" readonly>
					</div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" id="webPasswordFrm" name="webPasswordFrm" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Additional Information</label>
            <textarea class="form-control" id="webInfoFrm" name="webInfoFrm" rows="3" readonly></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-brand" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="toolModal" data-backdrop="static" role="dialog">

  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title">Tool Informations</h5>

        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

        <div class="kt-portlet__body">

          <div class="form-group">

						<label>Price</label>

						<input type="text" id="toolPrice" name="toolPrice" class="form-control" readonly>

					</div>

          <div class="form-group">

            <label>Information</label>

            <textarea class="form-control" id="toolInfo" name="toolInfo" rows="3"></textarea>

          </div>
          <div class="form-group">

						<label>Preview</label>

						<input type="text" id="toolPreview" name="toolPreview" class="form-control">

					</div>
          <div class="form-group">

            <label>Download Link</label>

            <input type="text" id="toolLink" name="toolLink" class="form-control">

          </div>


        </div>

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-outline-brand" data-dismiss="modal">Close</button>

      </div>

    </div>

  </div>

</div>

<div class="modal fade" id="tutorialModal" data-backdrop="static" role="dialog">

  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title">Tutorial Informations</h5>

        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

        <div class="kt-portlet__body">

          <div class="form-group">

						<label>Price</label>

						<input type="text" id="tutorialPrice" name="tutorialPrice" class="form-control" readonly>

					</div>

          <div class="form-group">

            <label>Information</label>

            <textarea class="form-control" id="tutorialInfo" name="tutorialInfo" rows="3"></textarea>

          </div>
          <div class="form-group">

            <label>Download Link</label>

            <input type="text" id="tutorialLink" name="tutorialLink" class="form-control">

          </div>


        </div>

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-outline-brand" data-dismiss="modal">Close</button>

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
