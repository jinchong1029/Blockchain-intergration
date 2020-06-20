{include file="header.tpl"}

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
                    {foreach $fullzLogs as $fullzLog=>$fl}
                     <tr role="row" class="even" id="{$fl['id']}">
                        <td>{$fl['id']}</td>
                        {if $fl['category'] eq '1'}
                        <td><span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">FRESH</span></td>
                        {elseif $fl['category'] eq '2'}
                        <td><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">YOUNG</span></td>
                        {else}
                        <td><span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">OLD</span></td>
                        {/if}
                        <td>{$fl['cardBin']}</td>
                        <td>{$fl['firstName']} {$fl['lastName']}</td>
                        <td>{$fl['postcode']}</td>
                        <td>{$fl['buyedDate']}</td>
                        <td hidden id="{$fl['id']}">{$fl['id']}</td>
                        <td hidden data-target="flPrice">{$fl['price']}</td>
                        {if $fl['category'] eq '1'}
                        <td hidden data-target="flCategory">FRESH</td>
                        {elseif $fl['category'] eq '2'}
                        <td hidden data-target="flCategory">YOUNG</td>
                        {else}
                        <td hidden data-target="flCategory">OLD</td>
                        {/if}
                        <td hidden data-target="flFirstName">{$fl['firstName']}</td>
                        <td hidden data-target="flLastName">{$fl['lastName']}</td>
                        <td hidden data-target="flMmn">{$fl['mmn']}</td>
                        <td hidden data-target="flDob">{$fl['dob']}</td>
                        <td hidden data-target="flTelephone">{$fl['telephone']}</td>
                        <td hidden data-target="flAddress">{$fl['address']}</td>
                        <td hidden data-target="flPostcode">{$fl['postcode']}</td>
                        <td hidden data-target="flCardHolder">{$fl['cardHolder']}</td>
                        <td hidden data-target="flCardNumber">{$fl['cardNumber']}</td>
                        <td hidden data-target="flCardBin">{$fl['cardBin']}</td>
                        <td hidden data-target="flCardExp">{$fl['cardExp']}</td>
                        <td hidden data-target="flCcv">{$fl['ccv']}</td>
                        <td hidden data-target="flAccountNo">{$fl['accountNo']}</td>
                        <td hidden data-target="flUsername">{$fl['username']}</td>
                        <td hidden data-target="flPassword">{$fl['password']}</td>
                        <td hidden data-target="flTypeAcc">{$fl['typeAcc']}</td>
                        <td hidden data-target="flUserAgent">{$fl['userAgent']}</td>
                        <td hidden data-target="flEmail">{$fl['email']}</td>
                        <td hidden data-target="flSortcode">{$fl['sortCode']}</td>
                        <td hidden data-target="flVictimIp">{$fl['victimIP']}</td>
                        <td nowrap="" style="">
                          <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Save"><i class="la la-cloud-download"></i></a>
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='fullzView' data-id="{$fl['id']}" title="View"><i class="la la-eye"></i></button>
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
                    {foreach $bankLogs as $bankLog=>$bl}
                     <tr role="row" class="even" id="{$bl['id']}">
                        <td>{$bl['id']}</td>
                        <td>{$bl['accountType']}</td>
                        <td>{$bl['printscreen']}</td>
                        <td>{$bl['date']}</td>
                        <td hidden="hidden" id="{$bl['id']}">{$bl['id']}</td>
                        <td hidden="hidden" data-target="aboutFrm">{$bl['about']}</td>
                        <td hidden="hidden" data-target="priceFrm">{$bl['price']}</td>
                        <td hidden="hidden" data-target="accountTypeFrm">{$bl['accountType']}</td>
                        <td hidden="hidden" data-target="firstNameFrm">{$bl['firstName']}</td>
                        <td hidden="hidden" data-target="dobFrm">{$bl['dob']}</td>
                        <td hidden="hidden" data-target="screenshotFrm">{$bl['printscreen']}</td>
                        <td hidden="hidden" data-target="telepinFrm">{$bl['telepin']}</td>
                        <td hidden="hidden" data-target="noteLinkFrm">{$bl['link']}</td>
                        <td nowrap="" style="">
                          <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Save" ><i class="la la-cloud-download"></i></a>
                          <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='bankView' data-id="{$bl['id']}" title="View"><i class="la la-eye"></i></button>
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
                    {foreach $webLogs as $webLog=>$wl}
                     <tr role="row" class="even" id="{$wl['id']}">
                        <td>{$wl['id']}</td>
                        <td>{$wl['type']}</td>
                        <td>{$wl['buyedDate']}</td>
                        <td hidden id="{$wl['id']}">{$wl['id']}</td>
                        <td hidden data-target="webPriceFrm">{$wl['price']}</td>
                        <td hidden data-target="webUsernameFrm">{$wl['username']}</td>
                        <td hidden data-target="webPasswordFrm">{$wl['password']}</td>
                        <td hidden data-target="webInfoFrm">{$wl['info']}</td>
                        <td hidden data-target="webTypeFrm">{$wl['type']}</td>
                        <td nowrap="" style="">
                          <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Save"><i class="la la-cloud-download"></i></a>
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='accountView' data-id="{$wl['id']}" title="View"><i class="la la-eye"></i></button>
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

                    {foreach $toolsList as $eachTool=>$et}

                     <tr role="row" class="even" id="{$et['id']}">

                        <td>{$et['id']}</td>

                        <td>{$et['info']}</td>

                        <td>{$et['buyedDate']}</td>

                        <td hidden data-target="toolPrice">{$et['price']}</td>

                        <td hidden data-target="toolInfo">{$et['info']}</td>

                        <td hidden data-target="toolPreview">{$et['preview']}</td>

                        <td hidden data-target="toolLink">{$et['link']}</td>

                        <td nowrap="" style="">

                          <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Save"><i class="la la-cloud-download"></i></a>

                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='toolView' data-id="{$et['id']}" title="View"><i class="la la-eye"></i></button>

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

                    {foreach $tutorialsList as $eachTutorial=>$ett}

                     <tr role="row" class="even" id="{$ett['id']}">

                        <td>{$ett['id']}</td>

                        <td>{$ett['info']}</td>

                        <td>{$ett['buyedDate']}</td>

                        <td hidden data-target="tutorialPrice">{$ett['price']}</td>

                        <td hidden data-target="tutorialInfo">{$ett['info']}</td>

                        <td hidden data-target="tutorialLink">{$ett['link']}</td>

                        <td nowrap="" style="">

                          <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Save"><i class="la la-cloud-download"></i></a>

                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='tutorialView' data-id="{$ett['id']}" title="View"><i class="la la-eye"></i></button>

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

{include file="footer.tpl"}
