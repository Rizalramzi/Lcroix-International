<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link rel="stylesheet" href="{{ asset("/css/style.css") }}" />
    <link rel="stylesheet" href="{{ asset("/css/font.css") }}" />
    @vite('resources/css/app.css')
    <script src="{{ asset("/js/navbar.js") }}"></script>
</head>
<body class="relative w-full text-white">
    <nav
    id="navbar"
    class="fixed top-0 z-50 flex w-full items-center justify-between xl:px-56 md:px-24 xs:px-16 px-10 lg:py-12 py-6 transition-colors duration-300 ease-in-out"
  >
    <div class="">
      <img id="logo" src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-auto lg:w-60 sm:w-40 w-36" />
    </div>
    <div>
      <ul class="hidden sm:flex items-center md:space-x-8 space-x-2 lg:text-lg md:text-sm text-xs">
        <li><a href="{{ url('/') }}">Home</a></li>
        <div class="relative flex flex-col">
          <button id="aboutDropDesk" class=" flex items-center lg:gap-x-2 gap-x-1">
            About Us
            <img id="dropdownIconDesk" src="assets/icons/dropdown.svg" alt="" class="">
          </button>
          <div id="dropdownAboutDesk" class="absolute w-[12rem] bg-main max-h-0 opacity-0 overflow-hidden transform -translate-y-5 transition-all duration-300 flex flex-col gap-y-3 p-4 rounded-md shadow-lg top-14">
            <a href="#" class="block font-light">Profile</a>
            <a href="#" class="block font-light">Key Leaders</a>
            <a href="#" class="block font-light">Our Projects</a>
            <a href="#" class="block font-light">Our Service</a>
          </div>
        </div>
        <li><a href="{{ url('sustainability') }}">Sustainability and Social Responsibilities</a></li>
        <li><a href="{{ url('collaboration') }}">Collaboration</a></li>
        <li><a href="{{ url('contact') }}">Contact Us</a></li>
      </ul>
    </div>
    <button id="openPopup" class="block sm:hidden"><img id="open" src="{{ asset('/assets/icons/menu.svg') }}" alt=""></button>
  </nav>
  <aside id="popup" class="fixed max-w-[30rem] w-full h-screen bg-main z-[100] flex flex-col items-center pt-28 right-0 translate-x-full transition-transform duration-300">
      <img id="logo" src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-auto w-60" />
      <ul class="flex flex-col max-w-64 items-center text-lg gap-y-7 mt-9">
          <li><a href="{{ url('/') }}">Home</a></li>
          <div class="relative flex flex-col items-center">
              <button id="aboutDrop" class="flex items-center gap-x-2">
                About
                <img id="dropdownIcon" src="assets/icons/dropdown.svg" alt="" class>
              </button>
              <div id="dropdownAbout" class="max-h-0 opacity-0 overflow-hidden transform -translate-y-5 transition-all duration-300 flex flex-col items-center gap-y-7">
                <a href="#" class="block font-light">Profile</a>
                <a href="#" class="block font-light">Key Leaders</a>
                <a href="#" class="block font-light">Our Projects</a>
                <a href="#" class="block font-light">Our Service</a>
              </div>
          </div>

          <li class="text-center"><a href="{{ url('sustainability') }}">Sustainability and Social Responsibilities</a></li>
          <li><a href="{{ url('collaboration') }}">Collaboration</a></li>
          <li><a href="{{ url('contact') }}">Contact Us</a></li>
      </ul>
      <button id="closePopup" class="absolute top-9 right-9"><img src="/assets/icons/close-pop.svg" alt=""></button>
  </aside>
    <section id="service" class="relative ">
        <div class="flex flex-col items-center justify-center h-full space-y-2">
            <h1 class="text-[3rem]">Our Services</h1>
            <p class="text-md">Elevate your hospitality venture with us</p>
        </div>
    </section>
    <main class="mt-32 flex w-full flex-col justify-center">
        <section id="offer" class="relative mt-60">
            <div class="xl:px-56 sm:px-24 xs:px-16 px-9 w-full py-24">
              <span class="bg-main sm:w-3/5 w-4/5 h-full absolute top-0 left-0 z-[-1]"></span>
              <div>
                <div class="flex items-center space-x-6">
                    <h1 class="lg:text-4xl text-2xl text-white">Your Business Starts Here</h1>
                    <div class="h-[0.1rem] w-20 bg-white"></div>
                  </div>
                  <p class="mt-2 w-3/5 lg:text-lg md:text-sm text-[0.8rem]">Embark on your hospitality journey with confidence. Let us be your strategic partner from concept to successful operation.</p>
              </div>
              <div class="mt-8 flex gap-1 text-dark overflow-scroll rm-scroll">
                <div class="flex items-center justify-center min-w-[232px]">
                  <div
                    class="flex h-full flex-grow flex-col items-center bg-white lg:p-10 p-6"
                  >
                    <div class="space-y-3">
                      <img
                        src="{{ asset("/assets/offers/offer1.png") }}"
                        alt=""
                        class="h-auto w-full"
                      />
                      <p class="lg:text-lg text-base font-medium">© Feasibility Study</p>
                      <p class="lg:text-base text-[0.8rem]">
                        Conducting a thorough analysis to assess the viability and
                        potential success of your hospitality venture.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="flex items-center justify-center min-w-[232px]">
                  <div
                    class="flex h-full flex-grow flex-col items-center bg-white lg:p-10 p-6"
                  >
                    <div class="space-y-3">
                      <img
                        src="{{ asset("/assets/offers/offer2.png") }}"
                        alt=""
                        class="h-auto w-full"
                      />
                      <p class="lg:text-lg text-base font-medium">
                        © Hotel Planning & Design
                      </p>
                      <p class="lg:text-base text-[0.8rem]">
                        Crafting a unique and tailored plan for your hotel,
                        encompassing design concepts that align with your brand
                        identity.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="flex items-center justify-center min-w-[232px]">
                  <div
                    class="flex h-full flex-grow flex-col items-center bg-white lg:p-10 p-6"
                  >
                    <div class="space-y-3">
                      <img
                        src="{{ asset("/assets/offers/offer3.png") }}"
                        alt=""
                        class="h-auto w-full"
                      />
                      <p class="lg:text-lg text-base font-medium">© Pre-Opening Services</p>
                      <p class="lg:text-base text-[0.8rem]">
                        We assist in coordinating pre-opening activities, ensuring
                        a smooth transition from planning to operational
                        readiness.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="flex items-center justify-center min-w-[232px]">
                  <div
                    class="flex h-full flex-grow flex-col items-center bg-white lg:p-10 p-6"
                  >
                    <div class="space-y-3">
                      <img
                        src="{{ asset("/assets/offers/offer4.png") }}"
                        alt=""
                        class="h-auto w-full"
                      />
                      <p class="lg:text-lg text-base font-medium">© Hotel Management</p>
                      <p class="lg:text-base text-[0.8rem]">
                        Comprehensive management services, leveraging industry
                        expertise to optimize performance and guest satisfaction.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            {{-- <div
              class="absolute top-[-3rem] z-[-1] h-[30rem] w-[50rem] bg-main"
            ></div> --}}
            <img
              src="{{ asset("/assets/offers/bg-offer.png") }}"
              alt=""
              class="absolute right-0 top-[-3rem] z-[-2] h-full w-3/4 object-cover"
            />
          </section>
    </main>
    <footer class="mt-32 w-full bg-main xl:px-56 md:px-24 xs:px-16 px-10 xl:py-32 py-20">
        <div class="flex xs:flex-row flex-col w-full xs:items-start items-center xs:space-y-0 space-y-7">
          <div class="xs:w-2/6 lg:space-y-6 space-y-3 flex flex-col xs:items-start items-center">
            <h1 class="lg:text-4xl text-2xl text-white leading-relaxed xs:text-left text-center">
              L'ile Croix International Hospitality
            </h1>
            <p class="lg:text-base text-[0.7rem] xs:text-left text-center">
              ©2025 All Rights Reserved. Published by www.eda.co.id
            </p>
            <div class="flex items-center space-x-2">
              <img src="{{ asset("/assets/icons/linkedin.svg") }}" alt="" class="lg:h-10 h-6 w-auto" />
              <img src="{{ asset("/assets/icons/email.svg") }}" alt="" class="lg:h-10 h-6 w-auto" />
              <img src="{{ asset("/assets/icons/instagram.svg") }}" alt="" class="lg:h-10 h-6 w-auto" />
            </div>
          </div>
          <div class="flex xs:w-4/6 justify-end text-white">
            <div class="grid xs:grid-cols-3 grid-cols-1 lg:gap-x-14 xs:space-y-0 space-y-7">
              <div class="flex justify-center">
                <ul class="xs:text-left text-center space-y-3 lg:text-base text-[0.8rem]">
                  <li class="font-semibold sm:text-left"><a href="{{ url("") }}">Links</a></li>
                  <li class=""><a href="{{ url("") }}">Home</a></li>
                  <li class=""><a href="{{ url("") }}">About Us</a></li>
                  <li class=""><a href="{{ url("") }}">Our Services</a></li>
                  <li class=""><a href="{{ url("") }}">Our Projects</a></li>
                  <li class=""><a href="{{ url("") }}">Collaboration</a></li>
                </ul>
              </div>
              <div class="flex justify-center">
                <ul class="xs:text-left text-center space-y-3 lg:text-base text-[0.8rem]">
                  <li class="font-semibold"><a href="{{ url("") }}">Address</a></li>
                  <li class="lg:max-w-52 max-w-40">
                    <a href="{{ url("") }}">4305 Ammons Street Wheat Ridge, CO 83003</a>
                  </li>
                </ul>
              </div>
              <div class="flex justify-center">
                <ul class="xs:text-left text-center space-y-3 lg:text-base text-[0.8rem]">
                  <li class="font-semibold"><a href="{{ url("") }}">Contact Us</a></li>
                  <li class="max-w-52">
                    <a href="{{ url("") }}"
                      >For further information, please contact us via the
                      following</a
                    >
                  </li>
                  <li>
                    <div class="flex items-center space-x-2 xs:justify-start justify-center">
                      <img
                        src="{{ asset("/assets/icons/phone.svg") }}"
                        alt=""
                        class="h-6 w-auto"
                      />
                      <p class="text-[0.8rem]">+1(515)240-3086</p>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center space-x-2 xs:justify-start justify-center">
                      <img
                        src="{{ asset("/assets/icons/whatsapp.svg") }}"
                        alt=""
                        class="h-6 w-auto"
                      />
                      <p class="text-[0.8rem]">+1(515)240-3086</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </footer>
    <script>
        const popup = document.getElementById("popup");
        const openBtn = document.getElementById("openPopup");
        const closeBtn = document.getElementById("closePopup");
    
        function disableScroll() {
            document.body.style.overflow = "hidden";
        }
    
        function enableScroll() {
            document.body.style.overflow = "";
        }
    
        openBtn.addEventListener("click", function () {
            popup.classList.remove("translate-x-full");
            popup.classList.add("translate-x-0");
            disableScroll();
        });
    
        closeBtn.addEventListener("click", function () {
            popup.classList.remove("translate-x-0");
            popup.classList.add("translate-x-full");
            enableScroll();
        });
    
        const about = document.getElementById("aboutDrop");
        const dropdown = document.getElementById("dropdownAbout");
        const dropdownIcon = document.getElementById('dropdownIcon')
    
        about.addEventListener("click", function () {
          if (dropdown.classList.contains("max-h-0")) {
            dropdown.classList.remove("max-h-0", "opacity-0", "-translate-y-5");
            dropdown.classList.add("max-h-[200px]", "opacity-100", "translate-y-0", "mt-7");
            dropdownIcon.classList.add('rotate-180')
          } else {
            dropdown.classList.remove("max-h-[200px]", "opacity-100", "translate-y-0", "mt-7");
            dropdown.classList.add("max-h-0", "opacity-0", "-translate-y-5");
            dropdownIcon.classList.remove('rotate-180')
          }
        });
    
        const aboutDesktop = document.getElementById("aboutDropDesk");
        const dropdownDesktop = document.getElementById("dropdownAboutDesk");
        const dropdownIconDesktop = document.getElementById('dropdownIconDesk')
    
        aboutDesktop.addEventListener("click", function () {
          if (dropdownDesktop.classList.contains("max-h-0")) {
            dropdownDesktop.classList.remove("max-h-0", "opacity-0", "-translate-y-5");
            dropdownDesktop.classList.add("max-h-auto", "opacity-100", "translate-y-0");
            dropdownIconDesktop.classList.add('rotate-180')
          } else {
            dropdownDesktop.classList.remove("max-h-auto", "opacity-100", "translate-y-0");
            dropdownDesktop.classList.add("max-h-0", "opacity-0", "-translate-y-5");
            dropdownIconDesktop.classList.remove('rotate-180')
          }
        });
      </script>
</body>
</html>