<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | Lcroix International</title>
    <link rel="stylesheet" href="{{ asset("/css/style.css") }}" />
    <link rel="stylesheet" href="{{ asset("/css/font.css") }}" />
    <script src="{{ asset("/js/navbar.js") }}"></script>
    @vite('resources/css/app.css')
  </head>
  <body class="relative w-full text-white">
        <nav
    id="navbar"
    class="fixed top-0 z-50 flex w-full items-center justify-between xl:px-56 md:px-24 xs:px-16 px-10 lg:py-12 py-6 transition-colors duration-300 ease-in-out text-white"
    >
    <div class="">
      <img id="logo" src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-auto lg:w-60 sm:w-40 w-36" />
    </div>
    <div class="">
      <ul class="hidden sm:flex items-center md:space-x-8 space-x-2 lg:text-lg md:text-sm text-xs">
        <li><a href="{{ url('/') }}">Home</a></li>
        <div class="relative flex flex-col">
          <button id="aboutDropDesk" class=" flex items-center lg:gap-x-2 gap-x-1">
            About Us
            <img id="dropdownIconDesk" src="assets/icons/dropdown.svg" alt="" class="">
          </button>
          <div id="dropdownAboutDesk" class="absolute w-[12rem] bg-main max-h-0 opacity-0 overflow-hidden transform -translate-y-5 transition-all duration-300 flex flex-col gap-y-3 p-4 rounded-md shadow-lg top-14">
            <a href="{{ url("profile")}}" class="block font-light">Profile</a>
            <a href="{{ url("leaders")}}" class="block font-light">Key Leaders</a>
            <a href="{{ url("projects")}}" class="block font-light">Our Projects</a>
            <a href="{{ url("service")}}" class="block font-light">Our Service</a>
          </div>
        </div>
        <li><a href="{{ url('sustainability') }}">Sustainability and Social Responsibilities</a></li>
        <li><a href="{{ url('collaboration') }}">Collaboration</a></li>
        <li><a href="{{ url('contact') }}">Contact Us</a></li>
      </ul>
    </div>
    <button id="openPopup" class="block sm:hidden"><img id="open" src="{{ asset('/assets/icons/menu.svg') }}" alt=""></button>
    </nav>
    <aside id="popup" class="fixed max-w-[30rem] w-full h-screen bg-main z-[100] flex flex-col items-center pt-28 right-0 translate-x-full transition-transform duration-300 text-white">
      <img id="logo" src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-auto w-60" />
      <ul class="flex flex-col max-w-64 items-center text-lg gap-y-7 mt-9">
          <li><a href="{{ url('/') }}">Home</a></li>
          <div class="relative flex flex-col items-center">
              <button id="aboutDrop" class="flex items-center gap-x-2">
                About
                <img id="dropdownIcon" src="assets/icons/dropdown.svg" alt="" class>
              </button>
              <div id="dropdownAbout" class="max-h-0 opacity-0 overflow-hidden transform -translate-y-5 transition-all duration-300 flex flex-col items-center gap-y-7">
                <a href="{{ url("profile")}}" class="block font-light">Profile</a>
                <a href="{{ url("leaders")}}" class="block font-light">Key Leaders</a>
                <a href="{{ url("projects")}}" class="block font-light">Our Projects</a>
                <a href="{{ url("service")}}" class="block font-light">Our Service</a>
              </div>
          </div>

          <li class="text-center"><a href="{{ url('sustainability') }}">Sustainability and Social Responsibilities</a></li>
          <li><a href="{{ url('collaboration') }}">Collaboration</a></li>
          <li><a href="{{ url('contact') }}">Contact Us</a></li>
      </ul>
      <button id="closePopup" class="absolute top-9 right-9"><img src="/assets/icons/close-pop.svg" alt=""></button>
    </aside>
    <section
      id="hero"
      class="hero relative z-30 flex h-screen w-screen items-center justify-center overflow-hidden text-white"
    >
      <!-- Button Slider -->
      <div class="absolute z-50 flex w-full items-center justify-between">
        <div
          class="flex cursor-pointer items-center justify-center bg-black sm:px-4 sm:py-8 px-3 py-6 opacity-50"
          onclick="changeSlide(currentIndex - 1)"
        >
          <img src="{{ asset("/assets/icons/arrow.svg") }}" alt="" class="h-auto lg:w-5 md:w-4 w-2" />
        </div>
        <div
          class="flex cursor-pointer items-center justify-center bg-black sm:px-4 sm:py-8 px-3 py-6 opacity-50"
          onclick="changeSlide(currentIndex + 1)"
        >
          <img
            src="{{ asset("/assets/icons/arrow.svg") }}"
            alt=""
            class="h-auto lg:w-5 md:w-4 w-2 rotate-180"
          />
        </div>
      </div>

      <div class="absolute z-20 flex w-full items-center justify-center pt-10">
        <div class="xs:w-3/4 w-full">
          <div class="xl:ps-56 md:ps-24 xs:ps-16 ps-9 pt-16">
            <h1 class="max-w-[95%] lg:text-[4rem] md:text-[3rem] xs:text-[2rem] text-[1.25rem] lg:leading-[5rem] leading-relaxed tracking-wider">
              L'ile Croix International Hospitality
            </h1>
            <p class="xs:max-w-[95%] w-full lg:text-xl sm:text-base text-xs pt-6">
              Hotel Operation and Management Service Company
            </p>
          </div>
          <div
            class="mt-16 flex h-12 w-1/2 items-center bg-gradient-to-r from-main to-transparent"
          >
            <p class="xl:ps-56 sm:ps-24 xs:ps-16 ps-9 lg:text-lg sm:text-base text-xs">©lcroixinternational.com</p>
          </div>
        </div>
        <div class="flex xs:w-1/4 w-1/5 flex-col items-center justify-center">
          <div class="w-fit rotate-[-90deg] sm:pb-32 pb-9 ps-20">
            <h1 class="lg:text-4xl md:text-2xl sm:text-xl text-md tracking-wider opacity-70">Sustainabile</h1>
            <div class="flex items-center space-x-4">
              <h1 class="sm:ps-32 ps-10 lg:text-3xl md:text-xl sm:text-lg text-sm tracking-wider opacity-70">
                Hospitality
              </h1>
              <div class="h-[0.1rem] w-14 bg-white opacity-70"></div>
            </div>
          </div>
          <div
            id="indicator"
            class="absolute bottom-0 sm:right-52 right-10 flex transform space-x-2"
          >
            <div
              class="indicator-item h-2 w-2 cursor-pointer rounded-full bg-white opacity-50"
            ></div>
            <div
              class="indicator-item h-2 w-2 cursor-pointer rounded-full bg-white opacity-50"
            ></div>
            <div
              class="indicator-item h-2 w-2 cursor-pointer rounded-full bg-white opacity-50"
            ></div>
          </div>
        </div>
      </div>
      <div class="slider" id="slider">
        <!-- Slide 1 -->
        <div class="slide brightness-[.65]" id="slide1"></div>
        <!-- Slide 2 -->
        <div class="slide brightness-[.65]" id="slide2"></div>
        <!-- Slide 3 -->
        <div class="slide brightness-[.65]" id="slide3"></div>
      </div>
    </section>

    <main class="xs:mt-32 mt-16 flex w-full flex-col justify-center">
      <div class="">
        <!-- About -->
        <section id="about">
          <div class="flex sm:flex-row flex-col sm:items-center justify-between sm:gap-y-0 gap-y-10">
            <div class="xs:w-2/3 w-full xl:ps-56 sm:ps-24 xs:ps-16 ps-9 ">
              <div class="flex items-center space-x-6">
                <h1 class="lg:text-4xl text-2xl text-main">Who We Are ?</h1>
                <div class="h-[0.1rem] w-20 bg-main"></div>
              </div>
              <p class="mt-4 max-w-[53rem] lg:text-base text-[0.8rem] text-dark">
                Welcome to the essence of L’ile Croix International Hospitality.
                Unveil our commitment, expertise, and passion for delivering
                unparalleled hospitality experiences.
              </p>
            </div>
            <div class="flex sm:w-1/3 w-full flex-col items-end justify-center">
              <div class="h-16 w-64 bg-main"></div>
              <div class="h-16 w-48 bg-gray"></div>
            </div>
          </div>
          <div class="relative mt-32 flex items-center justify-between sm:px-48 xs:px-16 px-10">
            <div class="h-[0.2rem] w-20 bg-main sm:static absolute top-12"></div>
            <div class="flex flex-col items-center justify-center space-y-6">
              <img src="{{ asset("/assets/logo-second.png") }}" alt="" class="h-auto lg:w-24 w-16" />
              <h1
                class="max-w-[80%] text-center lg:text-4xl text-2xl tracking-wider text-main"
              >
                L'ile Croix International Hospitality
              </h1>
              <p class="lg:text-base text-[0.8rem] text-dark text-center">
                A Hotel Operation and Management Service Company
              </p>
              <p class="lg:max-w-[50rem] max-w-[30rem] text-center lg:text-base text-[0.8rem] text-dark">
                L’ILE CROIX INTERNATIONAL HOSPITALITY (LCH) is a brand of Hotel
                Operation and Management Service (HOMS) based in the U.S.A.
                under leaderships with extensive experiences in hospitality
                business, education and training, and in technical areas
                involving sustainability, community development and
                international engagements.
              </p>
              <button class="bg-main px-10 py-4 lg:text-base text-[0.8rem] text-white">
                View Our Offer
              </button>
            </div>
            <div class="h-[0.2rem] w-20 bg-main sm:static absolute top-12 right-10"></div>
          </div>
        </section>
        <!-- End About -->

        <!-- Offer -->
        <section id="offer" class="relative mt-60">
          <div class="xl:px-56 sm:px-24 xs:px-16 px-9 w-full py-24">
            <span class="bg-main sm:w-3/5 w-4/5 h-full absolute top-0 left-0 z-[-1]"></span>
            <div class="flex items-center space-x-6">
              <h1 class="lg:text-4xl text-2xl text-white">Service We Offer</h1>
              <div class="h-[0.1rem] w-20 bg-white"></div>
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
        <!-- End Offer -->

        <!-- Details -->
        <section id="detail" class="relative mt-60">
          <div class="flex sm:flex-row flex-col justify-between sm:gap-y-0 gap-y-20 xl:ps-56 xs:ps-24 ps-9">
            <div class="flex-grow space-y-4 pt-16">
              <h1
                class="lg:max-w-[37rem] max-w-80 lg:text-4xl text-2xl leading-relaxed tracking-wider text-main"
              >
                L'ile Croix Convention Hotel and Resort
              </h1>
              <p class="lg:text-base text-[0.8rem] text-dark">
                The first Sustainable Green MICE Hotel & Resort in St. Croix
              </p>
              <button class="bg-main px-10 py-4 lg:text-base text-[0.8rem] text-white">
                Read More
              </button>
            </div>
            <div class="sm:w-3/5 w-full relative flex flex-col items-end">
            <div class="relative">
              <img
                src="{{ asset("/assets/detail/detail1.png") }}"
                alt=""
                class="h-auto w-3/4 right-0 ml-[25%]"
              />
              <div
                class="absolute left-0 bottom-0 flex flex-col items-start justify-center gap-y-6 bg-main lg:pl-12 lg:pr-24 lg:py-8 pl-6 pr-12 py-4"
              >
                <h1
                  class="lg:text-4xl text-2xl leading-relaxed tracking-wider text-white"
                >
                  More Details
                </h1>
                <button
                  class="border border-white px-8 py-3 lg:text-base text-[0.8rem] text-white"
                >
                  Click Here
                </button>
              </div>
            </div>
              <div class="w-full mt-2 grid grid-cols-4 gap-2">
                <div class="h-[9rem] w-full overflow-hidden">
                  <img
                    src="{{ asset("/assets/detail/detail-row1.png") }}"
                    alt=""
                    class="h-full w-full object-cover"
                  />
                </div>
                <div class="h-[9rem] w-full overflow-hidden">
                  <img
                    src="{{ asset("/assets/detail/detail-row2.png") }}"
                    alt=""
                    class="h-full w-full object-cover"
                  />
                </div>
                <div class="h-[9rem] w-full overflow-hidden">
                  <img
                    src="{{ asset("/assets/detail/detail-row3.png") }}"
                    alt=""
                    class="h-full w-full object-cover"
                  />
                </div>
                <div class="h-[9rem] w-full overflow-hidden">
                  <img
                    src="{{ asset("/assets/detail/detail-row4.png") }}"
                    alt=""
                    class="h-full w-full object-cover"
                  />
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- End Details -->

        <!-- Sustainability -->
        <section id="" class="mt-32">
          <div class="flex items-center justify-between lg:px-56 sm:px-48 md:px-24 px-10">
            <div class="h-[0.1rem] w-20 bg-main"></div>
            <div class="space-y-2 text-center">
              <h1 class="lg:text-2xl text-xl leading-relaxed tracking-wider text-main">
                Commitment to
              </h1>
              <h1 class="lg:text-4xl text-2xl leading-relaxed tracking-wider text-main">
                Sustainability & Global Development
              </h1>
              <p class="text-[0.8rem] text-dark">
                © L’ile Croix International Hospitality
              </p>
            </div>
            <div class="h-[0.1rem] w-20 bg-main"></div>
          </div>
          <div class="relative mt-32 flex sm:flex-row flex-col xl:ps-56 md:ps-24 py-[26px] gap-x-3 items-center sm:px-0 xs:px-16 px-10">
            <div class="sm:w-4/12 w-full sm:h-[25rem] flex-grow space-y-3 pt-14">
              <h1 class="lg:text-4xl text-2xl leading-relaxed tracking-wider text-white sm:text-left text-center">
                Sustainability
              </h1>
              <h1 class="lg:text-2xl text-xl leading-relaxed tracking-wider text-white sm:text-left text-center">
                & Social Responsibilities
              </h1>
              <p class="lg:text-base text-[0.8rem] text-white sm:text-left text-center">
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
        <!-- End Sustainability -->

        <!-- Partner -->
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
        <!-- End Partner -->

        <!-- Banner Clients -->
        <section
          id="client"
          class="mt-32 flex py-[6.5rem] w-full flex-col items-center justify-center space-y-8"
        >
          <h1
            class="sm:w-1/2 w-full text-center lg:text-5xl md:text-3xl text-2xl leading-relaxed tracking-wider text-white"
          >
            Decades of Experience in Hospitality Business and Education
          </h1>
          <div class="flex xs:flex-row flex-col lg:space-x-2 xs:space-x-1 xs:space-y-0 space-y-2">
            <img
              src="{{ asset("/assets/client/salakhospitality.png") }}"
              alt=""
              class="h-auto lg:w-60 sm:w-32 w-48"
            />
            <img
              src="{{ asset("/assets/client/sekolahtinggipwstbogor.png") }}"
              alt=""
              class="h-auto lg:w-60 sm:w-32 w-48"
            />
          </div>
          <p class="lg:text-base text-[0.8rem] text-white">
            Let’s join us in shaping sustainable hospitality
          </p>
          <button
            class="border border-white px-8 py-3 lg:text-base text-[0.8rem] text-white"
          >
            View Our Clients
          </button>
        </section>
        <!-- End Banner Clients -->

        <!-- Post -->
        <section class="mt-32 flex flex-col items-center justify-center xl:px-56 md:px-24 xs:px-16 px-10">
          <div class="flex w-full items-center justify-between md:px-48">
            <div class="h-[0.1rem] w-20 bg-main"></div>
            <div class="space-y-3 text-center">
              <h1 class="lg:text-4xl text-2xl leading-relaxed tracking-wider text-main">
                Latest Post
              </h1>
              <p class="text-[0.8rem] text-main">
                © L’ile Croix International Hospitality
              </p>
            </div>
            <div class="h-[0.1rem] w-20 bg-main"></div>
          </div>
          <div class="mt-16 grid md:grid-cols-4 xs:grid-cols-2 grid-cols-1 gap-2">
            <div class="flex w-full items-center justify-center bg-main lg:px-12 lg:py-10 px-10 py-8">
              <div class="flex flex-col items-center justify-center space-y-5">
                <img src="{{ asset("/assets/post/post1.png") }}" alt="" />
                <p class="min-h-16 text-center lg:text-lg text-sm font-medium">
                  Crafting Exceptional Hotel Experiences Together
                </p>
                <button
                  class="border border-white px-8 py-3 lg:text-base text-[0.8rem] text-white"
                >
                <a href="{{ url("article")}}">
                  Read Here
                </a>
                </button>
              </div>
            </div>
            <div class="flex w-full items-center justify-center bg-main px-10 py-8">
              <div class="flex flex-col items-center justify-center space-y-5">
                <img src="{{ asset("/assets/post/post2.png") }}" alt="" />
                <p class="min-h-16 text-center lg:text-lg text-sm font-medium">
                  Strategic Hospitality Solutions for Business Growth
                </p>
                <button
                  class="border border-white px-8 py-3 lg:text-base text-[0.8rem] text-white"
                ><a href="{{ url("article")}}">
                  Read Here
                </a>
                </button>
              </div>
            </div>
            <div class="flex w-full items-center justify-center bg-main px-10 py-8">
              <div class="flex flex-col items-center justify-center space-y-5">
                <img src="{{ asset("/assets/post/post3.png") }}" alt="" />
                <p class="min-h-16 text-center lg:text-lg text-sm font-medium">
                  Connecting People Through Sustainable Hospitality
                </p>
                <button
                  class="border border-white px-8 py-3 lg:text-base text-[0.8rem] text-white"
                >
                <a href="{{ url("article")}}">
                  Read Here
                </a>
                </button>
              </div>
            </div>
            <div class="flex w-full items-center justify-center bg-main px-10 py-8">
              <div class="flex flex-col items-center justify-center space-y-5">
                <img src="{{ asset("/assets/post/post4.png") }}" alt="" />
                <p class="min-h-16 text-center lg:text-lg text-sm font-medium">
                  Transforming Ideas into Exceptional Hotels
                </p>
                <button
                  class="border border-white px-8 py-3 lg:text-base text-[0.8rem] text-white"
                >
                <a href="{{ url("article")}}">
                  Read Here
                </a>
                </button>
              </div>
            </div>
          </div>
        </section>
        <!-- End Post -->
      </div>
    </main>

    <x-footer />


    <script>
      let currentIndex = 0; // Indeks slide saat ini
      const slides = document.querySelectorAll("#slider > div");
      const indicators = document.querySelectorAll(".indicator-item");
      const slideCount = slides.length;
    
      function updateSlider() {
        // Perbarui transformasi slider
        const slider = document.getElementById("slider");
        slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    
        // Perbarui kelas untuk indikator
        indicators.forEach((indicator, index) => {
          if (index === currentIndex) {
            // Indikator aktif (background putih)
            indicator.classList.add("bg-white"); // Background putih untuk yang aktif
            indicator.classList.remove("opacity-50"); // Hapus opacity untuk yang aktif
            indicator.classList.add("opacity-100"); // Set opacity penuh untuk yang aktif
            indicator.classList.remove("border-white"); // Hapus border putih jika ada (jika diperlukan)
          } else {
            // Indikator non-aktif (border putih)
            indicator.classList.add("border-2"); // Tambahkan border jika perlu
            indicator.classList.add("border-white"); // Border putih untuk yang non-aktif
            indicator.classList.remove("bg-white"); // Hapus background untuk yang non-aktif
            indicator.classList.add("opacity-50"); // Atur opacity rendah untuk yang non-aktif
            indicator.classList.remove("opacity-100"); // Hapus opacity penuh untuk yang non-aktif
          }
        });
      }
    
      function changeSlide(index) {
        if (index < 0) {
          currentIndex = slideCount - 1; // Kembali ke slide terakhir
        } else if (index >= slideCount) {
          currentIndex = 0; // Kembali ke slide pertama
        } else {
          currentIndex = index; // Set slide index sesuai tombol diklik
        }
    
        updateSlider();
        clearInterval(slideInterval); // Hentikan interval saat interaksi manual
        startSlideInterval(); // Mulai kembali interval slide otomatis
      }
    
      function startSlideInterval() {
        slideInterval = setInterval(() => {
          currentIndex = (currentIndex + 1) % slideCount; // Ganti slide setiap 11 detik
          updateSlider();
        }, 4000); // Ganti slide setiap 4 detik (waktu diam 2 detik + transisi 2 detik)
      }
    
      // Event listener pada setiap indikator untuk klik manual
      indicators.forEach((indicator, index) => {
        indicator.addEventListener("click", () => {
          currentIndex = index; // Tentukan index berdasarkan klik
          updateSlider();
        });
      });
    
      // Mulai interval slide otomatis saat halaman dimuat
      window.onload = () => {
        startSlideInterval();
        updateSlider(); // Inisialisasi dengan kondisi awal
      };
    
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
        dropdownIconDesk.classList.add('rotate-180')
      } else {
        dropdownDesktop.classList.remove("max-h-auto", "opacity-100", "translate-y-0");
        dropdownDesktop.classList.add("max-h-0", "opacity-0", "-translate-y-5");
        dropdownIconDesk.classList.remove('rotate-180')
      }
    });
    
    </script>
    
  </body>
</html>
