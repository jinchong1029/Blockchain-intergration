{include file="header.tpl"}

   <div class="kt-container kt-container--fluid  kt-grid__item kt-grid__item--fluid">
     <div class="kt-portlet">
<div class="kt-portlet__body kt-portlet__body--fit">
<div class="row row-no-padding row-col-separator-xl">
<div class="col-md-12 col-lg-12 col-xl-6">
<div class="kt-widget1">
<div class="kt-widget1__item">
<div class="kt-widget1__info">
<h3 class="kt-widget1__title">Account Type</h3>
</div>
<span class="kt-widget1__number kt-font-brand">{$userDetails['accountType']}</span>
</div>
<div class="kt-widget1__item">
<div class="kt-widget1__info">
<h3 class="kt-widget1__title">Available Credits</h3>
</div>
<span class="kt-widget1__number kt-font-success">{$userDetails['balance']}¢</span>
</div>

<div class="kt-widget1__item">
<div class="kt-widget1__info">
<h3 class="kt-widget1__title">Total Purchase</h3>
</div>
<span class="kt-widget1__number kt-font-danger">{$userDetails['totalPurchase']}</span>
</div>

</div>
</div>
<div class="col-md-12 col-lg-12 col-xl-6">
<div class="kt-widget1">
<div class="kt-widget1__item">
<div class="kt-widget1__info">
<h3 class="kt-widget1__title">Account Status</h3>
</div>
<span class="kt-widget1__number kt-font-brand">{$userDetails['accountStatus']}</span>
</div>

<div class="kt-widget1__item">
<div class="kt-widget1__info">
<h3 class="kt-widget1__title">Recent Log Activity</h3>
</div>
<span class="kt-widget1__number kt-font-success">{$userDetails['recentLogon']}</span>
</div>

<div class="kt-widget1__item">
<div class="kt-widget1__info">
<h3 class="kt-widget1__title">Recent IP Logon</h3>
</div>
<span class="kt-widget1__number kt-font-danger">{$userDetails['recentIpLogon']}</span>
</div>

</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-4 col-lg-12">
<div class="kt-portlet kt-bg-dark kt-portlet--skin-solid kt-portlet--height-fluid">
<div class="kt-portlet__head kt-portlet__head--noborder">
<div class="kt-portlet__head-label">
<h3 class="kt-portlet__head-title">
News & Announcement
</h3>
</div>
</div>
<div class="kt-portlet__body">
<div class="kt-widget7 kt-widget7--skin-light">
<div class="kt-widget7__desc">
<h3>{$news['title']}</h3>
{$news['description']}
</div>
<div class="kt-widget7__content">
<div class="kt-widget7__userpic">
<img src="../assets/images/profile-user-2.png" alt="">
</div>
<div class="kt-widget7__info">
<h4 class="kt-widget7__username">
PFM Admin
</h4>
<span class="kt-widget7__time">
{$news['date']}
</span>
</div>
</div>
<div class="kt-widget7__button">
<a class="btn btn-brand" href="#" role="button" data-toggle="modal" data-target="#allNews">View All</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-8 col-lg-12">
<div class="kt-portlet kt-portlet--height-fluid">
<div class="kt-portlet__head">
<div class="kt-portlet__head-label">
<h3 class="kt-portlet__head-title">
Recent Updates
</h3>
</div>
</div>
<div class="kt-portlet__body">
<div class="tab-content">
<div class="tab-pane active" id="kt_widget3_tab1_content">
{foreach $recentlyAdded as $ryAdded=>$ra}
<div class="kt-timeline-v3">
  <div class="kt-timeline-v3__items">
    <div class="kt-timeline-v3__item kt-timeline-v3__item--danger">
      <span class="kt-timeline-v3__item-time">{$ra['date']}</span>
      <div class="kt-timeline-v3__item-desc">
        <span class="kt-timeline-v3__item-text">{$ra['name']}</span><br>
        <span class="kt-timeline-v3__item-user-name"><a class="kt-link kt-link--dark kt-timeline-v3__itek-link">Sold By {$ra['addedby']}</a></span>
      </div>
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
</div>

<div class="modal fade" id="allNews" tabindex="-1" role="dialog" aria-labelledby="allNewsModal" aria-hidden="true" style="display: none;">
<div class="modal-dialog modal-lg" role="document">
 <div class="modal-content">
     <div class="modal-header">
         <h5 class="modal-title" id="allNewsModal">News & Announcements</h5>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         </button>
     </div>
     <div class="modal-body">
       {foreach $allNews as $getNews=>$gn}
       <div class="kt-timeline-v3">
         <div class="kt-timeline-v3__items">
           <div class="kt-timeline-v3__item kt-timeline-v3__item--danger">
             <span class="kt-timeline-v3__item-time">{$gn['date']}</span>
             <div class="kt-timeline-v3__item-desc">
               <span class="kt-timeline-v3__item-text">{$gn['title']}</span><br>
               <span class="kt-timeline-v3__item-user-name"><a class="kt-link kt-link--dark kt-timeline-v3__itek-link">{$gn['description']}</a></span>
            </div>
            </div>
          </div>
        </div>
        {/foreach}
     </div>
     <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     </div>
 </div>
</div>
</div>

{include file="footer.tpl"}
