{include file="header.tpl"}

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--mobile">
  <div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Tickets
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<div class="kt-portlet__head-toolbar">
        <button type="button" id="tixAddBtn" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Submit a Ticket" aria-haspopup="true" aria-expanded="false">
          <i class="la la-plus-square-o" style="font-size:24px;"></i>
        </button>
</div>
</div>
	</div>
   <div class="kt-portlet__body">
      <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
            <div class="col-sm-12">
               <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="tickets_table" role="grid" aria-describedby="fullz_table_info">
                  <thead>
                     <tr role="row">
                        <th class="sorting_desc" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1" aria-sort="descending">Date Created</th>
                        <th class="sorting" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1">Status</th>
                        <th hidden class="sorting" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1">Ticket ID</th>
                        <th class="sorting" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1">Title</th>
                        <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
                     </tr>
                  </thead>
                  <tbody>
                    {foreach $ticketLogs as $ticketLog=>$tl}
                     <tr role="row" class="even" id="{$tl['id']}">
                       <td data-target="tlDate">{$tl['date']}</td>
                       {if $tl['is_active'] eq '0'}
                       <td data-target="tlActive"><span class="badge badge-primary">OPEN</span></td>
                       {else if $tl['is_active'] eq '1'}
                       <td data-target="tlActive"><span class="badge badge-danger">REPLIED</span></td>
                       {else}
                       <td data-target="tlActive"><span class="badge badge-success">SOLVED</span></td>
                       {/if}
                        <td hidden data-target="tlId">{$tl['id']}</td>
                        <td data-target="tlTitle">{$tl['title']}</td>
                        <td nowrap="">
                           <button type="button" style="display:block; margin:auto;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='reply' data-id="{$tl['id']}" id="{$tl['id']}" title="Reply"><i class="la la-mail-reply" style="font-size:24px;"></i></button>
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

<div class="modal fade" id="ticketSubmit" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Submit a Ticket</h5>
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="kt-portlet__body">
          <div class="form-group">
            <label>Title/Subject</label>
            <input type="text" id="tixTitle" name="tixTitle" class="form-control">
          </div>
    			<div class="form-group row">
    				<div class="col-lg-12 col-md-12 col-sm-12">
              <div class="md-editor">
                 <textarea name="tixMessage" id="tixMessage" class="form-control md-input" data-provide="markdown" rows="10" style="resize: none;"></textarea>
              </div>
    				</div>
    			</div>
    		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-ban"></i> Cancel</button>
        <button type="button" class="btn btn-outline-success" id="submitTix"><i class="fa fa-reply-all"></i> Submit</button>
      </div>
    </div>
  </div>
</div>

</div>
</div>

{include file="footer.tpl"}
