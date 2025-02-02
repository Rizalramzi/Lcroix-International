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
<body class="relative w-full">
    <x-navbar />
    <section id="collaboration" class="relative ">
        <div class="flex flex-col items-center justify-center h-full space-y-2">
            <h1 class="lg:text-[3rem] md:text-[2rem] text-[1.5rem] text-white">Collaboration</h1>
            <p class="lg:text-md md:text-xs text-[0.8rem] text-center text-white">Join us in Shaping Sustainable Hospitality</p>
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
    <x-footer />
</body>
</html>