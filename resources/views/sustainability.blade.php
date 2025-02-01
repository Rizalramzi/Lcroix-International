<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/font.css" />
    <script src="/js/navbar.js"></script>
    @vite('resources/css/app.css')
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
    <aside id="popup" class="fixed max-w-[30rem] w-full right-0 h-screen bg-main z-[100] flex flex-col items-center pt-28 translate-x-full transition-transform duration-300">
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
    <section id="sustainability" class="relative">
        <div class="flex flex-col items-center justify-center h-full space-y-2">
            <h1 class="lg:text-[3rem] md:text-[2rem] text-[1.5rem]">Sustainability</h1>
            <p class="lg:text-md md:text-xs text-[0.8rem] text-center">Commitment to Sustainability and Global Development</p>
        </div>
    </section>
    <main class="mt-32">
        <section id="" class="mt-32">
            <div class="relative mt-32 flex sm:flex-row flex-col xl:ps-56 md:ps-24 py-[26px] gap-x-3 items-center sm:px-0 xs:px-16 px-10">
              <div class="sm:w-4/12 w-full sm:h-[25rem] flex-grow space-y-3 pt-14">
                <h1 class="lg:text-4xl md:text-2xl leading-relaxed tracking-wider text-white">
                  Sustainability
                </h1>
                <h1 class="lg:text-2xl text-xl leading-relaxed tracking-wider text-white">
                  & Social Responsibilities
                </h1>
                <p class="lg:text-base text-[0.8rem] text-white">
                  © L’ile Croix International Hospitality
                </p>
              </div>
              <div
                class="absolute left-0 z-[-1] sm:h-full sm:w-1/2 h-1/2 w-full bg-main"
              ></div>
              <div class="sm:w-8/12 w-full sm:mt-0 mt-10">
                <div
                  class="flex items-center xs:flex-row flex-col w-full xs:space-x-6 xs:space-y-0 space-y-10 xs:bg-gray xs:p-6"
                >
                  <div class="xs:px-0 px-6 flex-grow">
                      <img
                      src="{{ asset("/assets/sustainability/sustainability1.png") }}"
                      alt=""
                      class="h-full w-full object-cover"
                  />
                  </div>
                  <div class="sm:space-y-6 space-y-10 flex flex-col xs:items-start items-center">
                    <p class="lg:text-base text-[0.8rem] text-dark xl:pe-56 md:pe-24 sm:pe-10 xs:text-left text-center">
                      With a motto “Providing Sustainable Hospitality to Connect
                      People”, as a hospitality provider we aims that the hotels
                      we serve will be good stewards to earth environment by
                      minimizing their carbon footprints and waste through
                      circularity a range of energy, water, and waste measures.
                    </p>
                    <button
                      class="border border-main px-8 py-3 lg:text-base text-[0.8rem] text-main"
                    >
                      Click Here
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="mt-32 xl:px-56 md:px-24 xs:px-16 px-10 lg:py-12 py-6">
            <div class="text-main space-y-3 flex flex-col sm:items-start items-center">
                <h1 class="lg:text-2xl text-md">Please Conserve</h1>
                <h1 class="lg:text-4xl text-2xl sm:text-left text-center">Turn Off Lights and AC When You Leave</h1>
                <div class="flex space-x-2">
                    <img src="{{ asset('assets/logos/save-energy.png') }}" alt="" class="w-auto h-10">
                    <img src="{{ asset('assets/logos/save-water.png') }}" alt="" class="w-auto h-10">
                </div>
            </div>
            <div class="space-y-24 mt-12">
                <div class="relative w-full flex justify-end">
                    <div class="relative sm:w-[68%] w-full">
                        <img src="{{ asset('assets/sustainability/mom-with-kids.png') }}" alt="" class="w-full h-auto">
                        <div class="sm:absolute lg:bottom-0 bottom-[-10%] left-0 lg:ml-[-35%] sm:ml-[-48%] bg-gray lg:w-[30rem] sm:w-[27rem] w-full h-40 flex items-center justify-center p-10 text-dark sm:mt-0 mt-5">
                            <p class="lg:text-lg text-sm">We also believe that each hotel we serve will strive to become a contributing member of the surrounding community where the hotel is located.</p>
                        </div>
                    </div>
                </div>
                <div class="relative w-full flex sm:flex-row flex-col justify-start">
                    <div class="sm:w-[68%]">
                        <img src="{{ asset('assets/sustainability/greenhouse.png') }}" alt="" class="z-0 w-full h-full">
                    </div>
                    <div class="sm:w-[68%] sm:absolute bottom-[-25%] z-30 right-0 bg-gray p-10 text-dark sm:mt-0 mt-5">
                        <p class="lg:text-lg text-sm">To support these efforts, LCH is partnering with Seacosystems LLC who will provide technical expertise and facilitate programs for sustainability and community engagements.</p>
                        <p class="lg:text-lg text-sm mt-5">Seacosystems LLC is a global solutions provider focused on the renewable energy and sustainable development needs of developing communities, especially island and coastal communities. With their extensive expertise in developing and integrating technologies for sustainable water, energy, and food nexus, Seacosystems will be our valuable partner for making LCH a leading sustainable hospitality provider.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="mt-64 w-full bg-main xl:px-56 md:px-24 xs:px-16 px-10 xl:py-32 py-20">
        <div class="flex xs:flex-row flex-col w-full xs:items-start items-center xs:space-y-0 space-y-7">
          <div class="xs:w-2/6 lg:space-y-6 space-y-3 flex flex-col xs:items-start items-center">
            <h1 class="lg:text-4xl text-2xl text-white leading-relaxed xs:text-left text-center">
              L'ile Croix International Hospitality
            </h1>
            <p class="lg:text-base text-[0.7rem] xs:text-left text-center">
              ©2025 All Rights Reserved. Published by www.eda.co.id
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
