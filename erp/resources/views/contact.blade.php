@extends('layouts.master')
@section('content')
<link rel="apple-touch-icon" sizes="180x180" href="https://tailwindcomponents.com/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://tailwindcomponents.com/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://tailwindcomponents.com/favicon-16x16.png">
<link rel="manifest" href="https://tailwindcomponents.com/site.webmanifest">
<link rel="mask-icon" href="https://tailwindcomponents.com/safari-pinned-tab.svg" color="#0ed3cf">
<style>
   .radd ,.badd,.cadd{
   color: #fff !important;
   background-color: #18a899  !important;
   border-color: #179c8e  !important;
   }
   .edelete,.bdelete,.cdelete {
   color: #fff !important;
   background-color: #fd1381 !important;
   border-color: #fc077a !important;
   }
   .sadd {
   color: #fff !important;
   background-color: #18a899  !important;
   border-color: #179c8e  !important;
   }
   .sdelete {
   color: #fff !important;
   background-color: #fd1381 !important;
   border-color: #fc077a !important;
   }
   .fadd {
   color: #fff !important;
   background-color: #18a899  !important;
   border-color: #179c8e  !important;
   }
   .fdelete {
   color: #fff !important;
   background-color: #fd1381 !important;
   border-color: #fc077a !important;
   }
