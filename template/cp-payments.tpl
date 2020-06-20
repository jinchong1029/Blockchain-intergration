{include file="header.tpl"}

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--mobile">
   <div class="kt-portlet__body">
      <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
            <div class="col-sm-12">
               <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="payments_table" role="grid" aria-describedby="fullz_table_info" style="width: 1541px;">
                  <thead>
                    <tr role="row">
                       <th class="sorting_desc" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-sort="descending">ID</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Status</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">USD</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">BTC</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Creation Date</th>
                       <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
                       <th hidden></th>
                       <th hidden></th>
                    </tr>
                  </thead>
                  <tbody>
                    {foreach $allPayments as $eachPayment=>$ep}
                     <tr role="row" class="even" id="{$ep['id']}">
                        <td data-target="epId">{$ep['id']}</td>
                        {if $ep['status'] eq 'initialized'}
                        <td data-target="epStatus"><span class="badge badge-primary">Initialized</span></td>
                        {else if $ep['status'] eq 'pending'}
                        <td data-target="epStatus"><span class="badge badge-danger">Confirming</span></td>
                        {else if $ep['status'] eq 'success'}
                        <td data-target="epStatus"><span class="badge badge-success">Confirmed</span></td>
                        {else}
                        <td data-target="epStatus"><span class="badge badge-dark">Error</span></td>
                        {/if}
                        <td><i class="la la-dollar"></i>{$ep['entered_amount']}</td>
                        <td><i class="la la-bitcoin"></i>{$ep['amount']}</td>
                        <td>{$ep['created_at']}</td>
                        <td nowrap="" style="">
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='view' data-id="{$ep['id']}" title="View"><i class="la la-view" style="font-size:24px;"></i></button>
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='delete' data-id="{$ep['id']}" title="Delete"><i class="la la-trash" style="font-size:24px;"></i></button>
                        </td>
                        <td hidden data-target="epFromCurrency">{$ep['from_currency']}</td>
                        <td hidden data-target="epEnteredAmount">{$ep['entered_amount']}</td>
                        <td hidden data-target="epToCurrency">{$ep['to_currency']}</td>
                        <td hidden data-target="epAmount">{$ep['amount']}</td>
                        <td hidden data-target="epGatewayId">{$ep['gateway_id']}</td>
                        <td hidden data-target="epGatewayUrl">{$ep['gateway_url']}</td>
                        <td hidden data-target="epCreatedAt">{$ep['created_at']}</td>
                        <td hidden data-target="epUpdatedAt">{$ep['updated_at']}</td>
                     </tr>
                     {/foreach}
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="modal fade" id="viewModal" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Payment Information</h5>
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="kt-portlet__body">
          <div class="form-group">
            <label>ID</label>
            <input type="text" id="epId" name="epId" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Status</label>
            <input type="text" id="epStatus" name="epStatus" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>From</label>
            <input type="text" id="epFromCurrency" name="epFromCurrency" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Entered Amount</label>
            <input type="text" id="epEnteredAmount" name="epEnteredAmount" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>To</label>
            <input type="text" id="epToCurrency" name="epToCurrency" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Amount</label>
            <input type="text" id="epAmount" name="epAmount" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Gateway ID</label>
            <input type="text" id="epGatewayId" name="epGatewayId" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Gateway Url</label>
            <input type="text" id="epGatewayUrl" name="epGatewayUrl" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Time Created</label>
            <input type="text" id="epCreatedAt" name="epCreatedAt" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Time Updated</label>
            <input type="text" id="epUpdatedAt" name="epUpdatedAt" class="form-control" readonly>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-ban"></i> Cancel</button>
      </div>
    </div>
  </div>
</div>

<input type="hidden" id="deleteId">

</div>
</div>

{include file="footer.tpl"}
