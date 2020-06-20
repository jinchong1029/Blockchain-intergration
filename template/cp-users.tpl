{include file="header.tpl"}

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--mobile">
   <div class="kt-portlet__body">
      <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
            <div class="col-sm-12">
               <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="users_table" role="grid" aria-describedby="fullz_table_info" style="width: 1541px;">
                  <thead>
                     <tr role="row">
                        <th class="sorting_desc" tabindex="0" aria-controls="users_table" rowspan="1" colspan="1" aria-sort="descending">Id</th>
                        <th class="sorting" tabindex="0" aria-controls="users_table" rowspan="1" colspan="1">Username</th>
                        <th class="sorting" tabindex="0" aria-controls="users_table" rowspan="1" colspan="1">Email</th>
                        <th class="sorting" tabindex="0" aria-controls="users_table" rowspan="1" colspan="1">Type</th>
                        <th class="sorting" tabindex="0" aria-controls="users_table" rowspan="1" colspan="1">Money Spent</th>
                        <th class="sorting" tabindex="0" aria-controls="users_table" rowspan="1" colspan="1">Status</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
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
                    {foreach $allUsers as $eachUsers=>$eu}
                     <tr role="row" class="even" id="{$eu['id']}">
                       <td data-target="pfmId">{$eu['pfmId']}</td>
                        <td data-target="username">{$eu['username']}</td>
                        <td data-target="email">{$eu['email']}</td>
                        {if $eu['accountType'] eq 'Member'}
                        <td data-target="accountType"><span class="badge badge-primary">{$eu['accountType']}</span></td>
                        {else if $eu['accountType'] eq 'Vendor'}
                        <td data-target="accountType"><span class="badge badge-success">{$eu['accountType']}</span></td>
                        {else if $eu['accountType'] eq 'Deleted'}
                        <td data-target="accountType"><span class="badge badge-dark">{$eu['accountType']}</span></td>
                        {else if $eu['accountType'] eq 'Banned'}
                        <td data-target="accountType"><span class="badge badge-danger">{$eu['accountType']}</span></td>
                        {/if}
                        <td data-target="moneySpent">{$eu['moneySpent']}</td>
                        <td data-target="accountStatus">{$eu['accountStatus']}</td>
                        <td nowrap="">
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='edit' data-id="{$eu['id']}" title="Edit"><i class="la la-edit" style="font-size:24px;"></i></button>
                           {if $eu['accountType'] neq 'Vendor'}
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='upgrade' data-id="{$eu['id']}" title="Upgrade to Vendor"><i class="la la-get-pocket" style="font-size:24px;"></i></button>
                           {/if}
                           {if $eu['accountType'] eq 'Vendor'}
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='degrade' data-id="{$eu['id']}" title="Degrade to Member"><i class="la la-toggle-down" style="font-size:24px;"></i></button>
                           {/if}
                           {if $eu['accountType'] eq 'Deleted'}
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='recover' data-id="{$eu['id']}" title="Recover"><i class="la la-check-circle" style="font-size:24px;"></i></button>
                           {else}
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='delete' data-id="{$eu['id']}" title="Delete"><i class="la la-minus-square-o" style="font-size:24px;"></i></button>
                           {/if}
                           {if $eu['accountType'] eq 'Banned'}
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='unban' data-id="{$eu['id']}" title="Unban"><i class="la la-chain-broken" style="font-size:24px;"></i></button>
                           {else}
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='ban' data-id="{$eu['id']}" title="Ban"><i class="la la-ban" style="font-size:24px;"></i></button>
                           {/if}
                        </td>
                        <td data-target="password" hidden>{$eu['password']}</td>
                        <td data-target="balance" hidden>{$eu['balance']}</td>
                        <td data-target="totalPurchase" hidden>{$eu['totalPurchase']}</td>
                        <td data-target="recentLogon" hidden>{$eu['recentLogon']}</td>
                        <td data-target="recentIpLogon" hidden>{$eu['recentIpLogon']}</td>
                        <td data-target="userIp" hidden>{$eu['userIp']}</td>
                        <td data-target="creationTime" hidden>{$eu['creationTime']}</td>
                     </tr>
                     {/foreach}
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="editModal" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">User Information</h5>
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="kt-portlet__body">
          <div class="form-group">
						<label>User ID</label>
						<input type="text" id="pfmId" name="pfmId" class="form-control" readonly>
					</div>
          <div class="form-group">
						<label>Username</label>
						<input type="text" id="username" name="username" class="form-control">
					</div>
          <div class="form-group">
						<label>Password (MD5)</label>
						<input type="text" id="password" name="password" class="form-control">
					</div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" id="email" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label>Balance</label>
            <input type="text" id="balance" name="balance" class="form-control">
          </div>
          <div class="form-group">
            <label>Money Spent</label>
            <input type="text" id="moneySpent" name="moneySpent" class="form-control">
          </div>
          <div class="form-group">
            <label>Account Type</label>
            <input type="text" id="accountType" name="accountType" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Status</label>
            <input type="text" id="accountStatus" name="accountStatus" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Total Purchase</label>
            <input type="text" id="totalPurchase" name="totalPurchase" class="form-control">
          </div>
          <div class="form-group">
            <label>Recent Logon</label>
            <input type="text" id="recentLogon" name="recentLogon" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Recent IP Logon</label>
            <input type="text" id="recentIpLogon" name="recentIpLogon" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>User IP</label>
            <input type="text" id="userIp" name="userIp" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Creation Time</label>
            <input type="text" id="creationTime" name="creationTime" class="form-control" readonly>
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
<input type="hidden" id="banId">
<input type="hidden" id="recoverId">
<input type="hidden" id="unbanId">
<input type="hidden" id="upgradeId">
<input type="hidden" id="degradeId">

</div>
</div>

{include file="footer.tpl"}
