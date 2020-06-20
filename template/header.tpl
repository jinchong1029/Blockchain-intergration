<html lang="en" class="wf-poppins-n3-active wf-poppins-n4-active wf-poppins-n5-active wf-poppins-n6-active wf-poppins-n7-active wf-roboto-n3-active wf-roboto-n4-active wf-roboto-n5-active wf-roboto-n6-active wf-roboto-n7-active wf-active">
   <head>
      <meta charset="utf-8">
      {if $page eq 'home'}
          <title>PFM - Dashboard</title>
      {elseif $page eq 'profile'}
          <title>PFM - My Profile</title>
      {elseif $page eq 'history'}
          <title>PFM - Inventory</title>
      {elseif $page eq 'faqs'}
          <title>PFM - FAQS</title>
      {elseif $page eq 'fullz'}
          <title>PFM - Fullz Logs</title>
      {elseif $page eq 'banks'}
          <title>PFM - Bank Logs</title>
      {elseif $page eq 'accounts'}
          <title>PFM - Web Accounts</title>
      {elseif $page eq 'tickets'}
          <title>PFM - Tickets</title>
      {elseif $page eq 'showticket'}
          <title>PFM - Show Ticket</title>
      {elseif $page eq 'showticket'}
          <title>PFM - Add Funds</title>
      {elseif $page eq 'cp_dashboard'}
          <title>PFM - Cpanel</title>
      {elseif $page eq 'cp_users'}
          <title>PFM - Cpanel</title>
      {elseif $page eq 'cp_fullz'}
          <title>PFM - Cpanel</title>
      {elseif $page eq 'cp_banks'}
          <title>PFM - Cpanel</title>
      {elseif $page eq 'cp_accounts'}
          <title>PFM - Cpanel</title>
      {elseif $page eq 'cp_news'}
          <title>PFM - Cpanel</title>
      {elseif $page eq 'cp_tickets'}
          <title>PFM - Cpanel</title>
      {elseif $page eq 'cp_replyticket'}
          <title>PFM - Cpanel</title>
      {elseif $page eq 'cp_tos'}
          <title>PFM - Cpanel</title>
      {elseif $page eq 'cp_tools'}
          <title>PFM - Cpanel</title>
      {elseif $page eq 'cp_tutorials'}
          <title>PFM - Cpanel</title>
      {elseif $page eq 'cp_payments'}
          <title>PFM - Cpanel</title>
      {elseif $page eq 'tools'}
          <title>PFM - Tools</title>
      {elseif $page eq 'tools'}
          <title>PFM - Tutorials</title>

      {/if}
      <meta name="description" content="Dashboard">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto:300,400,500,600,700" media="all">
      <script src="../assets/js/head.js" charset="utf-8"></script>
      <link href="../assets/css/vendors.bundle.css" rel="stylesheet" type="text/css">
      <link href="../assets/css/2.style.bundle.css" rel="stylesheet" type="text/css">
      <link href="../assets/css/base/light.css" rel="stylesheet" type="text/css">
      <link href="../assets/css/base/2.light.css" rel="stylesheet" type="text/css">
      <link href="../assets/css/base/dark.css" rel="stylesheet" type="text/css">
      <link href="../assets/css/base/2.dark.css" rel="stylesheet" type="text/css">
      {if $page eq 'profile'}
      <link href="../assets/css/582.ddf4d5a8a32517e68a0.css" rel="stylesheet" type="text/css">
      {elseif $page eq 'history'}
      <link href="../assets/css/datatables.bundle.css" rel="stylesheet" type="text/css">
      {elseif $page eq 'fullz'}
      <link href="../assets/css/datatables.bundle.css" rel="stylesheet" type="text/css">
      {elseif $page eq 'banks'}
      <link href="../assets/css/datatables.bundle.css" rel="stylesheet" type="text/css">
      {elseif $page eq 'accounts'}
      <link href="../assets/css/datatables.bundle.css" rel="stylesheet" type="text/css">
      {elseif $page eq 'tickets'}
      <link href="../assets/css/datatables.bundle.css" rel="stylesheet" type="text/css">
      {elseif $page eq 'showticket'}
      <link href="../assets/css/datatables.bundle.css" rel="stylesheet" type="text/css">
      {elseif $page eq 'addfunds'}
      <link href="../assets/css/wizard-v3.css" rel="stylesheet" type="text/css">
      {elseif $page eq 'cp_dashboard'}
      <link href="../assets/css/widget3.css" rel="stylesheet" type="text/css">
      {elseif $page eq 'cp_users'}
      <link href="../assets/css/datatables.bundle.css" rel="stylesheet" type="text/css">
      {elseif $page eq 'cp_fullz'}
      <link href="../assets/css/datatables.bundle.css" rel="stylesheet" type="text/css">
      {elseif $page eq 'cp_banks'}
      <link href="../assets/css/datatables.bundle.css" rel="stylesheet" type="text/css">
      {elseif $page eq 'cp_accounts'}
      <link href="../assets/css/datatables.bundle.css" rel="stylesheet" type="text/css">
      {elseif $page eq 'cp_news'}
      <link href="../assets/css/datatables.bundle.css" rel="stylesheet" type="text/css">
      {elseif $page eq 'cp_tickets'}
      <link href="../assets/css/datatables.bundle.css" rel="stylesheet" type="text/css">
      {elseif $page eq 'cp_replyticket'}
      <link href="../assets/css/datatables.bundle.css" rel="stylesheet" type="text/css">
      {elseif $page eq 'cp_tos'}
      <link href="../assets/css/datatables.bundle.css" rel="stylesheet" type="text/css">
      {elseif $page eq 'cp_tools'}
      <link href="../assets/css/datatables.bundle.css" rel="stylesheet" type="text/css">
      {elseif $page eq 'cp_tutorials'}
      <link href="../assets/css/datatables.bundle.css" rel="stylesheet" type="text/css">
      {elseif $page eq 'cp_payments'}
      <link href="../assets/css/datatables.bundle.css" rel="stylesheet" type="text/css">
      {elseif $page eq 'adminprofile'}
      <link href="../assets/css/582.ddf4d5a8a32517e68a0.css" rel="stylesheet" type="text/css">
      {elseif $page eq 'tools'}
      <link href="../assets/css/datatables.bundle.css" rel="stylesheet" type="text/css">
      {elseif $page eq 'tutorials'}
      <link href="../assets/css/datatables.bundle.css" rel="stylesheet" type="text/css">
      {/if}
      <link rel="icon" type="image/x-icon" href="../assets/images/icon16.ico">
      <link rel="shortcut icon" href="../assets/images/icon48.png" />
      <link rel="apple-touch-icon" href="../assets/images/icon72.png" />
      <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/icon72.png" />
      <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/icon96.png" />
      <link rel="apple-touch-icon" sizes="144x144" href="../assets/images/icon144.png" />
   </head>

   <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed" style="">

      <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
         <div class="kt-header-mobile__logo">
            <a href="#">
            <img alt="Logo" src="../assets/images/logo-light.png">
            </a>
         </div>
         <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
         </div>
      </div>
      <div class="kt-grid kt-grid--hor kt-grid--root">
         <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
            <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
               <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand" kt-hidden-height="65" style="">
                  <div class="kt-aside__brand-logo">
                     <a href="#">
                     <img alt="Logo" src="../assets/images/logo-light.png">
                     </a>
                  </div>
                  <div class="kt-aside__brand-tools">
                     <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler">
                        <span>
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                 <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "></path>
                                 <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "></path>
                              </g>
                           </svg>
                        </span>
                        <span>
                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                 <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                 <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" id="Path-94" fill="#000000" fill-rule="nonzero"></path>
                                 <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "></path>
                              </g>
                           </svg>
                        </span>
                     </button>
                  </div>
               </div>
               {if $userDetails['accountType'] eq 'Member'}
               <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
                  <div id="kt_aside_menu" class="kt-aside-menu kt-scroll" data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500" style="height: 909px; overflow: auto;">
                     <ul class="kt-menu__nav ">
                        <li class="kt-menu__item  {if $page eq 'home'} kt-menu__item--active {/if}" aria-haspopup="true">
                           <a href="index.php?page=home" class="kt-menu__link ">
                              <span class="kt-menu__link-icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                       <polygon id="Bound" points="0 0 24 0 24 24 0 24"></polygon>
                                       <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" id="Shape" fill="#000000" fill-rule="nonzero"></path>
                                       <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" id="Path" fill="#000000" opacity="0.3"></path>
                                    </g>
                                 </svg>
                              </span>
                              <span class="kt-menu__link-text">Dashboard</span>
                           </a>
                        </li>
                        <li class="kt-menu__item  {if $page eq 'fullz'} kt-menu__item--active {/if}" aria-haspopup="true">
                           <a href="index.php?page=fullz" class="kt-menu__link ">
                              <span class="kt-menu__link-icon">
                                <i class="la la-cc"></i>
                              </span>
                              <span class="kt-menu__link-text">Fullz Logs</span>
                           </a>
                        </li>
                        <li class="kt-menu__item  {if $page eq 'banks'} kt-menu__item--active {/if}" aria-haspopup="true">
                           <a href="index.php?page=banks" class="kt-menu__link ">
                              <span class="kt-menu__link-icon">
                                <i class="la la-bank"></i>
                              </span>
                              <span class="kt-menu__link-text">Bank Logs</span>
                           </a>
                        </li>
                        <li class="kt-menu__item  {if $page eq 'accounts'} kt-menu__item--active {/if}" aria-haspopup="true">
                           <a href="index.php?page=accounts" class="kt-menu__link ">
                              <span class="kt-menu__link-icon">
                                <i class="la la-laptop"></i>
                              </span>
                              <span class="kt-menu__link-text">Web Accounts</span>
                           </a>
                        </li>
                        <li class="kt-menu__item  {if $page eq 'tools'} kt-menu__item--active {/if}" aria-haspopup="true">
                           <a href="index.php?page=tools" class="kt-menu__link ">
                              <span class="kt-menu__link-icon">
                                <i class="fa fa-tools"></i>
                              </span>
                              <span class="kt-menu__link-text">Tools</span>
                           </a>
                        </li>
                        <li class="kt-menu__item  {if $page eq 'tutorials'} kt-menu__item--active {/if}" aria-haspopup="true">
                           <a href="index.php?page=tutorials" class="kt-menu__link ">
                              <span class="kt-menu__link-icon">
                                <i class="fa fa-chalkboard-teacher"></i>
                              </span>
                              <span class="kt-menu__link-text">Tutorials</span>
                           </a>
                        </li>
                        <li class="kt-menu__item  {if $page eq 'addfunds'} kt-menu__item--active {/if}" aria-haspopup="true">
                           <a href="index.php?page=addfunds" class="kt-menu__link ">
                              <span class="kt-menu__link-icon">
                                <i class="la la-money"></i>
                              </span>
                              <span class="kt-menu__link-text">Add Funds</span>
                           </a>
                        </li>
                        <li class="kt-menu__item  {if $page eq 'tickets'} kt-menu__item--active {else if $page eq 'showticket'} kt-menu__item--active {/if}" aria-haspopup="true">
                           <a href="index.php?page=tickets" class="kt-menu__link ">
                              <span class="kt-menu__link-icon">
                                <i class="la la-ticket"></i>
                              </span>
                              <span class="kt-menu__link-text">Tickets</span>
                           </a>
                        </li>
                        <li class="kt-menu__item  {if $page eq 'tos'} kt-menu__item--active {/if}" aria-haspopup="true">
                           <a href="index.php?page=tos" class="kt-menu__link ">
                              <span class="kt-menu__link-icon">
                                <i class="la la-commenting"></i>
                              </span>
                              <span class="kt-menu__link-text">Terms & Conditions</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               {elseif $userDetails['accountType'] eq 'Admin'}
               <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
                  <div id="kt_aside_menu" class="kt-aside-menu kt-scroll" data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500" style="height: 909px; overflow: auto;">
                     <ul class="kt-menu__nav ">
                        <li class="kt-menu__item  {if $page eq 'cp_dashboard'} kt-menu__item--active {/if}" aria-haspopup="true">
                           <a href="index.php?page=cp_dashboard" class="kt-menu__link ">
                              <span class="kt-menu__link-icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                       <polygon id="Bound" points="0 0 24 0 24 24 0 24"></polygon>
                                       <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" id="Shape" fill="#000000" fill-rule="nonzero"></path>
                                       <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" id="Path" fill="#000000" opacity="0.3"></path>
                                    </g>
                                 </svg>
                              </span>
                              <span class="kt-menu__link-text">Dashboard</span>
                           </a>
                        </li>
                        <li class="kt-menu__item  {if $page eq 'cp_users'} kt-menu__item--active {/if}" aria-haspopup="true">
                           <a href="index.php?page=cp_users" class="kt-menu__link ">
                              <span class="kt-menu__link-icon">
                                <i class="fa fa-user-check"></i>
                              </span>
                              <span class="kt-menu__link-text">Users</span>
                           </a>
                        </li>
                        <li class="kt-menu__item  {if $page eq 'cp_fullz'} kt-menu__item--active {/if}" aria-haspopup="true">
                           <a href="index.php?page=cp_fullz" class="kt-menu__link ">
                              <span class="kt-menu__link-icon">
                                <i class="fa fa-credit-card"></i>
                              </span>
                              <span class="kt-menu__link-text">Fullz</span>
                           </a>
                        </li>
                        <li class="kt-menu__item  {if $page eq 'cp_banks'} kt-menu__item--active {/if}" aria-haspopup="true">
                           <a href="index.php?page=cp_banks" class="kt-menu__link ">
                              <span class="kt-menu__link-icon">
                                <i class="fa fa-id-card"></i>
                              </span>
                              <span class="kt-menu__link-text">Bank Logs</span>
                           </a>
                        </li>
                        <li class="kt-menu__item  {if $page eq 'cp_accounts'} kt-menu__item--active {/if}" aria-haspopup="true">
                           <a href="index.php?page=cp_accounts" class="kt-menu__link ">
                              <span class="kt-menu__link-icon">
                                <i class="fa fa-users"></i>
                              </span>
                              <span class="kt-menu__link-text">Web Accounts</span>
                           </a>
                        </li>
                        <li class="kt-menu__item  {if $page eq 'cp_tools'} kt-menu__item--active {/if}" aria-haspopup="true">
                           <a href="index.php?page=cp_tools" class="kt-menu__link ">
                              <span class="kt-menu__link-icon">
                                <i class="fa fa-tools"></i>
                              </span>
                              <span class="kt-menu__link-text">Tools</span>
                           </a>
                        </li>
                        <li class="kt-menu__item  {if $page eq 'cp_tutorials'} kt-menu__item--active {/if}" aria-haspopup="true">
                           <a href="index.php?page=cp_tutorials" class="kt-menu__link ">
                              <span class="kt-menu__link-icon">
                                <i class="fa fa-chalkboard-teacher"></i>
                              </span>
                              <span class="kt-menu__link-text">Tutorials</span>
                           </a>
                        </li>
                        <li class="kt-menu__item  {if $page eq 'cp_payments'} kt-menu__item--active {/if}" aria-haspopup="true">
                           <a href="index.php?page=cp_payments" class="kt-menu__link ">
                              <span class="kt-menu__link-icon">
                                <i class="fa fa-cash-register"></i>
                              </span>
                              <span class="kt-menu__link-text">Payments</span>
                           </a>
                        </li>
                        <li class="kt-menu__item  {if $page eq 'cp_news'} kt-menu__item--active {/if}" aria-haspopup="true">
                           <a href="index.php?page=cp_news" class="kt-menu__link ">
                              <span class="kt-menu__link-icon">
                                <i class="fa fa-newspaper"></i>
                              </span>
                              <span class="kt-menu__link-text">News</span>
                           </a>
                        </li>
                        <li class="kt-menu__item  {if $page eq 'cp_tickets'} kt-menu__item--active {else if $page eq 'cp_replyticket'} kt-menu__item--active {/if}" aria-haspopup="true">
                           <a href="index.php?page=cp_tickets" class="kt-menu__link ">
                              <span class="kt-menu__link-icon">
                                <i class="fa fa-ticket-alt"></i>
                              </span>
                              <span class="kt-menu__link-text">Tickets</span>
                           </a>
                        </li>
                        <li class="kt-menu__item  {if $page eq 'cp_tos'} kt-menu__item--active {/if}" aria-haspopup="true">
                           <a href="index.php?page=cp_tos" class="kt-menu__link ">
                              <span class="kt-menu__link-icon">
                                <i class="fa fa-user-lock"></i>
                              </span>
                              <span class="kt-menu__link-text">Terms & Conditions</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               {/if}
            </div>
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
               <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">
                  <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                  <div class="kt-header-menu-wrapper"></div>
                  <div class="kt-header__topbar">
                     <div class="kt-header__topbar-item kt-header__topbar-item--user">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                           <div class="kt-header__topbar-user">
                                  <span class="kt-header__topbar-welcome">Hi,</span>
                                  <span class="kt-header__topbar-username">{$userDetails['username']}</span>
                                  <img alt="Pic" src="../assets/images/profile-user-2.png">
                           </div>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                           <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(../assets/images/bg-1.jpg)">
                              <div class="kt-user-card__avatar">
                                 <img alt="Pic" src="../assets/images/profile-user-2.png">
                              </div>
                              <div class="kt-user-card__details">
                                  <div class="kt-user-card__name">{$userDetails['username']}</div>
                                  <div class="kt-user-card__position" style="color:#fff">&nbsp;&nbsp;&nbsp;&nbsp;{$userDetails['balance']}¢ available</div>
                              </div>
                           </div>
                           <div class="kt-notification">
                              <a id="profileButton" class="kt-notification__item">
                                 <div class="kt-notification__item-icon">
                                    <i class="flaticon2-calendar-3 kt-font-info"></i>
                                 </div>
                                 <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title kt-font-bold">
                                       My Profile
                                    </div>
                                    <div class="kt-notification__item-time">
                                       Edit Account Information
                                    </div>
                                 </div>
                              </a>
                              {if $userDetails['accountType'] eq 'Member'}
                              <a id="activityButton" class="kt-notification__item">
                                 <div class="kt-notification__item-icon">
                                    <i class="flaticon2-crisp-icons kt-font-info"></i>
                                 </div>
                                 <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title kt-font-bold">
                                       Inventory
                                    </div>
                                    <div class="kt-notification__item-time">
                                      Purchases, Activities, and more
                                    </div>
                                 </div>
                              </a>
                              {/if}
                              <div class="kt-notification__custom kt-space-between">
                                 <a id="signOut" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                  <div class="kt-subheader kt-grid__item" id="kt_subheader">
                     <div class="kt-container  kt-container--fluid ">
                        <div class="kt-subheader__main">
                          {if $page eq 'home'}
                              <h3 class="kt-subheader__title">Dashboard</h3>
                          {elseif $page eq 'profile'}
                              <h3 class="kt-subheader__title">Profile Information</h3>
                          {elseif $page eq 'history'}
                              <h3 class="kt-subheader__title">Inventory</h3>
                          {elseif $page eq 'fullz'}
                              <h3 class="kt-subheader__title">Fullz Logs</h3>
                          {elseif $page eq 'banks'}
                              <h3 class="kt-subheader__title">Bank Logs</h3>
                          {elseif $page eq 'accounts'}
                              <h3 class="kt-subheader__title">Web Accounts</h3>
                          {elseif $page eq 'faqs'}
                              <h3 class="kt-subheader__title">FAQS</h3>
                          {elseif $page eq 'tickets'}
                              <h3 class="kt-subheader__title">Tickets</h3>
                          {elseif $page eq 'showticket'}
                              <h3 class="kt-subheader__title">Show Ticket</h3>
                          {elseif $page eq 'addfunds'}
                              <h3 class="kt-subheader__title">Add Funds</h3>
                          {elseif $page eq 'cp_dashboard'}
                              <h3 class="kt-subheader__title">Dashboard</h3>
                          {elseif $page eq 'cp_users'}
                              <h3 class="kt-subheader__title">Users Panel</h3>
                          {elseif $page eq 'cp_fullz'}
                              <h3 class="kt-subheader__title">Fullz Panel</h3>
                          {elseif $page eq 'cp_banks'}
                              <h3 class="kt-subheader__title">Banks Panel</h3>
                          {elseif $page eq 'cp_accounts'}
                              <h3 class="kt-subheader__title">Web Accounts Panel</h3>
                          {elseif $page eq 'cp_news'}
                              <h3 class="kt-subheader__title">News Panel</h3>
                          {elseif $page eq 'cp_tickets'}
                              <h3 class="kt-subheader__title">Tickets Panel</h3>
                          {elseif $page eq 'cp_replyticket'}
                              <h3 class="kt-subheader__title">Reply Ticket</h3>
                          {elseif $page eq 'cp_tos'}
                              <h3 class="kt-subheader__title">TOS</h3>
                          {elseif $page eq 'cp_tools'}
                              <h3 class="kt-subheader__title">Tools Panel</h3>
                          {elseif $page eq 'cp_tools'}
                              <h3 class="kt-subheader__title">Tutorials Panel</h3>
                          {elseif $page eq 'cp_payments'}
                              <h3 class="kt-subheader__title">Transactions Panel</h3>
                          {elseif $page eq 'adminprofile'}
                              <h3 class="kt-subheader__title">Profile Information</h3>
                          {elseif $page eq 'tools'}
                              <h3 class="kt-subheader__title">Tools</h3>
                          {elseif $page eq 'tutorials'}
                              <h3 class="kt-subheader__title">Tutorials</h3>
                          {/if}
                           <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                           <span class="kt-subheader__desc">{$userDetails['pfmId']}</span>
                        </div>
                        <div class="kt-subheader__toolbar">
                          <div class="kt-subheader__wrapper">
                            <a class="btn btn-label-danger btn-bold btn-sm btn-icon-h kt-margin-l-10">MARKET CLOSE</a>
                          </div>
                        </div>
                     </div>
                  </div>
