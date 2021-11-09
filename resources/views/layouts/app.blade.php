<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="{{ asset("img/logo_univ.png") }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png"  />

    <script src="https://kendo.cdn.telerik.com/2021.3.914/js/jquery.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2021.3.914/js/kendo.all.min.js"></script>

    <link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link  rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2021.3.914/styles/kendo.common.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2021.3.914/styles/kendo.default.min.css" />

    <title>@yield('page_title') | UNISA - TRACER STUDY</title>
    <style>
        .dropdown:hover .dropdown-menu {
  display: block;
}
    </style>
  </head>
  <body class="text-blueGray-700 antialiased">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
      <nav
        class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6"
      >
        <div
          class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto"
        >
          <button
            class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
            type="button"
            onclick="toggleNavbar('example-collapse-sidebar')"
          >
            <i class="fas fa-bars"></i></button
          >
          <a
            class=" text-left md:pb-2 text-blueGray-600 self-center mr-0 flex justify-self-center whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
            href="javascript:void(0)"
          >
          <img class="max-h-12" src="{{ asset('img/logo_text.png') }}" alt="">
           
         <span class="self-center"> UNISA - TRACER STUDY</span>
          </a>
          <hr class="border">
          <ul class="md:hidden items-center flex flex-wrap list-none">
            <li class="inline-block relative">
              <a
                class="text-blueGray-500 block py-1 px-3"
                href="#pablo"
                onclick="openDropdown(event,'notification-dropdown')"
                ><i class="fas fa-bell"></i
              ></a>
              <div
                class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                style="min-width: 12rem;"
                id="notification-dropdown"
              >
                <a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Log Out</a
                >
              </div>
            </li>
            <li class="inline-block relative">
              <a
                class="text-blueGray-500 block"
                href="#pablo"
                onclick="openDropdown(event,'user-responsive-dropdown')"
                ><div class="items-center flex">
                  <span
                    class="w-12 h-12 text-sm bg-blueGray-200 inline-flex items-center justify-center rounded-full"
                    ><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                    </span></div
              ></a>
              <div
                class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                style="min-width: 12rem;"
                id="user-responsive-dropdown"
              >
                <a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Log Out</a
                >
              </div>
            </li>
          </ul>
         
          <div
            class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
            id="example-collapse-sidebar"
          >
            <div
              class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200"
            >
              <div class="flex flex-wrap">
                <div class="w-6/12">
                  <a
                    class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                    href="javascript:void(0)"
                  >
                    UNISA - TRACER STUDY
                  </a>
                </div>
                <div class="w-6/12 flex justify-end">
                  <button
                    type="button"
                    class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                    onclick="toggleNavbar('example-collapse-sidebar')"
                  >
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </div>
       
            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
              <li class="items-center">
                <a
                  class="text-blueGray-500 hover:text-green-600 text-xs uppercase py-3 font-bold block"
                  href="{{ route('home') }}"
                  ><i class="fas fa-home opacity-75 mr-2 text-sm"></i>
                  HOME</a
                >
              </li>
            
              <li class=" dropdown inline-block relative">
                <div class="flex-wrap">
                    <a
                        class="text-blueGray-500 hover:text-green-600 text-xs uppercase py-3 font-bold block"
                        href="#""
                        ><i class="fas fa-table opacity-75 mr-2 text-sm"></i>
                        DATA
                    </a >
                    <ul class="dropdown-menu hidden  text-gray-700 pt-1 ">
                        <li class=""><a class="rounded-t bg-gray-100 hover:bg-green-400 py-2 px-4 block whitespace-no-wrap" href="{{ route('data.data_tracer') }}">DATA TRACER</a></li>
                        <li class=""><a class="bg-gray-100 hover:bg-green-400 py-2 px-4 block whitespace-no-wrap" href="{{ route('data.pusat_karir') }}">PUSAT KARIR</a></li>
                        <li class=""><a class="roundet-t bg-gray-100 hover:bg-green-400 py-2 px-4 block whitespace-no-wrap" href="{{ route('data.upload_data_tracer') }}">UPLOAD DATA TRACER</a></li>
                    </ul>
                </div>
              </li>
              <li class=" dropdown inline-block relative">
                <div class="flex-wrap">
                    <a
                        class="text-blueGray-500 hover:text-green-600 text-xs uppercase py-3 font-bold block"
                        href="#"
                        ><i class="fas fa-question-circle opacity-75 mr-2 text-sm"></i>
                        KUESIONER
                    </a >
                    <ul class="dropdown-menu hidden  text-gray-700 pt-1">
                        <li class=""><a class="rounded-t bg-gray-100 hover:bg-green-400 py-2 px-4 block whitespace-no-wrap" href="#">FORM KUESIONER</a></li>
                     </ul>
                </div>
              </li>
              <li class=" dropdown inline-block relative">
                <div class="flex-wrap">
                    <a
                        class="text-blueGray-500 hover:text-green-600 text-xs uppercase py-3 font-bold block"
                        href="#/dashboard"
                        ><i class="fas fa-folder-open opacity-75 mr-2 text-sm"></i>
                        REPORT
                    </a >
                    <ul class="dropdown-menu  hidden text-gray-700 pt-1">
                        <li class=""><a class="rounded-t bg-gray-100 hover:bg-green-400 py-2 px-4 block whitespace-no-wrap" href="{{ route('report.keselarasan_horisontal') }}">REPORT KESELARASAN HORISONTAL</a></li>
                        <li class=""><a class="bg-gray-100 hover:bg-green-400 py-2 px-4 block whitespace-no-wrap" href="#">REPORT KESELARASAN VERTIKAL</a></li>
                        <li class=""><a class=" bg-gray-100 hover:bg-green-400 py-2 px-4 block whitespace-no-wrap" href="#">REPORT LAMA TUNGGU</a></li>
                        <li class=""><a class=" bg-gray-100 hover:bg-green-400 py-2 px-4 block whitespace-no-wrap" href="#">STASTISTIK PER PRODI</a></li>
                        <li class=""><a class="rounded-t bg-gray-100 hover:bg-green-400 py-2 px-4 block whitespace-no-wrap" href="#">STASTISTIK TRACER STUDY</a></li>
                    </ul>
                </div>
              </li>
            </ul>
 
          </div>
        </div>
      </nav>
      <div class="relative md:ml-64 bg-blueGray-50">
        <nav
          class="absolute top-0 left-0 w-full z-10 bg-transparent md:flex-row md:flex-nowrap md:justify-start flex items-center p-4"
        >
          <div
            class="w-full mx-autp items-center flex justify-between md:flex-nowrap flex-wrap md:px-10 px-4"
          >
            <a
              class="text-white text-sm uppercase hidden lg:inline-block font-semibold"
              href="{{ route('home') }}"
              >Home</a
            >
          
            <ul
              class="flex-col md:flex-row list-none items-center hidden md:flex"
            >
              <a class="text-blueGray-500 block boreder border-white" href="#pablo" onclick="openDropdown(event,'user-dropdown')">
                <div class="items-center flex">
                  <span
                    class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full "
                    ><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg></span>
                </div>
              </a>
              <div
                class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
                style="min-width: 12rem;"
                id="user-dropdown"
              >
                <a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
                  >Log Out</a
                >
              </div>
            </ul>
          </div>
        </nav>
        <!-- Header -->
        <div class="relative bg-green-400 md:pt-32 pb-32 pt-12">
          {{-- <div class="px-4 md:px-10 mx-auto w-full">
            <div>
              <!-- Card stats -->
              
            </div>
          </div> --}}
        </div>
        <div class="px-4 md:px-10 mx-auto w-full -m-36 mb-auto h-screen">
         
          <div class="flex flex-wrap mt-4">
            <div class="w-full  mb-12 xl:mb-0 px-4">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
                <div class="rounded-t mb-0 px-4 py-3 border-b">
                  <div class="flex flex-wrap items-center ">
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 ">
                      <h3 class="font-semibold text-base text-blueGray-700">
                        @yield('content_name')
                      </h3>
                    </div>
                    
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                      {{-- <button
                        class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
                        type="button"
                        style="transition:all .15s ease"
                      >
                        See all
                      </button> --}}
                    </div>
                  </div>
                </div>
                <div class="block w-full overflow-x-auto px-4 py-3">
                    @yield('content_body')
              </div>
              </div>
            </div>
          </div>
          <footer class="block w-full overflow-x-auto py-4 ">
            <div class="container mx-auto px-4">
              <hr class="mb-4 border-b-1 border-blueGray-200" />
              <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4">
                  <div class="text-sm text-blueGray-500 font-semibold py-1">
                    Copyright © <span id="javascript-date"></span>
                    <a
                      href="https://www.creative-tim.com"
                      class="text-blueGray-500 hover:text-blueGray-700 text-sm font-semibold py-1"
                    >
                      Creative Tim
                    </a>
                  </div>
                </div>
                <div class="w-full md:w-8/12 px-4">
                  <ul class="flex flex-wrap list-none md:justify-end  justify-center">
                    <li>
                      <a
                        href="https://www.creative-tim.com"
                        class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3"
                      >
                        Creative Tim
                      </a>
                    </li>
                    <li>
                      <a
                        href="https://www.creative-tim.com/presentation"
                        class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3"
                      >
                        About Us
                      </a>
                    </li>
                    <li>
                      <a
                        href="http://blog.creative-tim.com"
                        class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3"
                      >
                        Blog
                      </a>
                    </li>
                    <li>
                      <a
                        href="https://github.com/creativetimofficial/tailwind-starter-kit/blob/main/LICENSE.md"
                        class="text-blueGray-600 hover:text-blueGray-800 text-sm font-semibold block py-1 px-3"
                      >
                        MIT License
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </footer>
        </div>
        
      </div>
    </div>
    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
    <script type="text/javascript">
      /* Sidebar - Side navigation menu on mobile/responsive mode */
     
      function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("bg-white");
        document.getElementById(collapseID).classList.toggle("m-2");
        document.getElementById(collapseID).classList.toggle("py-3");
        document.getElementById(collapseID).classList.toggle("px-6");
      }
      /* Function for dropdowns */
      function openDropdown(event, dropdownID) {
        let element = event.target;
        while (element.nodeName !== "A") {
          element = element.parentNode;
        }
        var popper = Popper.createPopper(element, document.getElementById(dropdownID), {
          placement: "bottom-end"
        });
        document.getElementById(dropdownID).classList.toggle("hidden");
        document.getElementById(dropdownID).classList.toggle("block");
      }


    </script>
  </body>
</html>
