{include file="header.tpl"}

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

  <div class="row">
     <div class="col-xl-12">
        <div class="kt-portlet">
          <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
              <h3 class="kt-portlet__head-title">
                Terms of Service
              </h3>
            </div>
          </div>
           <div class="kt-portlet__body">
             <div class="accordion accordion-outline accordion-outline--padded" id="accordionExample">
               {assign var="tosId" value="tos-"}
               {foreach $tosDetails as $eachTos=>$et}
               <div class="card">
                 <div class="card-header">
                   <div class="card-title collapsed" data-toggle="collapse" role="button" data-target="#{$tosId}{$et['id']}" aria-expanded="false" aria-controls="{$tosId}{$et['id']}">
                     {$et['title']}
                   </div>
                 </div>
                 <div id="{$tosId}{$et['id']}" class="card-body-wrapper collapse" data-parent="#accordionExample" style="">
                   <div class="card-body">
                     <p>{$et['description']}</p>
                   </div>
                 </div>
               </div>
               {/foreach}
             </div>
           </div>
        </div>
     </div>
  </div>

</div>
</div>

{include file="footer.tpl"}
