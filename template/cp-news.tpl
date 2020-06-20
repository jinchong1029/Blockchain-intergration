{include file="header.tpl"}

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<div class="kt-portlet kt-portlet--mobile">
  <div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Announcements
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<div class="kt-portlet__head-toolbar">
	<div class="dropdown dropdown-inline">
		<button type="button" id="genOpen" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="modal" aria-haspopup="true" aria-expanded="false" title="Publish News">
			<i class="la la-plus-square-o"></i>
		</button>
	</div>
</div>		</div>
	</div>
   <div class="kt-portlet__body">
      <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
         <div class="row">
            <div class="col-sm-12">
               <table class="table table-striped- table-bordered table-hover dataTable no-footer dtr-inline" id="news_table" role="grid" aria-describedby="fullz_table_info" style="width: 1541px;">
                  <thead>
                    <tr role="row">
                       <th class="sorting_desc" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1" aria-sort="descending">ID</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Title</th>
                       <th hidden class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Description</th>
                       <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Date Published</th>
                       <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    {foreach $allNews as $eachNews=>$en}
                     <tr role="row" class="even" id="{$en['id']}">
                        <td data-target="enId">{$en['id']}</td>
                        <td data-target="enTitle">{$en['title']}</td>
                        <td hidden data-target="enDescription">{$en['description']}</td>
                        <td data-target="enDate">{$en['date']}</td>
                        <td nowrap="" style="">
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='edit' data-id="{$en['id']}" title="Edit"><i class="la la-edit" style="font-size:24px;"></i></button>
                           <button type="button" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-role='delete' data-id="{$en['id']}" title="Delete"><i class="la la-trash" style="font-size:24px;"></i></button>
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

<div class="modal fade" id="editModal" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Account Information</h5>
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="kt-portlet__body">
          <div class="form-group">
            <label>ID</label>
            <input type="text" id="enId" name="enId" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label>Title</label>
            <input type="text" id="enTitle" name="enTitle" class="form-control">
          </div>
          <div class="form-group">
            <label>Description</label>
            <textarea class="form-control" id="enDescription" name="enDescription" rows="3"></textarea>
          </div>
          <div class="form-group">
						<label>Date Published</label>
						<input type="text" id="enDate" name="enDate" class="form-control" readonly>
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

<div class="modal fade" id="genModal" data-backdrop="static" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Publish News</h5>
        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="kt-portlet__body">
          <form id="genForm">
            <div class="form-group">
              <label>Title</label>
              <input type="text" id="genTitle" name="genTitle" class="form-control">
            </div>
            <div class="form-group">
              <label>Description</label>
              <textarea class="form-control" id="genDescription" name="genDescription" rows="3"></textarea>
            </div>
            <input type="hidden" id="genId">
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-ban"></i> Cancel</button>
        <button type="button" class="btn btn-outline-success" id="genBtn"><i class="fa fa-reply-all"></i> Submit</button>
      </div>
    </div>
  </div>
</div>


<input type="hidden" id="deleteId">

</div>
</div>

{include file="footer.tpl"}
