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
      <img id="logo" src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-auto lg:w-60 sm:w-48 w-36" />
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
    <section id="collaboration" class="relative ">
        <div class="flex flex-col items-center justify-center h-full space-y-2">
            <h1 class="lg:text-[3rem] md:text-[2rem] text-[1.5rem]">Collaboration</h1>
            <p class="lg:text-md md:text-xs text-[0.8rem] text-center">Join us in Shaping Sustainable Hospitality</p>
        </div>
    </section>
    <main class="mt-32 flex w-full flex-col justify-center">
        <section class="mt-32 flex flex-col items-center xl:px-56 md:px-24 xs:px-16 px-10">
            <div class="flex w-full items-center justify-between gap-x-5 md:px-48">
              <div class="h-[0.1rem] w-20 bg-main"></div>
              <h1 class="lg:text-4xl text-2xl leading-relaxed tracking-wider text-main text-center">
                Why Partnering With Us ?
              </h1>
              <div class="h-[0.1rem] w-20 bg-main"></div>
            </div>
            <div class="mt-16 grid md:grid-cols-4 xs:grid-cols-2 grid-cols-1 gap-2">
              <div class="flex lg:h-72 flex-grow bg-gray lg:p-10 p-8">
                <div class="space-y-6">
                  <div
                    class="flex lg:h-16 h-14 lg:w-16 w-14 items-center justify-center rounded-full bg-main"
                  >
                    <img src="{{ asset("/assets/icons/plus.svg") }}" alt="" class="h-auto lg:w-5 w-4" />
                  </div>
                  <p class="min-h-20 lg:text-base text-[0.8rem] text-dark">
                    Extensive proven experience in hospitality business,
                    specifically on MICE operation and management
                  </p>
                </div>
              </div>
              <div class="flex lg:h-72 flex-grow bg-gray lg:p-10 p-8">
                <div class="space-y-6">
                  <div
                    class="flex lg:h-16 h-14 lg:w-16 w-14 items-center justify-center rounded-full bg-main"
                  >
                    <img
                      src="{{ asset("/assets/icons/wallet.svg") }}"
                      alt=""
                      class="h-auto lg:w-5 w-4"
                    />
                  </div>
                  <p class="min-h-20 lg:text-base text-[0.8rem] text-dark">
                    Increase potential cash flow profit by lower management and
                    operator costs
                  </p>
                </div>
              </div>
              <div class="flex lg:h-72 flex-grow bg-gray lg:p-10 p-8">
                <div class="space-y-6">
                  <div
                    class="flex lg:h-16 h-14 lg:w-16 w-14 items-center justify-center rounded-full bg-main"
                  >
                    <img src="{{ asset("/assets/icons/book.svg") }}" alt="" class="h-auto lg:w-5 w-4" />
                  </div>
                  <p class="min-h-20 lg:text-base text-[0.8rem] text-dark">
                    In-house education and training for acquiring high quality
                    hospitality services
                  </p>
                </div>
              </div>
              <div class="flex lg:h-72 flex-grow bg-gray lg:p-10 p-8">
                <div class="space-y-6">
                  <div
                    class="flex lg:h-16 h-14 lg:w-16 w-14 items-center justify-center rounded-full bg-main"
                  >
                    <img src="{{ asset("/assets/icons/globe.svg") }}" alt="" class="h-auto lg:w-5 w-4" />
                  </div>
                  <p class="lg:text-base text-[0.8rem] text-dark">
                    Expertise to support meaningful sustainability, community
                    development and global engagement
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section class="w-full mt-32 xl:px-56 md:px-24 xs:px-16 px-10 space-y-10">
            <div class="flex flex-col items-center w-full space-y-10">
                <h1 class="lg:text-4xl text-2xl leading-relaxed tracking-wider text-main text-center lg:max-w-[50rem] max-w-[30rem]">
                    Decades of Experience in Hospitality Business and Education
                </h1>
                <div class="flex sm:flex-row flex-col sm:space-x-2">
                    <img src="{{ asset("/assets/logos/salakhospitality.png") }}" alt="" class="lg:w-64 w-48 h-auto">
                    <img src="{{ asset("/assets/logos/sekolahtinggipwstbogor.png") }}" alt="" class="lg:w-64 w-48 h-auto">
                </div>
            </div>
            <div class="">
                <div class="relative w-full flex sm:flex-row flex-col justify-start">
                    <div class="sm:w-[68%]">
                        <img src="{{ asset('assets/collaboration/hotel-with-umbrella.png') }}" alt="" class="z-0 w-full h-full">
                    </div>
                    <div class="sm:w-1/2 sm:absolute bottom-[-15%] z-30 right-0 bg-gray p-10 text-dark sm:mt-0 mt-5">
                        <p class="lg:text-lg text-sm">LCH leadership in hospitality is supported by international experts from Salak Hospitality group from Indonesia with more than 25 years of experiences in developing, managing and operating 4-star hotels, along with experiences of managing Meeting, Incentive, Convention and Exhibition (MICE) events.</p>
                    </div>
                </div>
                <div class="relative w-full flex mt-64 sm:flex-row flex-col justify-end">
                    <div class="sm:w-[68%]">
                        <img src="{{ asset('/assets/collaboration/hotel-room.png') }}" alt="" class="z-0 w-full h-full">
                    </div>
                    <div class="sm:w-1/2 sm:absolute bottom-0 z-30 left-0 bg-gray p-10 text-dark sm:mt-0 mt-5">
                        <p class="lg:text-lg text-sm">Our hospitality program is also supported by STP Bogor (Bogor College of Tourism), established in 1999 in Bogor City, Indonesia, which has produced more than 10,000 alumni spread around the world working in various areas of hospitality and tourism sectors. These Alumni are valuable network for LCH in developing its international presence.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full mt-32 xl:px-56 md:px-24 xs:px-16 px-10">
            <h1 class="lg:text-4xl text-2xl leading-relaxed tracking-wider text-main text-center">
                Our Clients
            </h1>
            <div class="mt-24 flex flex-wrap md:gap-14 sm:gap-10 gap-5 justify-center">
                <img class="md:w-48 sm:w-40 w-36 h-auto" src="{{ asset('assets/client/patrajasa.png') }}" alt="patrajasa">
                <img class="md:w-48 sm:w-40 w-36 h-auto" src="{{ asset('assets/client/marimo.png') }}" alt="marimo">
                <img class="md:w-48 sm:w-40 w-36 h-auto" src="{{ asset('assets/client/cozzykostel.png') }}" alt="cozzykostel">
                <img class="md:w-48 sm:w-40 w-36 h-auto" src="{{ asset('assets/client/logos.png') }}" alt="logos">
                <img class="md:w-48 sm:w-40 w-36 h-auto" src="{{ asset('assets/client/thegarden.png') }}" alt="thegarden">
                <img class="md:w-48 sm:w-40 w-36 h-auto" src="{{ asset('assets/client/tirtamansion.png') }}" alt="tirtamansion">
                <img class="md:w-48 sm:w-40 w-36 h-auto" src="{{ asset('assets/client/trizara.png') }}" alt="trizara">
                <img class="md:w-48 sm:w-40 w-36 h-auto" src="{{ asset('assets/client/salakhotel.png') }}" alt="salakhotel">
                <img class="md:w-48 sm:w-40 w-36 h-auto" src="{{ asset('assets/client/dailyinnhotel.png') }}" alt="dailyinnhotel">
                <img class="md:w-48 sm:w-40 w-36 h-auto" src="{{ asset('assets/client/agriahotel.png') }}" alt="agriahotel">
                <img class="md:w-48 sm:w-40 w-36 h-auto" src="{{ asset('assets/client/alditavilla.png') }}" alt="alditavilla">
                <img class="md:w-48 sm:w-40 w-36 h-auto" src="{{ asset('assets/client/grandequator.png') }}" alt="grandequator">
                <img class="md:w-48 sm:w-40 w-36 h-auto" src="{{ asset('assets/client/dailyinn.png') }}" alt="dailyinn">
                <img class="md:w-48 sm:w-40 w-36 h-auto" src="{{ asset('assets/client/cabanasurf.png') }}" alt="cabanasurf">
                <img class="md:w-48 sm:w-40 w-36 h-auto" src="{{ asset('assets/client/bizzhotel.png') }}" alt="bizzhotel">
                <img class="md:w-48 sm:w-40 w-36 h-auto" src="{{ asset('assets/client/lafayettehotel.png') }}" alt="lafayettehotel">
                <img class="md:w-48 sm:w-40 w-36 h-auto" src="{{ asset('assets/client/dediamondcibodas.png') }}" alt="dediamondcibodas">
                <img class="md:w-48 sm:w-40 w-36 h-auto" src="{{ asset('assets/client/dewastuhotel.png') }}" alt="dewastuhotel">
                <img class="md:w-48 sm:w-40 w-36 h-auto" src="{{ asset('assets/client/theramelauhotel.png') }}" alt="thermalauhotel">
                <img class="md:w-48 sm:w-40 w-36 h-auto" src="{{ asset('assets/client/ipcresidence.png') }}" alt="ipcresidence">
                <img class="md:w-48 sm:w-40 w-36 h-auto" src="{{ asset('assets/client/salakresidence.png') }}" alt="salakeresidence">
                <img class="md:w-48 sm:w-40 w-36 h-auto" src="{{ asset('assets/client/salakexpress.png') }}" alt="salakexpress">            
            </div>
        </section>
    </main>
    <footer class="mt-32 w-full bg-main xl:px-56 md:px-24 xs:px-16 px-10 xl:py-32 py-20">
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
                  <li class="lg:max-w-52 max-w-48">
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