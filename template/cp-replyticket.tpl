{include file="header.tpl"}

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--mobile">
  <div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title" id="ticketHead">
				Replying ticket # {$tixId['id']}
			</h3>
		</div>
	</div>
   <div class="kt-portlet__body">
      <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
            <div class="col-sm-12">
               <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="replies_table" role="grid" aria-describedby="tickets_table_info" style="width: 1541px;">
                  <thead>
                     <tr role="row">
                        <th class="sorting_desc" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1" style="width: 121.25px;" aria-sort="descending">Date Reply</th>
                        <th class="sorting" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1" style="width: 159.25px;">Message</th>
                        <th class="sorting" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1" style="width: 214.25px;">By</th>
                     </tr>
                  </thead>
                  <tbody>
                    {foreach $ticketReplies as $ticketReply=>$tr}
                     <tr role="row" class="even" id="{$tr['ticket_id']}">
                       <td>{$tr['date']}</td>
                        <td>{$tr['message']}</td>
                        <td>{$tr['user']}</td>
                     </tr>
                     {/foreach}
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <div class="kt-portlet">
	<form class="kt-form kt-form--label-right">
		<div class="kt-portlet__body">
			<div class="form-group row">
				<div class="col-lg-12 col-md-12 col-sm-12">
          <div class="md-editor">
             <textarea name="replyMessage" id="replyMessage" class="form-control md-input" data-provide="markdown" data-id="{$tixId['id']}" rows="10" style="resize: none;"></textarea>
          </div>
				</div>
			</div>

		</div>
		<div class="kt-portlet__foot">
			<div class="kt-form__actions">
				<div class="row">
					<div class="col-lg-12 ml-lg-auto">
						<button type="button" class="btn btn-outline-success" id="replySubmit"><i class="fa fa-reply-all"></i> Reply</button>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
</div>

</div>
</div>

{include file="footer.tpl"}
