    <nav
      class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg"
     >
      <div
        class="container px-4 mx-auto flex flex-wrap items-center justify-between"
      >
        <div
          class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
        >
          <a
            class="text-xl font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap  text-white"
            href="index.html"
            >Home Services</a
          ><button
            class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
            type="button"
            onclick="toggleNavbar('example-collapse-navbar')"
          >
            <i class="text-white fas fa-bars"></i>
          </button>
        </div>
        <div
          class="lg:flex flex-grow items-center bg-white lg:bg-opacity-0 lg:shadow-none hidden"
          id="example-collapse-navbar"
        >
          <!-- <ul class="flex flex-col lg:flex-row list-none mr-auto">
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="https://www.creative-tim.com/learning-lab/tailwind/js/overview/notus?ref=njs-landing"
                ><i
                  class="lg:text-blueGray-200 text-blueGray-400 far fa-file-alt text-lg leading-lg mr-2"
                ></i>
                Docs</a
              >
            </li>
          </ul> -->
          <ul
            class="flex flex-col lg:flex-row list-none lg:ml-auto items-center"
          >
           
            <li class="inline-block relative">
              <a
                class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-l font-bold"
                href="#pablo"
                onclick="openDropdown(event,'demo-pages-dropdown')"
              >
                Services
              </a>
              
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdemos.creative-tim.com%2Fnotus-js%2F"
                target="_blank"
                ><i
                  class="lg:text-blueGray-200 text-blueGray-400 fab fa-facebook text-lg leading-lg"
                ></i
                ><span class="lg:hidden inline-block ml-2">Share</span></a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fdemos.creative-tim.com%2Fnotus-js%2F&text=Start%20your%20development%20with%20a%20Free%20Tailwind%20CSS%20and%20JavaScript%20UI%20Kit%20and%20Admin.%20Let%20Notus%20JS%20amaze%20you%20with%20its%20cool%20features%20and%20build%20tools%20and%20get%20your%20project%20to%20a%20whole%20new%20level."
                target="_blank"
                ><i
                  class="lg:text-blueGray-200 text-blueGray-400 fab fa-twitter text-lg leading-lg"
                ></i
                ><span class="lg:hidden inline-block ml-2">Tweet</span></a
              >
            </li>
            <li class="flex items-center">
              <a
                class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                href="https://github.com/creativetimofficial/notus-js?ref=njs-landing"
                target="_blank"
                ><i
                  class="lg:text-blueGray-200 text-blueGray-400 fab fa-github text-lg leading-lg"
                ></i
                ><span class="lg:hidden inline-block ml-2">Star</span></a
              >
            </li>
            <li class="flex items-center">
              <button
                class="bg-white text-blueGray-700 active:bg-blueGray-50 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"
                type="button"
              >
                <i class="fas fa-vote-yea"></i> Book a Professional
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>