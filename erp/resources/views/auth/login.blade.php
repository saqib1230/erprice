<!DOCTYPE html>
<!-- saved from url=(0063)file:///C:/xampp/htdocs/laravel/erp/public/dist/page_login.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
       
    <title>
        Login -- Hashwani Group
    </title>
    <meta name="description" content="Login">
   
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
  
    <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
    <link id="mytheme" rel="stylesheet" media="screen, print" href="#">
    <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
       <!-- Css -->

<link rel="stylesheet" href="css/app.bundle.css" type="text/css">

<link rel="apple-touch-icon" sizes="180x180" href="https://tailwindcomponents.com/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://tailwindcomponents.com/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://tailwindcomponents.com/favicon-16x16.png">
<link rel="manifest" href="https://tailwindcomponents.com/site.webmanifest">
<link rel="mask-icon" href="https://tailwindcomponents.com/safari-pinned-tab.svg" color="#0ed3cf">





        <!-- Place favicon.ico in the root directory -->
        <script type="text/javascript"><!--
            window.Laravel = {"csrfToken":"Md0ekr16XsdM6LrSVBdSzI74xMgkFiCKzvnhvdcm"};
        
            var flash_notification = false;
        //--></script>
      
 
  <link rel="stylesheet" href="css/tablefilter.css" type="text/css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css" type="text/css">
    <link rel="stylesheet" href="css/applogin.css" type="text/css">

    <link rel="stylesheet" href="css/appdesignlogin.css">
 
    

    
    </head>
 
    <body class="mod-bg-1 mod-nav-link desktop chrome webkit pace-done blur"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
        <!-- DOC: script to save and load page settings -->
        <script>
            /**
             *	This script should be placed right after the body tag for fast execution 
             *	Note: the script is written in pure javascript and does not depend on thirdparty library
             **/
            'use strict';

            var classHolder = document.getElementsByTagName("BODY")[0],
                /** 
                 * Load from localstorage
                 **/
                themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
                {},
                themeURL = themeSettings.themeURL || '',
                themeOptions = themeSettings.themeOptions || '';
            /** 
             * Load theme options
             **/
            if (themeSettings.themeOptions)
            {
                classHolder.className = themeSettings.themeOptions;
                console.log("%c✔ Theme settings loaded", "color: #148f32");
            }
            else
            {
                console.log("%c✔ Heads up! Theme settings is empty or does not exist, loading default settings...", "color: #ed1c24");
            }
            if (themeSettings.themeURL && !document.getElementById('mytheme'))
            {
                var cssfile = document.createElement('link');
                cssfile.id = 'mytheme';
                cssfile.rel = 'stylesheet';
                cssfile.href = themeURL;
                document.getElementsByTagName('head')[0].appendChild(cssfile);

            }
            else if (themeSettings.themeURL && document.getElementById('mytheme'))
            {
                document.getElementById('mytheme').href = themeSettings.themeURL;
            }
            /** 
             * Save to localstorage 
             **/
            var saveSettings = function()
            {
                themeSettings.themeOptions = String(classHolder.className).split(/[^\w-]+/).filter(function(item)
                {
                    return /^(nav|header|footer|mod|display)-/i.test(item);
                }).join(' ');
                if (document.getElementById('mytheme'))
                {
                    themeSettings.themeURL = document.getElementById('mytheme').getAttribute("href");
                };
                localStorage.setItem('themeSettings', JSON.stringify(themeSettings));
            }
            /** 
             * Reset settings
             **/
            var resetSettings = function()
            {
                localStorage.setItem("themeSettings", "");
            }

        </script>
        <div class="page-wrapper auth">
            <div class="page-inner bg-brand-gradient">
                <div class="page-content-wrapper bg-transparent m-0">
                    <div class="height-10 w-100 shadow-lg px-4 bg-brand-gradient">
                        <div class="d-flex align-items-center container p-0">
                            <div class="page-logo bg-transparent bg-img-none shadow-0 height-9 border-0" style="width:400px;">
                                <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                                    <img style="height: 50px; margin-top:8px;
    width: 55px;" src="img/logo.png" alt="Hashwani Group Of Companies" aria-roledescription="logo">
                                    <span style="color: white;
    font-size: 20px;
    margin-left: 61px;
    margin-top: -34px;
    font-style: bold;" class="block text-sm font-medium text-gray-700"><b>Hashwani Group of Companies</b></span>
                                </a>
                            </div>
                       
                        </div>
                    </div>
                    <div class="flex-1" style="background: url(img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
                        
                        
                        
                        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
                            <div class="row" style="margin-top:-100px;">
                               
                                <div class="relative w-full lg:max-w-7xl flex items-center m-auto"><div class="hidden lg:block md:w-6/12 h-full flex-col h-fit"><div class="swiper bg-cover bg-bottom bg-no-repeat h-screen py-24">
                                    <div class="swiper-container h-full swiper-initialized swiper-horizontal swiper-pointer-events">
                                        
                                       <!--strat img-->
                                       
                                        <div class="swiper-wrapper" style="transform: translate3d(-1280px, 0px, 0px); transition-duration: 0ms;"><div data-swiper-slide-index="3" class="swiper-slide flex justify-center flex-col items-center swiper-slide-duplicate" style="width: 640px;">
                                            <div style="width: 450px; height: 450px;"><img src="img/layout.png">
                                            </div> <h1 style="color:black;" class="text-3xl text-black-400 font-bold">
                               Track Your Business Performance
                                </h1></div>
                                
                                
                                <div data-swiper-slide-index="0" class="swiper-slide flex justify-center flex-col items-center swiper-slide-prev" style="width: 640px;"><div style="width: 450px; height: 450px;"><img src="img/folder.png"></div> <h1 style="color:black;" class="text-3xl text-black-400 font-bold">
                                  Manage Your Finances
                                </h1></div> <div data-swiper-slide-index="1" class="swiper-slide flex justify-center flex-col items-center swiper-slide-active" style="width: 640px;"><div style="width: 450px; height: 450px;"><img src="img/chart.png"></div> <h1  style="color:black;" class="text-3xl text-black-400 font-bold">
                                    Manage Global Trade
                                </h1></div> <div data-swiper-slide-index="2" class="swiper-slide flex justify-center flex-col items-center swiper-slide-next" style="width: 640px;"><div style="width: 450px; height: 450px;"><img src="img/client.png"></div> <h1 style="color:black;" class="text-3xl text-black-400 font-bold">
                                   Count Business Profits
                                </h1></div> <div data-swiper-slide-index="3" class="swiper-slide flex justify-center flex-col items-center" style="width: 640px;"><div style="width: 450px; height: 450px;"><img src="img/layout.png"></div> <h1 style="color:black;" style="color:black;" class="text-3xl text-black-400 font-bold">
                                Track Your Business Performance
                                </h1></div><div data-swiper-slide-index="0" class="swiper-slide flex justify-center flex-col items-center swiper-slide-duplicate swiper-slide-duplicate-prev" style="width: 640px;"><div style="width: 450px; height: 450px;"><img src="img/folder.png"></div> <h1 style="color:black;" class="text-3xl text-black-400 font-bold">
                                    Create invoices easily
                                </h1></div></div> 
                                
                                
                                <!--end imge-->
                                
                                
                                <div class="swiper-pagination w-full flex justify-center pb-12 gap-1 swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                    <span class="swiper-pagination-bullet">

                                    </span><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span>
                                    <span class="swiper-pagination-bullet"></span></div></div></div></div> 
                                    <div style="margin-top:100px;" class="w-full lg:w-46 h-31 flex flex-col justify-center gap-12 px-6 lg:px-24 py-24 mt-12 lg:mt-0"><div class="flex flex-col gap-4" style="margin-top:-78px;"><div>
                               </div> <div class="relative py-3"><div class="absolute inset-0 bg-gradient-to-r from-light-purple to-main-page-purple shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl hidden md:block"></div> <div class="relative px-4 py-16 bg-white shadow-lg sm:rounded-3xl"><form method="POST" action="{{ route('login') }}" accept-charset="UTF-8" name="login-form" id="login-form" class="flex flex-col">@csrf
                                                        
                                                        <div class="grid grid-cols-6 gap-6"><div class="col-span-6 sm:col-span-6"><label for="sign-in-email" class="block text-sm font-medium text-gray-700">
                                                    Username <span class="text-red"></span></label> <input type="text" 
                                                     name="email" value="{{ old('email') }}" id="sign-in-email" autofocus="autofocus" class=" form-control @error('email') is-invalid @enderror  is-valid focus:outline-none focus:ring-transparent focus:border-main-page-purple mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md required">@error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror</div>  <div class="col-span-6 sm:col-span-6"><label for="register-form-email" class="block text-sm font-medium text-gray-700">
                                                    Password <span class="text-red"></span></label> <input type="password" name="password" id="register-form-email" value="" autofocus="autofocus" class="form-control @error('password') is-invalid @enderror focus:outline-none focus:ring-transparent focus:border-main-page-purple mt-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md required"> @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror</div>  <div class="col-span-6 sm:col-span-6"><div><div class="flex items-center"></div></div></div> <div class="col-span-6 sm:col-span-6 flex items-center"><input id="sign-in-remember" name="remember_me"  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="h-4 w-4 text-main-page-purple focus:outline-none focus:ring-transparent focus:border-main-page-purple border-gray-300 js-input"> <label style="margin-left:10px;" for="sign-in-remember" class="ltr:ml-2 rtl:mr-2 block text-sm font-medium text-gray-700">
                                                    Remember me
                                                </label></div> <div class="col-span-6 sm:col-span-6"><button type="submit" class="w-full inline-flex items-center justify-center py-2 px-4 border-transparent text-sm font-sm rounded-md text-white bg-main-page-purple focus:outline-none hover:bg-main-purple-hover js-button-submit">
                                                    Log in
                                                </button></div> <div class="col-span-6 sm:col-span-3 mt-5 sm:-mt-3">
                                                
                                                
                                                
                                                
                                                @if (Route::has('password.request'))
                                <a class="text-sm font-medium text-white-500 hover:text-white-900 lg:mb-0" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                                                
                                                
                                                
                                                
                                                </div> <div class="col-span-6 sm:col-span-3 -mt-3 text-left lg:text-right"><a href="" class="text-sm font-medium text-gray-500 hover:text-gray-900 lg:mb-0">Create new account</a></div></div></form></div></div> </div></div>
                                                
                                                <div class="w-full lg:w-46 flex  justify-center gap-12 px-6" style="color:white; position:absolute;bottom:0;z-index: 5;">
                                @php echo date('Y');@endphp © HAREC-HL-ERP | Powered By Hashwani Group Of Companies
                            </div>
                                                </div>
                              
                              
                              
                              
                            </div>
                          
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>  
        </div>
        <!-- BEGIN Color profile -->
        <!-- this area is hidden and will not be seen on screens or screen readers -->
        <!-- we use this only for CSS color refernce for JS stuff -->
        <p id="js-color-profile" class="d-none">
            <span class="color-primary-50"></span>
            <span class="color-primary-100"></span>
            <span class="color-primary-200"></span>
            <span class="color-primary-300"></span>
            <span class="color-primary-400"></span>
            <span class="color-primary-500"></span>
            <span class="color-primary-600"></span>
            <span class="color-primary-700"></span>
            <span class="color-primary-800"></span>
            <span class="color-primary-900"></span>
            <span class="color-info-50"></span>
            <span class="color-info-100"></span>
            <span class="color-info-200"></span>
            <span class="color-info-300"></span>
            <span class="color-info-400"></span>
            <span class="color-info-500"></span>
            <span class="color-info-600"></span>
            <span class="color-info-700"></span>
            <span class="color-info-800"></span>
            <span class="color-info-900"></span>
            <span class="color-danger-50"></span>
            <span class="color-danger-100"></span>
            <span class="color-danger-200"></span>
            <span class="color-danger-300"></span>
            <span class="color-danger-400"></span>
            <span class="color-danger-500"></span>
            <span class="color-danger-600"></span>
            <span class="color-danger-700"></span>
            <span class="color-danger-800"></span>
            <span class="color-danger-900"></span>
            <span class="color-warning-50"></span>
            <span class="color-warning-100"></span>
            <span class="color-warning-200"></span>
            <span class="color-warning-300"></span>
            <span class="color-warning-400"></span>
            <span class="color-warning-500"></span>
            <span class="color-warning-600"></span>
            <span class="color-warning-700"></span>
            <span class="color-warning-800"></span>
            <span class="color-warning-900"></span>
            <span class="color-success-50"></span>
            <span class="color-success-100"></span>
            <span class="color-success-200"></span>
            <span class="color-success-300"></span>
            <span class="color-success-400"></span>
            <span class="color-success-500"></span>
            <span class="color-success-600"></span>
            <span class="color-success-700"></span>
            <span class="color-success-800"></span>
            <span class="color-success-900"></span>
            <span class="color-fusion-50"></span>
            <span class="color-fusion-100"></span>
            <span class="color-fusion-200"></span>
            <span class="color-fusion-300"></span>
            <span class="color-fusion-400"></span>
            <span class="color-fusion-500"></span>
            <span class="color-fusion-600"></span>
            <span class="color-fusion-700"></span>
            <span class="color-fusion-800"></span>
            <span class="color-fusion-900"></span>
        </p>
        <!-- END Color profile -->
        <!-- base vendor bundle: 
			 DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations 
						+ pace.js (recommended)
						+ jquery.js (core)
						+ jquery-ui-cust.js (core)
						+ popper.js (core)
						+ bootstrap.js (core)
						+ slimscroll.js (extension)
						+ app.navigation.js (core)
						+ ba-throttle-debounce.js (core)
						+ waves.js (extension)
						+ smartpanels.js (extension)
						+ src/../jquery-snippets.js (core) --> 
        <script src="js/common.min.js"></script>

        <script src="js/app.bundle.js"></script>

        <script src="js/vendors.bundle.js"></script>


        <script>
            $("#js-login-btn").click(function(event)
            {

                // Fetch form to apply custom Bootstrap validation
                var form = $("#js-login")

                if (form[0].checkValidity() === false)
                {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.addClass('was-validated');
                // Perform ajax submit here...
            });

        </script>
    
    

</body><!-- END Body --></html>