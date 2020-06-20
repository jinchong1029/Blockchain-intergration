{include file="header.tpl"}

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--mobile">
   <div class="kt-portlet__body">
      <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
            <div class="col-sm-12">
               <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="banks_table" role="grid" aria-describedby="fullz_table_info" style="width: 1541px;">
                  <thead>
                     <tr role="row">
                        <th class="sorting_desc" tabindex="0" aria-controls="banks_table" rowspan="1" colspan="1" style="width: 121.25px;" aria-sort="descending">Bank Name</th>
                        <th class="sorting" tabindex="0" aria-controls="banks_table" rowspan="1" colspan="1" style="width: 159.25px;">Screenshot</th>
                        <th class="sorting" tabindex="0" aria-controls="banks_table" rowspan="1" colspan="1" style="width: 164.25px;">Telepin</th>
                        <th class="sorting" tabindex="0" aria-controls="banks_table" rowspan="1" colspan="1" style="width: 214.25px;">Price</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 78.5px;" aria-label="Actions">Actions</th>
                     </tr>
                  </thead>
                  <tbody>
                    {foreach $bankLogs as $bankLog=>$bl}
                     <tr role="row" class="even" id="{$bl['id']}">
                        <td data-target="bankType">{$bl['accountType']}</td>
                        <td data-target="bankScreenshot">{$bl['printscreen']}</td>
                        <td data-target="bankTelepin"><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">{$bl['telepin']}</span></td>
                        <td data-target="bankPrice">{$bl['price']}¢</td>
                        <td nowrap="">
                           <button type="button" style="display:block; margin:auto;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='purchase' data-id="{$bl['id']}" title="Purchase"><i class="la la-cart-arrow-down" style="font-size:24px;"></i></button>
                        </td>
                     </tr>
                     {/foreach}
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="purchaseModal" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Purchase Information</h5>
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="kt-portlet__body">
          <div class="form-group">
						<label>Bank Name</label>
						<input type="text" id="bankType" name="bankType" class="form-control" readonly>
					</div>
          <div class="form-group">
            <label>Screenshot</label>
            <input type="text" id="bankScreenshot" name="bankScreenshot" class="form-control" readonly>
          </div>
          <div class="form-group">
						<label>Telepin</label>
						<input type="text" id="bankTelepin" name="bankTelepin" class="form-control" readonly>
					</div>
          <div class="form-group">
            <label>Price</label>
            <input type="text" id="bankPrice" name="bankPrice" class="form-control" readonly>
          </div>
          <input type="hidden" id="transId">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-ban"></i> Cancel</button>
        <button type="button" class="btn btn-outline-success" id="buyBtn"><i class="fa fa-dollar-sign"></i> Purchase</button>
      </div>
    </div>
  </div>
</div>

<div class="toast toast-custom toast-fill fade hide toast-bottom toast-right" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3500" id="kt_toast_1">
	<div class="toast-header">
		<i class="toast-icon flaticon-cart kt-font-success"></i>
		<span class="toast-title">New order has been placed</span>
		<small class="toast-time">a few seconds ago</small>
	</div>
	<div class="toast-body">
		Your order has been transferred to your inventory.
	</div>
</div>

<div class="toast toast-custom toast-fill fade hide toast-bottom toast-right" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3500" id="kt_toast_2">
	<div class="toast-header">
		<i class="toast-icon flaticon2-attention kt-font-warning"></i>
		<span class="toast-title">Not enough credits</span>
		<small class="toast-time">a few seconds ago</small>
	</div>
	<div class="toast-body">
		Your purchase encountered an error.
	</div>
</div>

<div class="toast toast-custom toast-fill fade hide toast-bottom toast-right" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3500" id="kt_toast_3">
	<div class="toast-header">
		<i class="toast-icon flaticon2-attention kt-font-danger"></i>
		<span class="toast-title">Error purchasing</span>
		<small class="toast-time">a few seconds ago</small>
	</div>
	<div class="toast-body">
		Please refresh your browser. If persist, contact admin.
	</div>
</div>

</div>
</div>

{include file="footer.tpl"}
