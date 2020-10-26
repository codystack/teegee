<?php
include ('./config/controllers.php');
require_once "./config/dbconnect.php";
?>
<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

    <meta charset="utf-8">
    <title>TG&trade; :: Web + App Developer, UI/UX Designer, Product Designer & Graphic Designer.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url" content="https://thankgodokoro.codes/"/>
	  <meta property="og:type" content="website" />
    <meta property="og:title" content="TG&trade; :: Web + App Developer, UI/UX Designer, Product Designer & Graphic Designer." />
    <meta name="og:description" content="ThankGod Okoro is a Software developer/programmer, Web + App Developer, UI/UX Designer, Brand Strategist & Product/Graphic Designer.">
    <meta name="keywords" content="ThankGodOkoro.codes,ThankGod Okoro,TG,codes,ThankGod,Okoro,software,developer,development,programmer,programming,coder,coding,blogger,blogging,digital,creator,creation,graphic designer,product designer,product,graphics,branding">
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://i.imgur.com/FDaWgtt.png" />
    <style>
      @keyframes hideLoader{0%{ width: 100%; height: 100%; }100%{ width: 0; height: 0; }  }  body > div.loader{ position: fixed; background: white; width: 100%; height: 100%; z-index: 1071; opacity: 0; transition: opacity .5s ease; overflow: hidden; pointer-events: none; display: flex; align-items: center; justify-content: center;}body:not(.loaded) > div.loader{ opacity: 1;}body:not(.loaded){ overflow: hidden;}  body.loaded > div.loader{animation: hideLoader .5s linear .5s forwards;  } /* Typing Animation */.loading-animation {width: 6px;height: 6px;border-radius: 50%;animation: typing 1s linear infinite alternate;position: relative;left: -12px;}@keyframes typing {0% {background-color: rgba(100,100,100, 1);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 0.2);}25% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 2),24px 0px 0px 0px rgba(100,100,100, 0.2);}75% {background-color: rgba(100,100,100, 0.4);box-shadow: 12px 0px 0px 0px rgba(100,100,100, 0.2),24px 0px 0px 0px rgba(100,100,100, 1);}}
    </style>
    <script type="text/javascript">
      window.addEventListener("load", function () {    document.querySelector('body').classList.add('loaded');  });
    </script>
    <link href="assets/css/theme-software-library.min.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="preload" as="font" href="assets/fonts/Inter-UI-upright.var.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="assets/fonts/Inter-UI.var.woff2" type="font/woff2" crossorigin="anonymous">
    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/2113ffa3185856e2343592157/3e465356717a7cc083cfb2e03.js");</script>
  </head>

  <body>
    <div class="loader">
      <div class="loading-animation"></div>
    </div>
    <?php include('./components/modal.php');?>

    <div class="navbar-container bg-primary-3">
      <nav class="navbar navbar-expand-lg navbar-dark" data-overlay data-sticky="top">
        <div class="container">
            <a class="navbar-brand fade-page" href="\">
                <img src="https://i.imgur.com/utXf5Ia.gif" alt="TeeGee" style="width: 250px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
              <img class="icon navbar-toggler-open" src="assets/img/icons/interface/menu.svg" alt="menu interface icon" data-inject-svg />
              <img class="icon navbar-toggler-close" src="assets/img/icons/interface/cross.svg" alt="cross interface icon" data-inject-svg />
            </button>
            <div class="collapse navbar-collapse">
            <div class="py-2 py-lg-0">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="learn" class="nav-link">Learn</a>
                </li>
                <li class="nav-item">
                  <a href="portfolio" class="nav-link">Portfolio</a>
                </li>
                <li class="nav-item">
                  <a href="https://medium.com/@codystack" class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public?uclick_id=9e8ccaed-7952-4893-adee-0e4823365eef" target="_blank" class="nav-link">COVID-19 resources</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="collapse navbar-collapse justify-content-end">
            <div class="py-2 py-lg-0">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="contact"  class="nav-link"><img class="icon bg-white" style="height: 30px;" src="assets/img/icons/theme/communication/group-chat.svg" alt="decoration" data-inject-svg />Talk to me</a>
                </li>
              </ul>
            </div>
            <a href="#" data-target="#hireme-modal" data-toggle="modal" class="btn btn-primary ml-lg-3">Hire me</a>
          </div>
        </div>
      </nav>
    </div>