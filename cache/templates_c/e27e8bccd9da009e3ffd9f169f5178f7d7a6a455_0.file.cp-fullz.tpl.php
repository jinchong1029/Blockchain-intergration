<?php
/* Smarty version 3.1.30, created on 2020-05-29 15:50:34
  from "/home/bligeoyh/public_html/template/cp-fullz.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ed1678aeea942_01761016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e27e8bccd9da009e3ffd9f169f5178f7d7a6a455' => 
    array (
      0 => '/home/bligeoyh/public_html/template/cp-fullz.tpl',
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
function content_5ed1678aeea942_01761016 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--mobile">
   <div class="kt-portlet__body">
      <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
            <div class="col-sm-12">
               <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="fullz_table" role="grid" aria-describedby="fullz_table_info" style="width: 1541px;">
                  <thead>
                    <tr role="row">
                       <th class="sorting_desc" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-sort="descending">ID</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Type</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">BIN</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Postcode</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Price</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Status</th>
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
                    </tr>
                  </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allFullz']->value, 'fl', false, 'fullzLog');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fullzLog']->value => $_smarty_tpl->tpl_vars['fl']->value) {
?>
                     <tr role="row" class="even" id="<?php echo $_smarty_tpl->tpl_vars['fl']->value['id'];?>
">
                        <td><?php echo $_smarty_tpl->tpl_vars['fl']->value['id'];?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['fl']->value['category'] == '1') {?>
                        <td><span class="badge badge-success">FRESH</span></td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['fl']->value['category'] == '2') {?>
                        <td><span class="badge badge-info">YOUNG</span></td>
                        <?php } else { ?>
                        <td><span class="badge badge-danger">OLD</span></td>
                        <?php }?>
                        <td><?php echo $_smarty_tpl->tpl_vars['fl']->value['cardBin'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['fl']->value['postcode'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['fl']->value['price'];?>
¢</td>
                        <?php if ($_smarty_tpl->tpl_vars['fl']->value['status'] == '0') {?>
                        <td data-target="flStatus"><span class="badge badge-success">Available</span></td>
                        <?php } elseif ($_smarty_tpl->tpl_vars['fl']->value['status'] == '1') {?>
                        <td data-target="flStatus"><span class="badge badge-danger">Bought</span></td>
                        <?php }?>
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
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='edit' data-id="<?php echo $_smarty_tpl->tpl_vars['fl']->value['id'];?>
" title="Edit"><i class="la la-edit" style="font-size:24px;"></i></button>
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='delete' data-id="<?php echo $_smarty_tpl->tpl_vars['fl']->value['id'];?>
" title="Delete"><i class="la la-trash" style="font-size:24px;"></i></button>
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='recheck' data-id="<?php echo $_smarty_tpl->tpl_vars['fl']->value['id'];?>
" title="Recheck"><i class="la la-refresh" style="font-size:24px;"></i></button>
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
  <form class="kt-form kt-form--label-right formGroup" enctype="multipart/form-data">
    <ul class="kt-sticky-toolbar" style="margin-top: 30px;">
      <li id="liShow" class="kt-sticky-toolbar__item" title="" data-original-title="Show Form">
        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" id="showForm" title="Show Form">
        <i class="la la-eye"></i>
        </button>
      </li>
      <li style="display:none;" id="liHide" class="kt-sticky-toolbar__item" title="" data-original-title="Hide Form">
        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" id="hideForm" title="Hide Form">
        <i class="la la-eye-slash" style="font-size:26px;"></i>
        </button>
      </li>
      <li style="display:none;" id="liAdd" class="kt-sticky-toolbar__item" data-original-title="Add Form">
        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" id="add" title="Add Form">
        <i class="la la-plus-square-o" style="font-size:26px;"></i>
        </button>
      </li>
      <li style="display:none;" id="liGenerate" class="kt-sticky-toolbar__item" data-original-title="Generate">
        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" id="generate" title="Generate">
        <i class="la la-code-fork" style="font-size:26px;"></i>
        </button>
      </li>
    </ul>
    <div class="group" style="display:none;">
      <div class="kt-portlet kt-portlet--mobile" id="fullzForm">
        <div class="kt-portlet__body">
          <div class="form-group row">
             <div class="col-lg-4">
               <label class="">Price:</label>
               <div class="input-group">
                 <div class="input-group-prepend"><span class="input-group-text"><i class="la la-dollar"></i></span></div>
                 <input type="number" class="form-control" min="1" name="price[]" id="price">
               </div>
             </div>
            <div class="col-lg-4">
              <label class="">First Name:</label>
              <input type="text" class="form-control" name="firstname[]" id="firstname">
            </div>
             <div class="col-lg-4">
              <label class="">Last Name:</label>
              <input type="text" class="form-control" name="lastname[]" id="lastname">
            </div>
          </div>
          <div class="form-group row">
             <div class="col-lg-4">
               <label class="">Mother's Maiden Name:</label>
               <div class="input-group">
                 <div class="input-group-prepend"><span class="input-group-text"><i class="la la-female"></i></span></div>
                 <input type="text" class="form-control" name="mmn[]" id="mmn">
               </div>
             </div>
             <div class="col-lg-4">
               <label class="">Date of Birth:</label>
               <div class="input-group">
                 <div class="input-group-prepend"><span class="input-group-text"><i class="la la-birthday-cake"></i></span></div>
                 <input type="date" class="form-control" name="dob[]" id="dob">
               </div>
             </div>
             <div class="col-lg-4">
               <label class="">Telephone:</label>
               <div class="input-group">
                 <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone-square"></i></span></div>
                 <input type="text" class="form-control" name="phone[]" id="phone">
               </div>
             </div>
          </div>
           <div class="form-group row">
             <div class="col-lg-4">
               <label class="">Address:</label>
               <div class="input-group">
                 <div class="input-group-prepend"><span class="input-group-text"><i class="la la-road"></i></span></div>
                 <input type="text" class="form-control" name="address[]" id="address">
               </div>
             </div>
             <div class="col-lg-4">
               <label class="">Postcode:</label>
               <input type="text" class="form-control" name="postcode[]" id="postcode">
             </div>
             <div class="col-lg-4">
               <label class="">Card Holder Name:</label>
               <input type="text" class="form-control" name="cardholdername[]" id="cardholdername">
             </div>
           </div>
           <div class="form-group row">
             <div class="col-lg-4">
               <label class="">Card Number:</label>
               <div class="input-group">
                 <div class="input-group-prepend"><span class="input-group-text"><i class="la la-credit-card"></i></span></div>
                 <input type="text" class="form-control" name="cardnumber[]" id="cardnumber">
               </div>
             </div>
             <div class="col-lg-4">
               <label class="">Card BIN:</label>
               <input type="text" class="form-control" name="cardbin[]" id="cardbin">
             </div>
             <div class="col-lg-4">
               <label class="">Expiration Date:</label>
               <input type="date" class="form-control" name="expirationdate[]" id="expirationdate">
             </div>
           </div>
           <div class="form-group row">
             <div class="col-lg-4">
               <label class="">CCV:</label>
               <input type="text" class="form-control" name="ccv[]" id="ccv">
             </div>
             <div class="col-lg-4">
               <label class="">Account Number:</label>
               <input type="text" class="form-control" name="accountnumber[]" id="accountnumber">
             </div>
             <div class="col-lg-4">
               <label class="">Username:</label>
               <input type="text" class="form-control" name="username[]" id="username">
             </div>
           </div>
           <div class="form-group row">
             <div class="col-lg-4">
               <label class="">Password:</label>
               <input type="text" class="form-control" name="password[]" id="password">
             </div>
             <div class="col-lg-4">
               <label class="">Account Type:</label>
               <div class="input-group">
                 <div class="input-group-prepend"><span class="input-group-text"><i class="la la-info"></i></span></div>
                 <input type="text" class="form-control" name="accounttype[]" id="accounttype">
               </div>
             </div>
             <div class="col-lg-4">
               <label class="">Useragent:</label>
               <input type="text" class="form-control" name="useragent[]" id="useragent">
             </div>
           </div>
           <div class="form-group row">
             <div class="col-lg-4">
               <label class="">Email:</label>
               <div class="input-group">
                 <div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
                 <input type="email" class="form-control" name="email[]" id="email">
               </div>
             </div>
             <div class="col-lg-4">
               <label class="">Sortcode:</label>
               <input type="text" class="form-control" name="sortcode[]" id="sortcode">
             </div>
             <div class="col-lg-4">
               <label class="">Victim IP:</label>
               <input type="text" class="form-control" name="victimip[]" id="victimip">
             </div>
           </div>
           <div class="form-group row">
             <div class="col-lg-4">
             <label class="">Category Group:</label>
             <div></div>
 						<select class="custom-select form-control" name="category[]">
 						  	<option value="1" selected>Fresh</option>
 						  	<option value="2">Young</option>
 						  	<option value="3">Old</option>
 						</select>
             <span class="form-text text-muted">Please select category group</span>
           </div>
           </div>
              </div>
                 <div class="kt-portlet__foot">
             <div style="float:right;">
               <div class="row">
                 <div class="col-lg-12">
                   <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md btnRemove" title="Remove">
                   <i class="la la-minus-square-o" style="font-size:26px;"></i>
                   </button>
                 </div>
               </div>
             </div>
           </div>
      </div>
    </div>
  </form>

<div class="modal fade" id="editModal" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Fullz Information</h5>
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="kt-portlet__body">
          <div class="form-group">
            <label>ID</label>
            <input type="text" id="flId" name="flId" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Status</label>
            <input type="text" id="flStatus" name="flStatus" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Price</label>
            <input type="text" id="flPrice" name="flPrice" class="form-control">
          </div>
          <div class="form-group">
						<label>Type</label>
						<input type="text" id="flCategory" name="flCategory" class="form-control" readonly>
					</div>
          <div class="form-group">
            <label>First Name</label>
            <input type="text" id="flFirstName" name="flFirstName" class="form-control">
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input type="text" id="flLastName" name="flLastName" class="form-control">
          </div>
          <div class="form-group">
            <label>Mother's Maiden Name</label>
            <input type="text" id="flMmn" name="flMmn" class="form-control">
          </div>
          <div class="form-group">
            <label>Date of Birth</label>
            <input type="text" id="flDob" name="flDob" class="form-control">
          </div>
          <div class="form-group">
            <label>Telephone</label>
            <input type="text" id="flTelephone" name="flTelephone" class="form-control">
          </div>
          <div class="form-group">
            <label>Address</label>
            <input type="text" id="flAddress" name="flAddress" class="form-control">
          </div>
          <div class="form-group">
            <label>Postcode</label>
            <input type="text" id="flPostcode" name="flPostcode" class="form-control">
          </div>
          <div class="form-group">
            <label>Card Holder Name</label>
            <input type="text" id="flCardHolder" name="flCardHolder" class="form-control">
          </div>
          <div class="form-group">
            <label>Card Number</label>
            <input type="text" id="flCardNumber" name="flCardNumber" class="form-control">
          </div>
          <div class="form-group">
            <label>Card BIN</label>
            <input type="text" id="flCardBin" name="flCardBin" class="form-control">
          </div>
          <div class="form-group">
            <label>Card Expiration</label>
            <input type="text" id="flCardExp" name="flCardExp" class="form-control">
          </div>
          <div class="form-group">
            <label>CCV/CVC</label>
            <input type="text" id="flCcv" name="flCcv" class="form-control">
          </div>
          <div class="form-group">
            <label>Account Number</label>
            <input type="text" id="flAccountNo" name="flAccountNo" class="form-control">
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" id="flUsername" name="flUsername" class="form-control">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="text" id="flPassword" name="flPassword" class="form-control">
          </div>
          <div class="form-group">
            <label>Account Type</label>
            <input type="text" id="flTypeAcc" name="flTypeAcc" class="form-control">
          </div>
          <div class="form-group">
            <label>Useragent</label>
            <input type="text" id="flUserAgent" name="flUserAgent" class="form-control">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" id="flEmail" name="flEmail" class="form-control">
          </div>
          <div class="form-group">
            <label>Sortcode</label>
            <input type="text" id="flSortcode" name="flSortcode" class="form-control">
          </div>
          <div class="form-group">
            <label>Victim IP</label>
            <input type="text" id="flVictimIp" name="flVictimIp" class="form-control">
          </div>
          <input type="hidden" id="editId">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-ban"></i> Cancel</button>
        <button type="button" class="btn btn-outline-success" id="editBtn"><i class="fa fa-save"></i> Save</button>
      </div>
    </div>
  </div>
</div>

<input type="hidden" id="deleteId">

</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