</style>
<style>/* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.container{width:100%}@media (min-width: 640px){.container{max-width:640px}}@media (min-width: 768px){.container{max-width:768px}}@media (min-width: 1024px){.container{max-width:1024px}}@media (min-width: 1280px){.container{max-width:1280px}}@media (min-width: 1536px){.container{max-width:1536px}}.fixed{position:fixed}.relative{position:relative}.bottom-0{bottom:0px}.left-0{left:0px}.right-0{right:0px}.z-40{z-index:40}.mx-auto{margin-left:auto;margin-right:auto}.mt-6{margin-top:1.5rem}.mb-6{margin-bottom:1.5rem}.mb-0{margin-bottom:0px}.mr-1{margin-right:0.25rem}.mt-3{margin-top:0.75rem}.mb-3{margin-bottom:0.75rem}.mb-2{margin-bottom:0.5rem}.mt-2{margin-top:0.5rem}.block{display:block}.flex{display:flex}.w-full{width:100%}.min-w-0{min-width:0px}.flex-auto{flex:1 1 auto}.flex-col{flex-direction:column}.flex-wrap{flex-wrap:wrap}.items-center{align-items:center}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.break-words{overflow-wrap:break-word}.rounded-lg{border-radius:0.5rem}.rounded{border-radius:0.25rem}.rounded-t{border-top-left-radius:0.25rem;border-top-right-radius:0.25rem}.border-0{border-width:0px}.bg-gray-200{--tw-bg-opacity:1;background-color:rgb(229 231 235 / var(--tw-bg-opacity))}.bg-gray-800{--tw-bg-opacity:1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-pink-500{--tw-bg-opacity:1;background-color:rgb(236 72 153 / var(--tw-bg-opacity))}.px-4{padding-left:1rem;padding-right:1rem}.py-3{padding-top:0.75rem;padding-bottom:0.75rem}.py-1{padding-top:0.25rem;padding-bottom:0.25rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-6{padding-top:1.5rem;padding-bottom:1.5rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.pt-0{padding-top:0px}.pt-8{padding-top:2rem}.pb-6{padding-bottom:1.5rem}.text-center{text-align:center}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-xs{font-size:0.75rem;line-height:1rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-bold{font-weight:700}.font-semibold{font-weight:600}.{text-transform:}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.text-gray-200{--tw-text-opacity:1;color:rgb(229 231 235 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.shadow-lg{--tw-shadow:0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow{--tw-shadow:0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.outline-none{outline:2px solid transparent;outline-offset:2px}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-150{transition-duration:150ms}.ease-linear{transition-timing-function:linear}.hover\:text-gray-800:hover{--tw-text-opacity:1;color:rgb(31 41 55 / var(--tw-text-opacity))}.hover\:shadow-md:hover{--tw-shadow:0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring:focus{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.active\:bg-pink-600:active{--tw-bg-opacity:1;background-color:rgb(219 39 119 / var(--tw-bg-opacity))}@media (min-width: 768px){.md\:w-6\/12{width:50%}.md\:justify-between{justify-content:space-between}}@media (min-width: 1024px){.lg\:w-8\/12{width:66.666667%}.lg\:w-6\/12{width:50%}.lg\:w-4\/12{width:33.333333%}.lg\:px-10{padding-left:2.5rem;padding-right:2.5rem}}
   .hrcolor{
   margin-left: 15px;
   width: 97%;
   BACKGROUND: #4b4877;
   }
   .inputcolor{
   color:black;
   }
   .inputsizepp{
   margin-left: 38px;
   }
   .thtdspace{
   padding-bottom:1px;
   }
   .tdspace{
   margin-right: 17px;
   padding-right: 1%;
   width: 61%;
   }
   .thspace{
   width: 32%;
   margin-left: 53%;
   padding-right: 3%;
   }
   .thspaceradiobtn{
   padding-top:25px;
   width: 95%;
   margin-left: 53%;
   padding-right: 3%;
   }
   p{
   width: 96%;
   border-bottom: 1px solid black;
   } 
   textarea::-webkit-scrollbar {
   width: 15px;
   background-color: #f5f5f5;
   box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.1);
   -moz-box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.1);
   -webkit-box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.1);
   }
   textarea::-webkit-scrollbar-thumb {
   border-radius: 10px;
   background-color: #674a93;
   box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
   -moz-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
   -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
   -webkit-border-radius: 10px;
   -moz-border-radius: 10px;
   -ms-border-radius: 10px;
   -o-border-radius: 10px;
   }
   textarea {resize: none;
   scrollbar-width: thin;
   scrollbar-color: #674a93 #f5f5f5;
   }
</style>
</head>
<body class="bg-gray-200">
   <div class="fixed bottom-0 left-0 right-0 z-40 px-4 py-3 text-center text-white bg-gray-800">
      This a Account Card by Creative Tim. 
      <a class="text-gray-200 underline" href="https://tailwindcomponents.com/component/account-card">Component details</a>
   </div>
   <div class="row">
      <div class="col-xl-12">
         <div id="panel-1" class="panel">
            <div class="panel-hdr">
               <h2>
                    Export | Raise Profoma</span>
               </h2>
               <div class="panel-toolbar">
               </div>
            </div>
            <div class="panel-container show">
               <!--form code start pieces-->
               @if ($errors->any())
               <div class="alert alert-danger">
                  <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
               <br />
               @endif     
               @if(session()->has('message'))
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Success!</strong> Contract Created Successfully.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               @endif
       
                  <form method="post" action="{{ route('contact.store') }}">
                  @csrf
                  <!--form code end pieces-->
                  <div class="panel-content">
                     <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active fs-lg px-4" data-toggle="tab" href="#tab_direction-1" role="tab" aria-selected="true" >
                           <i class="fal fa-home text-success"></i>
                           <span class="hidden-sm-down ml-1">Export | Create Export Contract</span>
                           </a>    
                        </li>
                        
                     </ul>
                     <div class="tab-content p-3">
                        <div class="tab-pane fade active show" id="tab_direction-1" role="tabpanel">
                           <!--proforma form section start-->
                           <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                              <div class="rounded-t bg-white mb-0 px-6 py-6">
                                 <div class="text-center flex justify-between">
                                    <h6 class="text-blueGray-700 text-xl font-bold" style="text-align:left;">
                                       Export Contract Short Form			
                                       <br>
                                       <span style="
                                          font-size: 16px;
                                          "><i>Create Export Contract With Basic Details			
                                       </i></span>
                                    </h6>
                                    <span>  <a href="#" class="dtr-control bg-pink-500 text-white active:bg-pink-600 font-bold  text-xs px-4 py-4 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button" style="
                                       background: #151515;
                                       ">
                                    Create Contract
                                    </a> <a href ="view-proforma" class="bg-pink-500 text-white active:bg-pink-600 font-bold  text-xs px-6 py-4 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                                    View Contract
                                    </a></span>
                                 </div>
                              </div>
                              <div style="color:black;
                                 background: #6763b824;
                                 " class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                 <br>
                                 <div class="flex flex-wrap">
                                    <div class="col-sm-4">
                                       <div class="relative w-full mb-3">
                                          <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                          Contract Type	
                                          </label>
                                          <select style="width:100%;" name="contract_type" class="inputcolor border-0 px-3 py-3 placeholder-blueGray-300 
                                             text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                             <option value="1">Export</option>
                                             <option value="0">Local</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-sm-4">
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="relative w-full mb-3">
                                          <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                          Company Name
                                          </label>
                                           <input type="hidden" name="company_id" class="inputcolor border-0 px-3 py-3 placeholder-blueGray-300 
                                             text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="1">
                                             <input type="text" name="company_name" class="inputcolor border-0 px-3 py-3 placeholder-blueGray-300 
                                             text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Hashmani Groups">
                                          </div>
                                    </div>
                                 </div>
                                 <hr class="hrcolor mt-12 border-b-1 border-blueGray-300">
                                 <br>
                                 <div class="flex flex-wrap">
                                    <div class="col-sm-4">
                                       <div class="relative w-full mb-3">
                                          <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                          Export Contract Code ID		
                                          </label>
                                          <input type="text" name="export_contract_code_id" class="inputcolor border-0 px-3 py-3 placeholder-blueGray-300 
                                             text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="EXC/22-23/00001">
                                       </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="relative w-full mb-3">
                                          <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                          Export Contract Number		
                                          </label>
                                          <input type="text" name="contract_number" class="inputcolor border-0 px-3 py-3 placeholder-blueGray-300 
                                             text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="HAREC/4026/23">
                                       </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="relative w-full mb-3">
                                          <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                          Export Contract Date		
                                          </label>
                                          <input style="width:100%;" type="date" name="contract_date" class="inputcolor border-0 px-3 py-3 placeholder-blueGray-300 
                                             text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                       </div>
                                    </div>
                                 </div>
                                 <hr class="hrcolor mt-12 border-b-1 border-blueGray-300">
                                 <br>
                                 <div class="flex flex-wrap">
                                    <div class="col-sm-4">
                                       <div class="relative w-full mb-3">
                                          <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                          Buyer Category	
                                          </label>
                                          <select style="width:100%;" name="buyer_category" class="inputcolor border-0 px-3 py-3 placeholder-blueGray-300 
                                             text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                             <option value="1">Export Buyer</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="relative w-full mb-3">
                                          <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                          Buyer Name	
                                          </label>
                                          <select style="width:100%;" name="buyer_id" class="inputcolor border-0 px-3 py-3 placeholder-blueGray-300 
                                             text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                             <option value="1">Saqib Attari</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="relative w-full mb-3">
                                          <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                          Buyer Country	
                                          </label>
                                          <select style="width:100%;" name="buyer_country" class="inputcolor border-0 px-3 py-3 placeholder-blueGray-300 
                                             text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                             <option value="1">Philippines</option>
                                             <option value="0">Other Countries</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <hr class="hrcolor mt-12 border-b-1 border-blueGray-300">
                                 <br>
                                 <div class="flex flex-wrap">
                                      <div class="col-sm-4">
                <div class="relative w-full mb-3">
                  <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                  Trading Currency

                  </label>
                  <input style="width:100%;" type="text" name="trading_currency" class="inputcolor border-0 px-3 py-3 placeholder-blueGray-300 
                  text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="PKR">
                </div>
              </div>
                                     <div class="col-sm-4">
                                       <div class="relative w-full mb-3">
                                          <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                          Exchange Rate	
                                          </label>
                                          <input type="number" style="width:100%;" name="exchange_rate" value="1" class="inputcolor border-0 px-3 py-3 placeholder-blueGray-300 
                                             text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        
                                       </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="relative w-full mb-3">
                                          <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                          SPS Status	
                                          </label>
                                          <select style="width:100%;" name="sps_status" class="inputcolor border-0 px-3 py-3 placeholder-blueGray-300 
                                             text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                             <option value="1">Yes</option>
                                             <option value="0">No</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <hr class="hrcolor mt-12 border-b-1 border-blueGray-300">
                                 <br>
                                 <div class="flex flex-wrap">
                                    <div class="col-sm-12">
                                       <div class="relative w-full mb-3">
                                          <label class="block  text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                          Buyer Address
                                          </label>
                                          <textarea class="inputcolor border-0 px-3 py-3 placeholder-blueGray-300 
                                             text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="buyer_address">313 Theatre Rd. Blackwood, NJ 08012</textarea>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </form>
                              <div class="panel-container show">
                                 <div class="panel-content">
                                    <h5 class="text-blueGray-700 text-xl font-bold" style="text-align: center;
                                       background: #674a93;
                                       color: white;
                                       font-size: 18px;">
                                      Basic Contract Details			
                                    </h5>
                                    <div class="frame-wrap">
                                       <div style=" overflow-x:auto;  padding-bottom: 15px;">
                                          <table>
                                           
                                                      <tr>
                                                         <th  class="text-center">Description Of Goods</th>
                                                         <th class="text-center">Quantity	</th>
                                                    
                                                         <th class="text-center">Actual Rates	
 </th>
                                                         <th class="text-center">Total Value | FCY Amount	</th><th class="text-center">Total Value | PKR Amount	</th>
                                                         <th><button type="button" style="width: 42px;
                                                            font-size: 10px;" class="btn btn-success fadd">+</button></th>
                                                      </tr>
                                                      <tr class="fclone">
                                                         <td>
                                                            <textarea style="margin-top:30px; width:100%;" class=" form-control inputcolor border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 fremove" cols="50"></textarea>
                                                         </td>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                            <td>
                               <input type="text"style="width:100%;" id="qty" class="calc_count qtya form-control inputcolor border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            
                             </td>
                             <td>
                           <input type="text" style="width:100%;" id="rates" class="calc_count ratea form-control inputcolor border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            
                             </td>
                             <td>
                               <input type="text" style="width:100%; " readonly='readonly' class="  amounta form-control inputcolor border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
            
                             </td>
                         
                         
                                                        
                                                        
                                                        
                                                        <td>
                                                            <input type="text" style="width:100%;"  readonly='readonly' class=" amountb form-control inputcolor border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                         </td>
                                                         <td><button type="button" style="width: 42px;
                                                            font-size: 10px;" class="btn btn-danger fdelete">-</button></td>
                                                      </tr>
                                                      <tfoot >
                                                         <tr>
                                                            <td colspan="6">
                                                               <br> 
                                                               <p></p>
                                                            </td>
                                                         </tr>
                                                         <tr class="eclone">
                                                       
                                                            <td   style=" padding-top:20px; "   colspan="1">
                                                               <input value="Sub Total" type="text"style="font-weight: 700;" class="  form-control inputcolor border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" readonly="readonly">
                                                            </td>
                                                            <td   style=" padding-top:20px; "  >
                                                               <input type="text" style="margin-right:32px; width:100%;;" class="pro_us_totalb form-control inputcolor border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                            </td>
                                                             <td   style=" padding-top:20px; "  >
                                                               <input type="text" style="margin-right:32px; width:100%;;" class="pro_us_totalb form-control inputcolor border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                            </td>
                                            
                                                             <td   style=" padding-top:20px; "  >
                                                               <input type="text" style="margin-right:32px; width:100%;;" class="pro_us_totalb form-control inputcolor border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                            </td>
                                            
                                                             <td   style=" padding-top:20px; "  >
                                                               <input type="text" style="margin-right:32px; width:100%;;" class="pro_pkr_totalb form-control inputcolor border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                            </td>
                                            
                                            
                                            
                                                         </tr>
                                                      </tfoot>
                                                   </table>
                                              
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                          
                           </div>
                           <hr class=" hrcolor mt-12 border-b-1 border-blueGray-300">
                           <br>
                           <div class="flex flex-wrap">
                              <div class="w-full lg:w-12/12 px-4">
                                 <div class="relative w-full mb-3">
                                    <button style=" 
                                       width: 13.5%;
                                       float: right;
                                       background: #886ab5;
                                       height: 60px;" type="submit" class="bg-purple-500 text-white active:bg-purple-600 font-bold  text-xs px-4 py-4 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"  >Save</button>
                                 </div>
                              </div>
                           </div>
                           <!---proforma form section end--->
                        </div>
                        <div class="tab-pane fade" id="tab_direction-2" role="tabpanel">
                           <!--proforma advance form section start-->
                           <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                              <div class="rounded-t bg-white mb-0 px-6 py-4">
                              </div>
                              <!--advance display on proforma print-->
                              <!--end advance display on profroma print -->
                              <!--<beneficary bank -->
                              <div class="panel-container show">
                                 <div class="panel-content">
                                    <div class="frame-wrap p-0 border-0 m-0">
                                       <table class="table.table-bordered" style="color:black; width:100%;" id="table-example">
                                          <thead>
                                             <tr>
                                                <h5 class="text-blueGray-700 text-xl font-bold" style="text-align: center;
                                                   background: #674a93;
                                                   color: white;
                                                   font-size: 18px;">
                                                   Advance Display Options On Proforma Print															
                                                </h5>
                                             </tr>
                                             <tr class="blone" style="
                                                font-size: 16px;
                                                text-align: center;
                                                margin-bottom: 57px;
                                                ">
                                                <th class=""></th>
                                                <th></th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr class="bclone">
                                                <th style=" padding-top:25px; " class="thspaceradiobtn thtdspace bremove"><b><input type="text" name="other_particular" class="inputsizepp inputcolor border-0 px-3 py-3 placeholder-blueGray-300 
                                                   text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="No Advance"></b></td>
                                                <td style="padding-top:25px;" class="tdspace thtdspace">
                                                   <div class="custom-control custom-switch">
                                                      <input type="checkbox" class="custom-control-input"  id="customSwitch5" checked="">
                                                      <label class="custom-control-label" for="customSwitch5"></label>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr class="bclone">
                                                <th style="  " class="thspaceradiobtn thtdspace bremove"><b><input type="text" name="other_particular" class="inputsizepp inputcolor border-0 px-3 py-3 placeholder-blueGray-300 
                                                   text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Advance Against SPS"></b></td>
                                                <td style="padding-top:25px;" class="tdspace thtdspace">
                                                   <div class="custom-control custom-switch">
                                                      <input type="checkbox" class="custom-control-input"  id="customSwitch6" checked="">
                                                      <label class="custom-control-label" for="customSwitch6"></label>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr class="bclone">
                                                <th style="  " class="thspaceradiobtn thtdspace bremove"><b><input type="text" name="other_particular" class="inputsizepp inputcolor border-0 px-3 py-3 placeholder-blueGray-300 
                                                   text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Advance Split Amount"></b></td>
                                                <td style="padding-top:25px;" class="tdspace thtdspace">
                                                   <div class="custom-control custom-switch">
                                                      <input type="checkbox" class="custom-control-input"  id="customSwitch7" checked="">
                                                      <label class="custom-control-label" for="customSwitch7"></label>
                                                   </div>
                                                </td>
                                             </tr>
                                             <tr class="bclone">
                                                <th style="  " class="thspaceradiobtn thtdspace bremove"><b><input type="text" name="other_particular" class="inputsizepp inputcolor border-0 px-3 py-3 placeholder-blueGray-300 
                                                   text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Advance + SPS Amount"></b></td>
                                                <td style="padding-top:25px;" class="tdspace thtdspace">
                                                   <div class="custom-control custom-switch">
                                                      <input type="checkbox" class="custom-control-input"  id="customSwitch8" checked="">
                                                      <label class="custom-control-label" for="customSwitch8"></label>
                                                   </div>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                              <!--end-->
                              <!--end-->
                           </div>
                           <!---proforma advance form section end--->
                        </div>
                     </div>
                  </div>
                  <!--formend code start pieces-->
              
               <!--formend code end pieces-->
            </div>
         </div>
      </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
   <script>
      /*
      $(".calc_count").live("change focusout", function(){
       
      
      // var total=0;
      
      // var that = this;
      // var qty=$(that).closest(".eclone").find("#qty").val();
      // var rates=$(that).closest(".eclone").find("#rates").val();
      // console.log("qty : " + qty);
      
      
      //   var sum = 0;
      //     $(".qtya").each(function(){
      //       var qty=$(that).closest(".eclone").find("#qty").val();
      //       var rates=$(that).closest(".eclone").find("#rates").val();
      //       var sum+=qty*rates
      //     });
      // console.log("rates : " + ratsumes);
      
      });*/
      
      
      
      
      
      
      
      
       $(document).on("change",".calc_count",function() {  
      
      
      	debugger;
       	var qtya = $(this).closest('tr').find('.qtya').val();
       var ratea = 	$(this).closest('tr').find('.ratea').val();
      var exchange = 	$(this).closest('tr').find('.exchange').val();
      
       var tamt = qtya*ratea;
       
       $(this).closest('tr').find('.amounta').val(tamt);
       
      	
      	
      		$('.amounta').each(function() {
      
       
         var sum =  calculateSum();
        
      });
      		
      	var sum = 0;
          $(".calc_count").each(function(){
            var qty=$(this).closest('tr').find('.qtya').val();
           var rates=	$(this).closest('tr').find('.ratea').val();
           
             sum +  (qty*rates);
           
          });
          
          $(this).closest('tr').find('.pro_us_totala').val(sum);
       
       var pkramt = sum*exchange;
       
              $(this).closest('tr').find('.pro_pkr_totala').val(pkramt);
       
      	
       });
       
       
        $(document).on("change",".calc_countb",function() {  
      
      
      
       	var qtyb = $(this).closest('tr').find('.qtyb').val();
       var rateb = 	$(this).closest('tr').find('.rateb').val();
      var exchange = 	$(this).closest('tr').find('.exchange').val();
      
       var tamt = qtyb*rateb;
       
       $(this).closest('tr').find('.amountb').val(tamt);
      	
      		var sum = 0;
          $(".calc_countb").each(function(){
            var qty=$(this).closest('tr').find('.qtyb').val();
           var rates=	$(this).closest('tr').find('.rateb').val();
           
        var sum = sum +  (qty*rates);
           
          });
          
            $(this).closest('tr').find('.pro_us_totalb').val(sum);
       
              var pkramt = sum*exchange;
       
              $(this).closest('tr').find('.pro_pkr_totalb').val(pkramt);
      	
       });
      
      
      
                          $(document).on("click",".cadd",function() {  
                      
                                      //$(".reportselect").select2("destroy");
                              var $tr    = $('.cremove:last').closest('.cclone');
                              var $clone = $tr.clone();
                              $tr.after($clone);
                              $('.qty-class').change(function(){});
                              $('.cost-class').change(function(){});
                        });
                                  
                                  
                                  
                                    $(document).on("click",".cdelete",function() {
              // alert("click bound to document listening for #test-element");
               $(this).closest('tr').remove();
          });
      
      
                          $(document).on("click",".badd",function() {  
                      
                                      //$(".reportselect").select2("destroy");
                              var $tr    = $('.bremove:last').closest('.bclone');
                              var $clone = $tr.clone();
                              $tr.after($clone);
                              $('.qty-class').change(function(){});
                              $('.cost-class').change(function(){});
                        });
                                  
                                  
                                  
                                    $(document).on("click",".bdelete",function() {
              // alert("click bound to document listening for #test-element");
               $(this).closest('tr').remove();
          });
      
       
         
         
             $(document).on("click",".sadd",function() {  
                                      //$(".reportselect").select2("destroy");
                              var $tr    = $('.sremove:last').closest('.sclone');
                              var $clone = $tr.clone();
                              $tr.after($clone);
                              $('.qty-class').change(function(){});
                              $('.cost-class').change(function(){});
                        });
                                  
                                  
                                  
                                    $(document).on("click",".sdelete",function() {
              // alert("click bound to document listening for #test-element");
               $(this).closest('tr').remove();
          });
      
         
         
                          $(document).on("click",".radd",function() {  
                          
                                      //$(".reportselect").select2("destroy");
                              var $tr    = $('.rremove:last').closest('.eclone');
                              var $clone = $tr.clone();
                              $tr.after($clone);
                              $('.qty-class').change(function(){});
                              $('.cost-class').change(function(){});
                              
                        });
                                  
                                  
                                  
                                  
                                    $(document).on("click",".edelete",function() {
              // alert("click bound to document listening for #test-element");
               $(this).closest('tr').remove();
          });
      
             
             
                  $(document).on("click",".fadd",function() {  
                                      //$(".reportselect").select2("destroy");
                              var $tr    = $('.fremove:last').closest('.fclone');
                              var $clone = $tr.clone();
                              $tr.after($clone);
                              $('.qty-class').change(function(){});
                              $('.csost-class').change(function(){});
                        });
                                  
                                  
                                  
                                    $(document).on("click",".fdelete",function() {
              // alert("click bound to document listening for #test-element");
               $(this).closest('tr').remove();
          });
       
                                  
   </script>
   @endsection