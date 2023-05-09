<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="{{ URL::asset('assets/img/favicon.ico') }}" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="{{ URL::asset('assets/img/apple-icon.png') }}" 
    />
    <link
      rel="stylesheet"
      href="{{ URL::asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- <link rel="stylesheet" href="assets/styles/tailwind.css" />-->
   <link rel="stylesheet" href="{{ URL::asset('assets/styles/tailwind.css') }}" />
    <title>Home Services | Wahing Machine - Refrigerator - Microwave</title>
  </head>
  <body class="text-blueGray-700 antialiased flex flex-col h-screen">
    @include('theme.adminheader')
    <main>
      @yield('content')
    </main>
    <footer class="relative bg-blueGray-200 pt-8 pb-6 mt-20 mb-0">
  
      <div class="container mx-auto px-4 ">
        
        <div
          class="flex flex-wrap  items-center md:justify-between justify-center"
        >
          <div class="w-full md:w-4/12 px-4 mx-auto text-center">
            <div class="text-sm text-blueGray-500 font-semibold py-1">
              Copyright © <span id="get-current-year"></span> Home Service
              by
              <a
                href="https://www.vinsmart.in"
                class="text-blueGray-500 hover:text-blueGray-800"
                >Vinsmart Technologies</a
              >.
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
  <script>
    /* Make dynamic date appear */
    (function () {
      if (document.getElementById("get-current-year")) {
        document.getElementById("get-current-year").innerHTML =
          new Date().getFullYear();
      }
    })();
    /* Function for opning navbar on mobile */
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
    /* Function for dropdowns */
    function openDropdown(event, dropdownID) {
      let element = event.target;
      while (element.nodeName !== "A") {
        element = element.parentNode;
      }
      Popper.createPopper(element, document.getElementById(dropdownID), {
        placement: "bottom-start"
      });
      document.getElementById(dropdownID).classList.toggle("hidden");
      document.getElementById(dropdownID).classList.toggle("block");
    }
  </script>
</html>
