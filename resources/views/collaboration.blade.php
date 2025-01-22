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
      class="fixed top-0 z-50 flex w-full items-center justify-between px-24 py-6 transition-colors duration-300 ease-in-out"
    >
      <div class="">
        <img id="logo" src="{{ asset('assets/logo.png') }}" alt="Logo" class="h-auto w-40" />
      </div>
      <div>
        <ul class="flex items-center space-x-8 text-sm">
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="{{ url('sustainability') }}">Sustainability and Social Responsibilities</a></li>
          <li><a href="{{ url('collaboration') }}">Collaboration</a></li>
          <li><a href="{{ url('contact') }}">Contact Us</a></li>
        </ul>
      </div>
    </nav>
    <section id="collaboration" class="relative ">
        <div class="flex flex-col items-center justify-center h-full space-y-2">
            <h1 class="text-[3rem]">Collaboration</h1>
            <p class="text-md">Join us in Shaping Sustainable Hospitality</p>
        </div>
    </section>
    <main class="mt-32 flex w-full flex-col justify-center">
        <div class="container mx-auto max-w-[90rem]">
            <section class=" flex flex-col items-center px-24">
                <div class="flex w-full items-center justify-between px-48">
                  <div class="h-[0.1rem] w-20 bg-main"></div>
                  <h1 class="text-2xl leading-relaxed tracking-wider text-main">
                    Why Partnering With Us ?
                  </h1>
                  <div class="h-[0.1rem] w-20 bg-main"></div>
                </div>
                <div class="mt-16 grid grid-cols-4 gap-2">
                  <div class="flex h-56 w-60 items-center bg-gray p-8">
                    <div class="space-y-6">
                      <div
                        class="flex h-14 w-14 items-center justify-center rounded-full bg-main"
                      >
                        <img src="{{ asset("/assets/icons/plus.svg") }}" alt="" class="h-auto w-4" />
                      </div>
                      <p class="min-h-20 text-[0.8rem] text-dark">
                        Extensive proven experience in hospitality business,
                        specifically on MICE operation and management
                      </p>
                    </div>
                  </div>
                  <div class="flex h-56 w-60 items-center bg-gray p-8">
                    <div class="space-y-6">
                      <div
                        class="flex h-14 w-14 items-center justify-center rounded-full bg-main"
                      >
                        <img
                          src="{{ asset("/assets/icons/wallet.svg") }}"
                          alt=""
                          class="h-auto w-4"
                        />
                      </div>
                      <p class="min-h-20 text-[0.8rem] text-dark">
                        Increase potential cash flow profit by lower management and
                        operator costs
                      </p>
                    </div>
                  </div>
                  <div class="flex h-56 w-60 items-center bg-gray p-8">
                    <div class="space-y-6">
                      <div
                        class="flex h-14 w-14 items-center justify-center rounded-full bg-main"
                      >
                        <img src="{{ asset("/assets/icons/book.svg") }}" alt="" class="h-auto w-4" />
                      </div>
                      <p class="min-h-20 text-[0.8rem] text-dark">
                        In-house education and training for acquiring high quality
                        hospitality services
                      </p>
                    </div>
                  </div>
                  <div class="flex h-56 w-60 items-center bg-gray p-8">
                    <div class="space-y-6">
                      <div
                        class="flex h-14 w-14 items-center justify-center rounded-full bg-main"
                      >
                        <img src="{{ asset("/assets/icons/globe.svg") }}" alt="" class="h-auto w-4" />
                      </div>
                      <p class="text-[0.8rem] text-dark">
                        Expertise to support meaningful sustainability, community
                        development and global engagement
                      </p>
                    </div>
                  </div>
                </div>
              </section>
            <section class="w-full mt-32 px-24 space-y-10">
                <div class="flex flex-col items-center w-full space-y-10">
                    <h1 class="text-2xl leading-relaxed tracking-wider text-main text-center max-w-[30rem]">
                        Decades of Experience in Hospitality Business and Education
                    </h1>
                    <div class="flex space-x-2">
                        <img src="{{ asset("/assets/logos/salakhospitality.png") }}" alt="" class="w-40 h-auto">
                        <img src="{{ asset("/assets/logos/sekolahtinggipwstbogor.png") }}" alt="" class="w-40 h-auto">
                    </div>
                </div>
                <div class="">
                    <div class="relative w-full flex justify-start">
                        <img src="{{ asset("/assets/collaboration/hotel-with-umbrella.png") }}" alt="" class="z-0 w-[40rem] h-full">
                        <div class="absolute bottom-[-5rem] z-30 right-0 bg-gray w-[40rem] h-40 flex items-center justify-center p-10 text-dark">
                            <p class="text-sm">LCH leadership in hospitality is supported by international experts from Salak Hospitality group from Indonesia with more than 25 years of experiences in developing, managing and operating 4-star hotels, along with experiences of managing Meeting, Incentive, Convention and Exhibition (MICE) events.</p>
                        </div>
                    </div>
                    <div class="relative w-full flex justify-end mt-32">
                        <img src="{{ asset("/assets/collaboration/hotel-room.png") }}" alt="" class="w-[50rem] h-full">
                        <div class="absolute bottom-0 left-0 bg-gray w-[30rem] h-52 flex items-center justify-center p-10 text-dark">
                            <p class="text-sm">Our hospitality program is also supported by STP Bogor (Bogor College of Tourism), established in 1999 in Bogor City, Indonesia, which has produced more than 10,000 alumni spread around the world working in various areas of hospitality and tourism sectors. These Alumni are valuable network for LCH in developing its international presence.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer class="mt-32 w-full bg-main px-24 py-20">
        <div class="flex w-full">
          <div class="w-2/6 space-y-3">
            <h1 class="text-2xl text-white">
              L'ile Croix International Hospitality
            </h1>
            <p class="text-[0.7rem]">
              ©2025 All Rights Reserved. Published by www.eda.co.id
            </p>
            <div class="flex items-center space-x-2">
              <img src="{{ asset("/assets/icons/linkedin.svg") }}" alt="" class="h-6 w-auto" />
              <img src="{{ asset("/assets/icons/email.svg") }}" alt="" class="h-6 w-auto" />
              <img src="{{ asset("/assets/icons/instagram.svg") }}" alt="" class="h-6 w-auto" />
            </div>
          </div>
          <div class="flex w-4/6 justify-end text-white">
            <div class="grid grid-cols-3">
              <div class="flex justify-center">
                <ul class="space-y-3 text-[0.8rem]">
                  <li class="font-semibold"><a href="{{ url("") }}">Links</a></li>
                  <li class=""><a href="{{ url("") }}">Home</a></li>
                  <li class=""><a href="{{ url("") }}">About Us</a></li>
                  <li class=""><a href="{{ url("") }}">Our Services</a></li>
                  <li class=""><a href="{{ url("") }}">Our Projects</a></li>
                  <li class=""><a href="{{ url("") }}">Collaboration</a></li>
                </ul>
              </div>
              <div class="">
                <ul class="space-y-3 text-[0.8rem]">
                  <li class="font-semibold"><a href="{{ url("") }}">Address</a></li>
                  <li class="max-w-40">
                    <a href="{{ url("") }}">4305 Ammons Street Wheat Ridge, CO 83003</a>
                  </li>
                </ul>
              </div>
              <div class="flex justify-center">
                <ul class="space-y-3 text-[0.8rem]">
                  <li class="font-semibold"><a href="{{ url("") }}">Contact Us</a></li>
                  <li class="max-w-52">
                    <a href="{{ url("") }}"
                      >For further information, please contact us via the
                      following</a
                    >
                  </li>
                  <li>
                    <div class="flex items-center space-x-2">
                      <img
                        src="{{ asset("/assets/icons/phone.svg") }}"
                        alt=""
                        class="h-6 w-auto"
                      />
                      <p class="text-[0.8rem]">+1(515)240-3086</p>
                    </div>
                  </li>
                  <li>
                    <div class="flex items-center space-x-2">
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
</body>
</html>