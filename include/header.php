<?php
ob_start();
session_start();
spl_autoload_register(function($class){
    include("class/".$class.".php"); 
});
$super_admin=new super_admin();
$user=new user();
?>

<!DOCTYPE html>
<html lang="en">
   <head>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <title>IECC</title>
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
    <meta content="" name="google-signin-client_id">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta content="index,follow" name="robots">
    <link href="#" rel="canonical">
    <link href="./assets/css/some.css" media="all" rel="stylesheet" type="text/css">
    <link href="./assets/css/addons_responsive.css" media="all" rel="stylesheet" type="text/css">
    <link href="./assets/css/semantic.min.css" media="all" rel="stylesheet" type="text/css">
    <link href="./assets/css/transition.min.css" media="all" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" rel="stylesheet">
  
    <link rel="stylesheet" href="./assets/css/justifiedGallery.min.css">
    <link href="./assets/css/custom.css" media="all" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet" type="text/css"/>
    <link type="text/css" rel="stylesheet" href="./assets/css/lightgallery.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="./assets/js/jquery.justifiedGallery.min.js"></script>


    <script src="assets/js/lightgallery-all.min.js"></script>

   </head>

   <?php
   if (isset($page_class)){
       $classes = $page_class." pageType-ContentPage template-pages-addon--publicsectoracceleratoraddon-pages-layout-landingLayout2Page pageLabel-homepage smartedit-page-uid-homepage smartedit-page-uuid-eyJpdGVtSWQiOiJob21lcGFnZSIsImNhdGFsb2dJZCI6ImlkcC1iZENvbnRlbnRDYXRhbG9nIiwiY2F0YWxvZ1ZlcnNpb24iOiJPbmxpbmUifQ== smartedit-catalog-version-uuid-IECC-bdContentCatalog/Online language-en inner-leftsec" ;
   }elseif(isset($postpage)){
       $classes = $postpage;

   }else{
       $classes ="page-homepage pageType-ContentPage template-pages-addon--publicsectoracceleratoraddon-pages-layout-landingLayout2Page pageLabel-homepage smartedit-page-uid-homepage smartedit-page-uuid-eyJpdGVtSWQiOiJob21lcGFnZSIsImNhdGFsb2dJZCI6ImlkcC1iZENvbnRlbnRDYXRhbG9nIiwiY2F0YWxvZ1ZlcnNpb24iOiJPbmxpbmUifQ== smartedit-catalog-version-uuid-IECC-bdContentCatalog/Online language-en inner-leftsec" ;
   }
   ?>

   <body class="<?=$classes?>  " cz-shortcut-listen="true">
<style>
    body p {font-family: "Open Sans", Arial, sans-serif;}
</style>
  
<!--loader starts -->
<div class="loader"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div><style type="text/css"> .lds-ellipsis {display: inline-block;position: relative;width: 64px;height: 64px;}  .lds-ellipsis div {position: absolute;top: 27px;width: 11px;height: 11px;border-radius: 50%;background: #DF0023;animation-timing-function: cubic-bezier(0, 1, 1, 0);}  .lds-ellipsis div:nth-child(1) {left: 6px;animation: lds-ellipsis1 0.6s infinite;}  .lds-ellipsis div:nth-child(2) {left: 6px;animation: lds-ellipsis2 0.6s infinite;}  .lds-ellipsis div:nth-child(3) {left: 26px;animation: lds-ellipsis2 0.6s infinite;}  .lds-ellipsis div:nth-child(4) {left: 45px;animation: lds-ellipsis3 0.6s infinite;}  @keyframes lds-ellipsis1 { 0% {transform: scale(0);} 100% {transform: scale(1);} }  @keyframes lds-ellipsis3 { 0% {transform: scale(1);} 100% {transform: scale(0);} }  @keyframes lds-ellipsis2 { 0% {transform: translate(0, 0);} 100% {transform: translate(19px, 0);} }  .loader {background: #fff;position: fixed;height: 100%;width: 100%;z-index: 99999999999;}  .loader .lds-ellipsis {position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);}.loaded .loader {display: none;}</style><script> $(window).on("load",function () {$("body").addClass("loaded");});setTimeout(function () {$("body").addClass("loaded");},20000);</script></div></div>
<!--loader ends-->






      <main>
         <header class="js-mainHeader main-header">
            <div class="content">
               <div class="phonecnt container">
                  <div class="col-md-6">
                     <div class="pno fl">
                        <i class="fas fa-phone"></i> Bangladesh :&nbsp;+88 02 9860526  &nbsp;
                        <div class="mob-row">
                        <i class="fas fa-phone"></i> United Kingdom :&nbsp;+44 114 272 5444
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                      <?php include("include/social.php")?>


                  </div>
               </div>
            </div>
            <nav class="navigation navigation--top hidden-xs hidden-sm">
               <div class="row">
                  <div class="col-sm-12 col-md-12">
                     <div class="nav__left js-site-logo">
                        <div class="col-xs-12 no-space yComponentWrapper">
                           <div class="yCmsContentSlot col-xs-12 no-space yComponentWrapper">
                              <div class="simple-banner-component simple-banner">
                                 <a aria-label="Public Accelerator logo" href="#"><img src="./assets/img_px.gif" data-src="/medias/hybris-logo.jpg"></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </nav>
            <nav class="navigation navigation--middle js-navigation--middle">
               <div class="container-fluid">
                  <div class="row desktop__nav">
                     <div class="nav__left fl">
                        <div class="row">
                           <div class="hpsa-logo-block fl">
                              <div class="col-xs-12 no-space yComponentWrapper">
                                 <div class="yCmsComponent col-xs-12 no-space yComponentWrapper dsk_logo">
                                    <div class="simple-banner-component simple-banner">
                                        <a href="index"><img class="header-logo" style="width:135px;height:90px;margin-left:20px;" src="./assets/img/logo.png" ></a>
                                        <style>
                                            @media all and (max-width:768px){
                                                .header-logo{
                                                    margin-left:20px;
                                                }
                                            }

                                        </style>
                                    </div>
                                 </div>
                                 <a href="#" class="mob_logo_wrap">
                                 <img src="./assets/img/logo.png" class="mob_logo" >
                                 </a>
                              </div>
                           </div>
                           <div class="col-sm-1 hidden-xs visible-sm mobile-menu">
                              <button title="Open Menu" aria-label="" class="js-toggle-sm-navigation header-menu-btn" type="button">
                              <span class="glyphicon glyphicon-align-justify"></span>
                              </button>
                           </div>
                        </div>
                     </div>

                      <?php include("include/search.php")?>


                  </div>
               </div>
            </nav>
            <ul class="mobile-structure clr">
               <li class="mob-why-study fl js-toggle-sm-navigation">
                  Why study abroad?
               </li>
               <li class="hamburger-icon fr js-toggle-sm-navigation">More <img class="ham_ic" src="./assets/images/ham.svg" height="15" width="18" alt="Hamburger"></li>
            </ul>
            <?php include("include/menu.php")?>
            <div class="content dark below-header">
               <div class="container">


         <marquee behavior="scroll" direction="left" style="font-size:17px;letter-spacing:normal">
             <?php
                $view_notice=$super_admin->view_notice();
             while($row=$view_notice->fetch_array()){

                 echo '<label style="color:white;">*'.$row['description'].'*</label>';

             }
             ?>

         </marquee>


               </div>
            </div>
         </header>