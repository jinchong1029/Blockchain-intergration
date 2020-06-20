{include file="header.tpl"}

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--mobile">
  <div class="kt-portlet__body">
     <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
        <div class="row">
           <div class="col-sm-12">
              <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="tickets_table" role="grid" aria-describedby="fullz_table_info">
                 <thead>
                    <tr role="row">
                       <th class="sorting_desc" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1" aria-sort="descending">Date Created</th>
                       <th class="sorting" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1">Status</th>
                       <th class="sorting" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1">Ticket ID</th>
                       <th class="sorting" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1">Title</th>
                       <th class="sorting" tabindex="0" aria-controls="tickets_table" rowspan="1" colspan="1">User ID</th>
                       <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
                    </tr>
                 </thead>
                 <tbody>
                   {foreach $allTickets as $eachTickets=>$et}
                    <tr role="row" class="even" id="{$et['ticketId']}">
                      <td>{$et['ticketDate']}</td>
                      {if $et['ticketStatus'] eq '0'}
                      <td><span class="badge badge-primary">OPEN</span></td>
                      {else if $et['ticketStatus'] eq '1'}
                      <td><span class="badge badge-danger">REPLIED</span></td>
                      {else}
                      <td><span class="badge badge-success">SOLVED</span></td>
                      {/if}
                       <td>{$et['ticketId']}</td>
                       <td>{$et['ticketTitle']}</td>
                       <td>{$et['userName']}</td>
                       <td nowrap="">
                         {if $et['ticketStatus'] ne '2'}
                         <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='reply' data-id="{$et['ticketId']}" title="Reply"><i class="la la-mail-reply" style="font-size:24px;"></i></button>
                         <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='solved' data-id="{$et['ticketId']}" title="Mark as Solved"><i class="la la-check-circle-o" style="font-size:24px;"></i></button>
                         {/if}
                          <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='delete' data-id="{$et['ticketId']}" title="Delete"><i class="la la-trash-o" style="font-size:24px;"></i></button>
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

<input type="hidden" id="solvedId">
<input type="hidden" id="deleteId">

</div>
</div>

{include file="footer.tpl"}
